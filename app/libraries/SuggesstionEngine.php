<?php

require_once '../app/models/Website.php';

class SuggesstionEngine
{
    protected $forbiddenWritersId;
    public $appliedRequests;
    protected $currentService;
    protected $currentSubject;
    protected $currentType;
    protected $currentQueue;
    protected $list = [];

    public function __construct()
    {
        $this->db = new Database();
    }

    public function run()
    {
        $this->appliedRequests = $this->getAppliedRequests();
        $this->websiteModel = new Website();
        $this->websiteModel->setPriority();
        if ($this->appliedRequests != false) {
            foreach ($this->appliedRequests as $request) {
                $this->list = [];
                $this->createOrGetQueue($request['id']);
                $this->engine($request);
            }
        }
        return "success";
    }

    public function createOrGetQueue($requestId)
    {
        $stmt = $this->db->dbConnection->prepare("SELECT * FROM `request_writer_queue` WHERE `request_id` = ?;");
        $stmt->execute([$requestId]);
        if ($stmt->rowCount() > 0) {
            $this->currentQueue = $stmt->fetch(\PDO::FETCH_ASSOC);
        } else {
            $this->createQueue($requestId);
        }
    }

    public function createQueue($requestId)
    {
        $stmt = $this->db->dbConnection->prepare("INSERT INTO `request_writer_queue` (`request_id`, `created_at`)
         VALUE (? ,?);");
        $stmt->execute([$requestId, time()]);
        $this->createOrGetQueue($requestId);
    }

    public function engine($orderRequest)
    {
        $this->currentSubject = $orderRequest['subject'];
        $this->currentService = $orderRequest['service'];
        $this->currentType = $orderRequest['type'];

        $this->subjectId = $this->websiteModel->getSubjectId($this->currentSubject);
        $this->typeId = $this->websiteModel->getTypeId($this->currentType);
        $this->serviceId = $this->websiteModel->getServiceId($this->currentService);


        $this->getForbiddenWriters();
        $this->getWritersBySubjectServiceType();
        if (sizeof($this->list) < 3) {
            $this->getWritersBySubjectService();
            // echo "this is form writerSubjectService";
            // print_r($this->list);
        }
        if (sizeof($this->list) < 3) {

            $this->getWritersBySubject();
        }
        if (sizeof($this->list) < 4) {

            $this->getWritersByTypeService();
        }
        if (sizeof($this->list) < 1) {

            $this->getWritersByType();
        }
        if (sizeof($this->list) < 2) {

            $this->getWritersByService();
        }
        if (sizeof($this->list) < 1) {

            $this->assignAnyWriter();
        }
        $this->saveQueue();
        $this->setCurrentWriter();
        return "success";
    }

    public function setCurrentWriter()
    {
        $stmt = $this->db->dbConnection->prepare("SELECT * FROM `request_writer_queue` WHERE `id` = ?;");
        $stmt->execute([$this->currentQueue['id']]);
        $executingQuery = $stmt->fetch(\PDO::FETCH_ASSOC);
        $writerLists = json_decode($executingQuery['writer_id_on_queue_list']);
        $selectedCurrentWriter = '';
        
        for($i = 0 ;$i < sizeof($writerLists); $i++){
            $stmt = $this->db->dbConnection->prepare("SELECT * FROM `request_writer_queue` WHERE `current_writer_id` = ?;");
            $stmt->execute([$writerLists[$i]]);
            if($stmt->rowCount() > 3){ 
                
              //  continue;
            }
            else{
                $stmt = $this->db->dbConnection->prepare("UPDATE `request_writer_queue` SET `current_writer_id`=? WHERE `id` = ?;");
                $stmt->execute([$writerLists[$i], $this->currentQueue['id']]);
                $selectedCurrentWriter = $writerLists[$i];
                break;
            }
        }
        if($selectedCurrentWriter == ''){
            $stmt = $this->db->dbConnection->prepare("UPDATE `request_writer_queue` SET `current_writer_id`=? WHERE `id` = ?;");
            $stmt->execute([$this->list[0], $this->currentQueue['id']]);
        }
    }

    public function saveQueue()
    {
        $stmt = $this->db->dbConnection->prepare("UPDATE `request_writer_queue` SET `writer_id_on_queue_list` = ?,
         `itteration_no`=?, `updated_at`=? WHERE `id` = ?;");
        $stmt->execute([
            json_encode($this->list),
            $this->currentQueue['itteration_no'] + 1,time(), $this->currentQueue['id']
        ]);
    }

    public function getForbiddenWriters()
    {
        if (isset($this->currentQueue['already_queued_id'])) {
            $this->forbiddenWritersId = json_decode($this->currentQueue['already_queued_id']);
        }
    }

    public function getWritersBySubjectServiceType()
    {

        $stmt = $this->db->dbConnection->prepare("SELECT * FROM `writer_subject`
            LEFT JOIN `writer_service` ON `writer_subject`.`user_id` =`writer_service`.`user_id`   
            LEFT JOIN `writer_type` ON `writer_subject`.`user_id` = `writer_type`.`user_id`
            WHERE `writer_subject`.`subject_id` = ? 
            AND `writer_service`.`service_id` =? AND `writer_type`.`type_id` = ?
            ORDER BY `writer_subject`.`priority` 
        ");
        $stmt->execute([$this->subjectId['id'], $this->serviceId['id'], $this->typeId['id']]);
        $this->assignInList($stmt->fetchAll(\PDO::FETCH_ASSOC));
    }

    public function getWritersBySubjectService()
    {
        $stmt = $this->db->dbConnection->prepare("SELECT * FROM `writer_subject`
            JOIN `writer_service` ON `writer_subject`.`user_id` =`writer_service`.`user_id`   
            WHERE `writer_subject`.`subject_id` = ? 
            AND `writer_service`.`service_id` =?
            ORDER BY `writer_subject`.`priority` 
        ");
        $stmt->execute([$this->subjectId['id'], $this->serviceId['id']]);
        $this->assignInList($stmt->fetchAll(\PDO::FETCH_ASSOC));
    }

    public function getWritersBySubject()
    {
        $stmt = $this->db->dbConnection->prepare("SELECT * FROM `writer_subject`
            WHERE `writer_subject`.`subject_id` = ? 
            ORDER BY `writer_subject`.`priority` 
        ");
        $stmt->execute([$this->subjectId['id']]);
        $this->assignInList($stmt->fetchAll(\PDO::FETCH_ASSOC));
    }

    public function getWritersByTypeService()
    {
        $stmt = $this->db->dbConnection->prepare("SELECT * FROM `writer_service`
            LEFT JOIN `writer_type` ON `writer_service`.`user_id` = `writer_type`.`user_id`
             WHERE `writer_service`.`service_id` =? AND `writer_type`.`type_id` = ?
            ORDER BY `writer_service`.`priority` 
        ");
        $stmt->execute([$this->serviceId['id'], $this->typeId['id']]);
        $this->assignInList($stmt->fetchAll(\PDO::FETCH_ASSOC));
    }

    public function getWritersByType()
    {
        $stmt = $this->db->dbConnection->prepare("SELECT * FROM `writer_type`     
         WHERE  `writer_type`.`type_id` = ?
        ORDER BY `writer_type`.`priority` 
    ");
        $stmt->execute([$this->typeId['id']]);
        $this->assignInList($stmt->fetchAll(\PDO::FETCH_ASSOC));
    }

    public function getWritersByService()
    {
        $stmt = $this->db->dbConnection->prepare("SELECT * FROM `writer_service` 
         WHERE  `writer_service`.`service_id` = ?
        ORDER BY `writer_service`.`priority` 
    ");
        $stmt->execute([$this->serviceId['id']]);
        $this->assignInList($stmt->fetchAll(\PDO::FETCH_ASSOC));
    }

    public function assignAnyWriter()
    {
        $stmt = $this->db->dbConnection->prepare("SELECT * FROM `user` 
        JOIN `user_role` ON `user`.`id` = `user_role`.`user_id`
         WHERE  `user_role`.`role_id` = ?
    ");
        $stmt->execute([3]);
        $this->assignInList($stmt->fetchAll(\PDO::FETCH_ASSOC));
    }

    public function getAppliedRequests()
    {
        $stmt = $this->db->dbConnection->prepare("SELECT * FROM order_request WHERE `status` = ?");
        $stmt->execute(['progress']);
        if ($stmt->rowCount() > 0) {
            return $stmt->fetchAll(\PDO::FETCH_ASSOC);
        }
        return false;
    }

    public function assignInList($array)
    {
        if (sizeof($array) > 0) {
            foreach ($array as $result) {
                if (isset($this->forbiddenWritersId)) {
                    if (!in_array($result['user_id'], $this->forbiddenWritersId)) {
                        array_push($this->list, $result['user_id']);
                    }
                } else {
                    array_push($this->list, $result['user_id']);
                }
            }
        }
    }
}
