<?php
require_once '../app/libraries/SuggesstionEngine.php';

class OrderRequest
{
    protected $db;
    protected $normalServicePrice = [
        'high_school' => ['', 22, 21, 20, 19, 18, 17, 16],
        'college' => ['', 25, 24, 22, 20, 19, 18, 17],
        'undergraduate' => ['', 26, 25, 24, 23, 22, 21, 20],
        'masters' => ['', 40, 36, 31, 30, 27, 26, 25],
        'phd' => ['', 42, 40, 38, 36, 34, 32, 30],
        'hw' => ['', 20, 19, 18, 17, 16, 14, 13]
    ];

    protected $writerGet = [
        '',  10, 9, 8 , 7, 7, 6,6 
    ];

    public function __construct()
    {
        $this->db = new Database();
    }

    public function deleteById($id)
    {
        $stmt = $this->db->dbConnection->prepare("DELETE FROM order_request WHERE `id` =?;");
        $stmt->execute([$id]);
        return true;
    }

    public function savePrices($requestId, $price)
    {
        $stmt = $this->db->dbConnection->prepare("SELECT * FROM `order_request` WHERE `id`=?;");
        $stmt->execute([$requestId]);
        $orderRequest = $stmt->fetch(\PDO::FETCH_ASSOC);
        if($orderRequest['service'] == "Writing"){
            $writerPrice = $this->writerGet[$orderRequest['duration']] * $orderRequest['page_number'];
        }
        elseif($orderRequest['service'] == "Editing"){
            $writerPrice = 5*$orderRequest['page_number'];
        }
        elseif($orderRequest['service'] == "Re_Writing"){
            $writerPrice = 7*$orderRequest['page_number'];
        }
        elseif($orderRequest['service'] == "Presentation"){
            $writerPrice = 2*$orderRequest['page_number'];
        }

        $price = (double) $price;
        $writerPrice = (double) $writerPrice;
        $stmt = $this->db->dbConnection->prepare("UPDATE `order_request` SET `price`=? , `price_after_service_charge`=? WHERE `id`=?;");
        $stmt->execute([$price, $writerPrice, $requestId]);

    }

    public function findById($requestId)
    {
        $stmt = $this->db->dbConnection->prepare("SELECT * FROM order_request WHERE `id` = ? ");
        $stmt->execute([$requestId]);
        if ($stmt->rowCount() > 0) {
            return $stmt->fetch(\PDO::FETCH_ASSOC);
        }
        return false;
    }

    public function checkWriterAuthorityToPerformOrder($requestId, $userId)
    {
        $stmt = $this->db->dbConnection->prepare("SELECT * FROM `request_writer_queue` WHERE `request_id`=?
         AND `current_writer_id`=?;");
         $stmt->execute([$requestId, $userId]);
         if($stmt->rowCount() > 0){
             return "success";
         }
         return "not-success";
    }

    public function getByUserId($userId)
    {
        $stmt = $this->db->dbConnection->prepare("SELECT * FROM order_request WHERE `user_id` = ? ");
        $stmt->execute([$userId]);
        if ($stmt->rowCount() > 0) {
            return $stmt->fetchAll(\PDO::FETCH_ASSOC);
        }
        return false;
    }

    public function draftSave($userId, $type, $page, $lavel, $service, $language = "en", $day)
    {
        $stmt = $this->db->dbConnection->prepare("INSERT INTO order_request 
        (`type`, `page_number`, `service`, `lavel`, `user_id`, `language`, `status`, `duration`, `created_at`)
         VALUE (?, ?, ?, ?, ?, ?, ?, ?, ?)");
        $stmt->execute([$type, $page, $service, $lavel, $userId, $language, 'draft', $day, time()]);
        if ($stmt->rowCount() > 0) {
            $_SESSION['draft_id'] = $this->db->dbConnection->lastInsertId();
            return true;
        }
    }

    public function getByStatusAndUser($userId, $status)
    {
        $stmt = $this->db->dbConnection->prepare("SELECT * FROM order_request WHERE `user_id` = ? AND `status` =?");
        $stmt->execute([$userId, $status]);
        return $stmt->fetchAll(\PDO::FETCH_ASSOC);
    }

    public function calculatePrice($requestId)
    {
        $stmt = $this->db->dbConnection->prepare("SELECT * FROM order_request WHERE `id` = ?");
        $stmt->execute([$requestId]);
        $orderRequest = $stmt->fetch(\PDO::FETCH_ASSOC);
        $price = 0;
        if ($orderRequest['service'] != 'presentation') {
            $price = $this->normalServicePrice[$orderRequest['lavel']][$orderRequest['duration']];
            if ($orderRequest['service'] == 'editing') {
                $price = $price - 4;
            }
            if ($orderRequest['service'] == 'rewriting') {
                $price = $price - 2;
            }
            $price = $price * $orderRequest['page_number'];
        } else {
        }
        return $price;
    }

    public function onProcessSave($draftId, $subject, $style = "", $topic = "", $resource = "")
    {
        $stmt = $this->db->dbConnection->prepare("UPDATE order_request SET `subject`=?, `style`=?,
        `topic` =? , `source` =? , `status`= ?
         WHERE `id` = ?");
        $stmt->execute([$subject, $style, $topic, $resource, 'progress', $draftId]);
        if ($stmt->rowCount() > 0) {
            $_SESSION['order_request'] = $this->db->dbConnection->lastInsertId();
            return true;
        }
    }

    public function getOrderRequestBySuggesstionByUserId($userId)
    {
        $stmt = $this->db->dbConnection->prepare("SELECT `order_request`.*, `request_writer_queue`.`current_writer_id` FROM `order_request` JOIN `request_writer_queue`
         ON `order_request`.`id`= `request_writer_queue`.`request_id` WHERE 
         `order_request`.`status` = ? AND `request_writer_queue`.`current_writer_id` = ?;");
        $stmt->execute(['progress', $userId]);
        return $stmt->fetchAll(\PDO::FETCH_ASSOC);
    }

    public function acceptRequest($requestId, $userId)
    {
        $stmt = $this->db->dbConnection->prepare("UPDATE `order_request` SET `status` =? WHERE `id` =?;");
        $stmt->execute(['completed', $requestId]);
        $stmt = $this->db->dbConnection->prepare("UPDATE `request_writer_queue` SET `won_by_id`=? 
         WHERE `request_id`=?;");
        $stmt->execute([$userId, $requestId]);

        $stmt= $this->db->dbConnection->prepare("SELECT * FROM `order_request` WHERE `id`=?;");
        $stmt->execute([$requestId]);
        $request = $stmt->fetch(\PDO::FETCH_ASSOC);

        $startingTime = time();
        $endingTime  = time() + ($request['duration']*24*60*60);
        $stmt = $this->db->dbConnection->prepare("INSERT INTO `orders` (`startingTime`,`endingTime`,
        `status`,`writer_id`, `student_id`, `request_id`, `price`, `price_after_service_charge`,`created_at`) 
        VALUE (?, ?, ?, ?, ?, ?,?, ?,?);");

        $stmt->execute([$startingTime, $endingTime, 'progress', $userId, $request['user_id'], 
        $request['id'], $request['price'], $request['price_after_service_charge'], time()]);
        return 'success';
    }

    public function denyRequest($requestId, $userId)
    {
        $stmt = $this->db->dbConnection->prepare("SELECT * FROM `request_writer_queue` WHERE `request_id`=?
        AND `current_writer_id`=?;");
        $stmt->execute([$requestId, $userId]);
        $queue = $stmt->fetch(\PDO::FETCH_ASSOC);
        if(isset($queue['already_queued_id'])){
            $forbidden = json_decode($queue['already_queued_id']);
            array_push($forbiden, $userId);
        }
        else{
            $forbidden = [];
            array_push($forbidden, $userId);
        }
        $stmt=$this->db->dbConnection->prepare("UPDATE `request_writer_queue` SET `already_queued_id`=? WHERE `request_id`=?");
        $stmt->execute([json_encode($forbidden), $requestId]);

        $suggesstion  = new SuggesstionEngine();
        $suggesstion->run();
        return "success";
       
    }

    public function getPrice($page, $service, $subject , $day, $lavel)
    {
        $price = 0;
        if ($service != 'presentation') {
            $price = $this->normalServicePrice[$lavel][$day];
            if ($service == 'editing') {
                $price = $price - 4;
            }
            if ($service == 'rewriting') {
                $price = $price - 2;
            }
            $price = $price * $page;
        } else {
        }
        return $price;
    }
}
