<?php


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

    public function __construct()
    {
        $this->db = new Database();
    }

    public function getByUserId($userId)
    {

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
}
