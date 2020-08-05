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
    public function insert_chatroom($data)
    {
        print_r($data);
        exit();
        $created_at = date("Y/m/d H:i:s");

        $this->db->query('INSERT INTO chatroom (offer_id, user_id, big_id_participent, created_at) VALUES (:offer_id, :user_id, :big_id_participent, :created_at)');

        //        Bind values
        $this->db->bind(':offer_id', $data['offer_id']);
        $this->db->bind(':user_id', $data['user_id']);
        $this->db->bind(':big_id_participent', $data['big_id_participent']);
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
        $query = "SELECT * FROM user WHERE id = '$user_id'";
        $statement = $this->db->dbConnection->prepare($query);
        $statement->execute();
        return $statement->fetch();

    }
    function get_admin_id()
    {
        $query = "SELECT * FROM user_role WHERE role_id = 2";
        $statement = $this->db->dbConnection->prepare($query);
        $statement->execute();
        return $statement->fetchAll();

    }
    function getChatUserId($user_id)
    {
        $query = "SELECT big_id_participent FROM chatroom WHERE user_id = '$user_id'";
        $statement = $this->db->dbConnection->prepare($query);
        $statement->execute();
        return $statement->fetchAll();

    }
    function get_admin_details_by_id($user_id)
    {
        $query = "SELECT * FROM user WHERE id = '$user_id'";
        $statement = $this->db->dbConnection->prepare($query);
        $statement->execute();
        return $statement->fetchAll();

    }
    function user_by_id($user_id)
    {
        $query = "SELECT * FROM user WHERE id = '$user_id'";
        $statement = $this->db->dbConnection->prepare($query);
        $statement->execute();
        return $statement->fetchAll();

    }
    function getChatReceiverUserId($user_id)
    {
        $query = "SELECT sender_id  FROM message WHERE receiver_id = '$user_id'";
        $statement = $this->db->dbConnection->prepare($query);
        $statement->execute();
        return $statement->fetchAll();

    }
    public function check_exist_chatroom($user_id,$big_id_participent)
    {
        $this->db->query('SELECT * FROM chatroom WHERE user_id = :user_id AND big_id_participent=:big_id_participent');
        $this->db->bind(':user_id', $user_id);
        $this->db->bind(':big_id_participent', $big_id_participent);
        $row = $this->db->single();

        if ($this->db->rowCount() > 0) {
            return true;
        } else {
            return false;
        }
    }
    public function update_chatroom($data)
    {

        $this->db->query('UPDATE chatroom SET offer_id='.$data['offer_id'].'  WHERE user_id=:user_id AND big_id_participent=:big_id_participent');
        $this->db->bind(':user_id', $data['user_id']);
        $this->db->bind(':big_id_participent', $data['big_id_participent']);
        if( $this->db->execute())
        {
//            print_r('true');
//            exit();
            return true;
        }

        else {
            return false;
        }
    }
//    function user_name_fetch($user_id)
//    {
//        $query = "SELECT f_name FROM user WHERE id = '$user_id'";
//        $statement = $this->db->dbConnection->prepare($query);
//        $statement->execute();
//        return $statement->fetch(\PDO::FETCH_ASSOC);;
//
//    }

}