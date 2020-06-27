<?php


class Order{
    protected $db;

    public function __construct(){
        $this->db = new Database();
    }

    public function getByUserIdAndStatus($userId, $status){
        if($_SESSION['role'] == 3){
            $stmt = $this->db->dbConnection->prepare("SELECT * FROM `orders` 
            WHERE `writer_id` = ? AND `status` = ?");
            $stmt->execute([$userId, $status]);
            return $stmt->fetchAll(\PDO::FETCH_ASSOC);
        }
        elseif($_SESSION['role'] == 4){
            $stmt = $this->db->dbConnection->prepare("SELECT * FROM `orders` 
            WHERE `student_id` = ? AND `status` = ?");
            $stmt->execute([$userId, $status]);
            return $stmt->fetchAll(\PDO::FETCH_ASSOC);
        }

    }

}