<?php

require_once '../app/models/Website.php';

class SuggesstionEngine{
    protected $forbiddenWritersId;
    public $appliedRequests;
    protected $currentService;
    protected $currentSubject;
    protected $currentType;
    protected $currentQueue;
    protected $list;

    public function __construct(){
        $this->db = new Database();
    }

    public function run()
    {
        $this->appliedRequests = $this->getAppliedRequests();
        $this->websiteModel = new Website();
        $this->websiteModel->setPriority();
        if($this->appliedRequests != false){
            foreach($this->appliedRequests as $request){
                $this->createOrGetQueue($request['id']);
                $this->engine($request);
            }
        }
    }

    public function createOrGetQueue($requestId)
    {
        $stmt = $this->db->dbConnection->prepare("SELECT * FROM `request_writer_queue` WHERE `request_id` = ?;");
        $stmt->execute([$requestId]);
        if($stmt->rowCount() > 0){
            $this->currentQueue = $stmt->fetchAll(\PDO::FETCH_ASSOC);
        }
        else{
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
        $this->getForbiddenWriters();
        $this->getWritersBySubjectServiceType();
        $this->getWritersBySubjectService();
        $this->getWritersBySubject();
        $this->getWritersByTypeService();
        $this->getWritersByType();
        $this->getWritersByService();
        $this->assignAnyWriter();
        print_r($this->list);
        
    }

    public function getForbiddenWriters()
    {
        if(isset($this->currentQueue['already_queued_id'])){
            $this->forbiddenWritersId = json_decode($this->currentQueue['already_queued_id']);
        }
      
    }

    public function getWritersBySubjectServiceType()
    {
        $subjectId = $this->websiteModel->getSubjectId($this->currentSubject);
        $typeId = $this->websiteModel->getTypeId($this->currentType);
        $serviceId = $this->websiteModel->getServiceId($this->currentService);

        $stmt = $this->db->dbConnection->prepare("SELECT * FROM `user` JOIN `writer_subject` ON 
        `user`.`id` = `writer_subject`.`user_id`
            JOIN `writer_service` ON `user`.`id` =`writer_service`.`user_id`   
            JOIN `writer_type` ON `user`.`id` = `writer_type`.`user_id`
            WHERE `writer_subject`.`subject_id` = ? AND `writer_service`.`service_id` = ?
            And `writer_type`.`type_id` = ? ORDER BY `writer_subject`.`priority` 
        ");
        $stmt->execute([$subjectId, $serviceId, $typeId]);
        $this->list = $stmt->fetchAll(\PDO::FETCH_ASSOC);
    }

    public function getWritersBySubjectService()
    {

    }

    public function getWritersBySubject()
    {

    }

    public function getWritersByTypeService()
    {

    }

    public function getWritersByType()
    {
        
    }

    public function getWritersByService()
    {
        
    }

    public function assignAnyWriter()
    {
        
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

}


