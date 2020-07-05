<?php


class Chat{
    protected $db;

    public function __construct(){
        $this->db = new Database();
    }



    public function saverecords($data)
    {
        $created_at = date("Y/m/d H:i:s");

        $this->db->query('INSERT INTO message (sender_id, message, receiver_id, created_at) VALUES (:sender_id, :message, :receiver_id, :created_at)');

        //        Bind values
        $this->db->bind(':sender_id', $data['sender_id']);
        $this->db->bind(':message', $data['message']);
        $this->db->bind(':receiver_id', $data['receiver_id']);
        $this->db->bind(':created_at', $created_at);

        //        Execute
       $this->db->execute();
    }

    public function all_records($sender_id,$receiver_id)
    {

        $query = "
	SELECT * FROM message
	WHERE (sender_id = '".$sender_id."'
	AND receiver_id = '".$receiver_id."')
	OR (sender_id = '".$receiver_id."'
	AND receiver_id = '".$sender_id."')
	ORDER BY created_at ASC
	";
        $statement = $this->db->dbConnection->prepare($query);
        $statement->execute();
        return $statement->fetchAll();


//        $stmt = $this->db->dbConnection->prepare("SELECT * FROM message
//	WHERE (sender_id = :sender_id
//	AND receiver_id = :receiver_id )
//
//	ORDER BY created_by DESC
//	");
//
//        $this->db->bind(':sender_id', $sender_id);
//        $this->db->bind(':receiver_id', $receiver_id);
//        $stmt->execute();
//        return $stmt->fetchAll();

    }
    function get_user_name($user_id)
    {
        $query = "SELECT f_name FROM user WHERE id = '$user_id'";
        $statement = $this->db->dbConnection->prepare($query);
        $statement->execute();
        return $statement->fetchAll();

    }
    function user_name_fetch($user_id)
    {
        $query = "SELECT f_name FROM user WHERE id = '$user_id'";
        $statement = $this->db->dbConnection->prepare($query);
        $statement->execute();
        return $statement->fetch(\PDO::FETCH_ASSOC);;

    }

}