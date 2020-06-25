<?php


class Website{
    protected $db;

    public function __construct(){
        $this->db = new Database();
    }

    public function getSubjects(){
       $stmt = $this->db->dbConnection->prepare("SELECT * FROM `subject` ");
       $stmt->execute();
       return $stmt->fetchAll(\PDO::FETCH_ASSOC);

    }

    public function saveSubject($userId, $subject)
    {
        $subjectId = $this->getSubjectId($subject);
        $stmt = $this->db->dbConnection->prepare("SELECT * FROM `writer_subject` where `user_id` = ? AND `subject_id` = ?");
        $stmt->execute([$userId, $subjectId['id']]);
        if($stmt->rowCount() == 0){
            $saveStmt = $this->db->dbConnection->prepare("INSERT INTO `writer_subject` (`user_id`, `subject_id`) VALUE (?, ?)");
            $saveStmt->execute([$userId, $subjectId['id']]);
        }
        return $this->getWriterSubject($userId);
       
    }

    public function saveService($userId, $service)
    {
        $serviceId = $this->getServiceId($service);
        $stmt = $this->db->dbConnection->prepare("SELECT * FROM `writer_service` where `user_id` = ? AND `service_id` = ?");
        $stmt->execute([$userId, $serviceId['id']]);
        if($stmt->rowCount() == 0){
            $saveStmt = $this->db->dbConnection->prepare("INSERT INTO `writer_service` (`user_id`, `service_id`) VALUE (?, ?)");
            $saveStmt->execute([$userId, $serviceId['id']]);
        }
        return $this->getWriterService($userId);
       
    }

    public function saveType($userId, $type)
    {
        $typeId = $this->getTypeId($type);
        $stmt = $this->db->dbConnection->prepare("SELECT * FROM `writer_type` where `user_id` = ? AND `type_id` = ?");
        $stmt->execute([$userId, $typeId['id']]);
        if($stmt->rowCount() == 0){
            $saveStmt = $this->db->dbConnection->prepare("INSERT INTO `writer_type` (`user_id`, `type_id`) VALUE (?, ?)");
            $saveStmt->execute([$userId, $typeId['id']]);
        }
        return $this->getWriterType($userId);
       
    }

    public function getWriterSubject($userId)
    {
        $userSub = $this->db->dbConnection->prepare("SELECT `name`, `priority` FROM `writer_subject` JOIN `subject` 
        ON (`writer_subject`.`subject_id` = `subject`.`id`) WHERE `writer_subject`.`user_id` = ?");
        $userSub->execute([$userId]);
        return $userSub->fetchAll(\PDO::FETCH_OBJ);
    }

    public function getWriterService($userId)
    {
        $userSub = $this->db->dbConnection->prepare("SELECT `name`, `priority` FROM `writer_service` JOIN `service` 
        ON (`writer_service`.`service_id` = `service`.`id`) WHERE `writer_service`.`user_id` = ?");
        $userSub->execute([$userId]);
        return $userSub->fetchAll(\PDO::FETCH_OBJ);
    }

    public function getWriterType($userId)
    {
        $userSub = $this->db->dbConnection->prepare("SELECT `name`, `priority` FROM `writer_type` JOIN `type` 
        ON (`writer_type`.`type_id` = `type`.`id`) WHERE `writer_type`.`user_id` = ?");
        $userSub->execute([$userId]);
        return $userSub->fetchAll(\PDO::FETCH_OBJ);
    }

    public function getSubjectId($subject)
    {
        $stmt= $this->db->dbConnection->prepare("SELECT `id` FROM `subject` WHERE `name` = ? ");
        $stmt->execute([$subject]);
        return $stmt->fetch(\PDO::FETCH_ASSOC);
    }

    public function getServiceId($service)
    {
        $stmt= $this->db->dbConnection->prepare("SELECT `id` FROM `service` WHERE `name` = ? ");
        $stmt->execute([$service]);
        return $stmt->fetch(\PDO::FETCH_ASSOC);
    }

    public function getTypeId($type)
    {
        $stmt= $this->db->dbConnection->prepare("SELECT `id` FROM `type` WHERE `name` = ? ");
        $stmt->execute([$type]);
        return $stmt->fetch(\PDO::FETCH_ASSOC);
    }

    public function getServices()
    {
        $stmt = $this->db->dbConnection->prepare("SELECT * FROM `service` ");
        $stmt->execute();
        return $stmt->fetchAll(\PDO::FETCH_ASSOC);
    }

    public function getType()
    {
        $stmt = $this->db->dbConnection->prepare("SELECT * FROM `type` ");
        $stmt->execute();
        return $stmt->fetchAll(\PDO::FETCH_ASSOC);
    }

    public function deletePreference($userId, $table, $name)
    {
        $formaterFunctionName = "get".ucfirst($table)."Id";
        $nameId = $this->$formaterFunctionName($name);
        $tableId = $table.'_id';
        $stmt = $this->db->dbConnection->prepare("DELETE FROM `writer_$table` WHERE `user_id` =? AND `$tableId` = ?");
        $stmt->execute([ $userId,  $nameId['id']]);
    }

    public function setPriority()
    {
        $tables = ['subject', 'service', 'type'];
        foreach($tables as $table){
            $stmt = $this->db->dbConnection->query("SELECT * FROM `writer_$table`;");
            $writerTables = $stmt->fetchAll(\PDO::FETCH_ASSOC);
            if(isset($writerTables[0])){
                foreach($writerTables as $row){
                    $stmt = $this->db->dbConnection->prepare("SELECT * FROM `writer_$table` WHERE 
                    `user_id`=? AND `id` < ? ORDER BY  `id` DESC;");
                    $stmt->execute([$row['user_id'], $row['id']]);
                    if($stmt->rowCount() == 0){
                        $stmt = $this->db->dbConnection->prepare("UPDATE `writer_$table` SET `priority`= ?
                        WHERE `id` = ?; ");
                        $stmt->execute([1, $row['id']]);
                    }
                    else{
                        $writerTableByUser = $stmt->fetchAll(\PDO::FETCH_ASSOC);
                        $priority = $writerTableByUser[0]['priority'] +1;
                        $stmt = $this->db->dbConnection->prepare("UPDATE `writer_$table` SET `priority`=?
                        WHERE `id` = ?; ");
                        $stmt->execute([$priority, $row['id']]);

                    }
                }
            }
        }
    }
}