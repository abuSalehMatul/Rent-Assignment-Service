<?php


class MediA{
    protected $db;

    public function __construct(){
        $this->db = new Database();
    }

    public function getMedia($tableName, $id){
       $stmt = $this->db->dbConnection->prepare("SELECT `file` FROM media 
       WHERE `mediable_id` = ? AND `mediable_type` = ?");
       $stmt->execute([$id, $tableName]);
       return $stmt->fetchAll(\PDO::FETCH_ASSOC);

    }

    public function saveMedia($tableName, $id)
    {

    }

}