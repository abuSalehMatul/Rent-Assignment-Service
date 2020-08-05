<?php


class User
{
    private $db;

    public function __construct()
    {
        $this->db = new Database();
    }

    //    Register backend
    public function register($data)
    {
        $this->db->query('INSERT INTO user (email, password, role, token) VALUES (:email, :password, :role, :token)');

        //        Bind values
        $this->db->bind(':email', $data['email']);
        $this->db->bind(':password', $data['pass']);
        $this->db->bind(':role', $data['role']);
        $this->db->bind(':token', $data['token']);

        //        Execute
        if ($this->db->execute()) {

            return $this->db->last_insert();
        } else {
            return false;
        }
    }
    public function add_review($data)
    {
        $this->db->query('INSERT INTO review (customer_name, writer_name, topic, comment,rating,date) VALUES (:customer_name,:writer_name, :topic, :comment, :rating, :date)');

        //        Bind values
        $this->db->bind(':customer_name', $data['customer_name']);
        $this->db->bind(':writer_name', $data['writer_name']);
        $this->db->bind(':topic', $data['topic']);
        $this->db->bind(':comment', $data['comment']);
        $this->db->bind(':rating', $data['rating']);
        $this->db->bind(':date', $data['date']);

        //        Execute
        if ($this->db->execute()) {

            return true;
        } else {
            return false;
        }
    }
    public function add_contact($data)
    {
        $this->db->query('INSERT INTO contact_us (name, email, phone_number, message) VALUES (:name, :email, :phone_number, :message)');

        //        Bind values
        $this->db->bind(':name', $data['name']);
        $this->db->bind(':email', $data['email']);
        $this->db->bind(':phone_number', $data['phone_number']);
        $this->db->bind(':message', $data['message']);


        //        Execute
        if ($this->db->execute()) {

            return true;
        } else {
            return false;
        }
    }
    public function add_website_data($data)
    {
        $this->db->query('INSERT INTO website (color, font, email, phone,facebook,twitter,instagram,linkedin) VALUES (:color, :font, :email, :phone, :facebook,:twitter,:instagram,:linkedin)');

        //        Bind values
        $this->db->bind(':color', $data['color']);
        $this->db->bind(':font', $data['font']);
        $this->db->bind(':email', $data['email']);
        $this->db->bind(':phone', $data['phone']);
        $this->db->bind(':facebook', $data['facebook']);
        $this->db->bind(':twitter', $data['twitter']);
        $this->db->bind(':instagram', $data['instagram']);
        $this->db->bind(':linkedin', $data['linkedin']);


        //        Execute
        if ($this->db->execute()) {

            return true;
        } else {
            return false;
        }
    }

    public function setUserRole($data)
    {
        $this->db->query('INSERT INTO user_role (user_id, role_id) VALUES (:user_id, :role_id)');

        //        Bind values
        $this->db->bind(':user_id', $data['user_id']);
        $this->db->bind(':role_id', $data['role_id']);

        //        Execute
        if ($this->db->execute()) {
            return true;
        } else {
            return false;
        }
    }

    //    backend login
    public function login($email, $pass)
    {
        $user= $this->fetchLoggedData($email);
        if(password_verify ( $pass , $user->password )){
            return $user;
        }
        // $this->db->query('SELECT * FROM user WHERE email = :email AND password= :password');
        // $this->db->bind(':email', $email);
        // $hashedPass = md5($pass);
        // $this->db->bind(':password', $hashedPass);
        // $this->db->execute();
        // $count = $this->db->rowCount();
        // if ($count > 0) {
        //     return $this->db->single();
        // } else {
        //     return false;
        // }
    }
    public function fetchLoggedData($email)
    {

        $this->db->query('SELECT * FROM user WHERE email = :email ');
        $this->db->bind(':email', $email);

        $this->db->execute();
        $count = $this->db->rowCount();
        if ($count > 0) {
            return $this->db->single();
        } else {
            return false;
        }
    }
    public function verify($email, $token)
    {
        $changeToken = 0;
        $this->db->query('UPDATE user SET token=' . $changeToken . ' WHERE email=:email AND token=:token');
        $this->db->bind(':email', $email);
        $this->db->bind(':token', $token);



        if ($this->db->execute()) {
            return true;
        } else {
            return false;
        }
    }
    public function total_users()
    {
        $this->db->query('SELECT * FROM user');
        $this->db->execute();
        $total_row = $this->db->rowCount();
        return $total_row;
    }
    public function total_order()
    {
        $this->db->query('SELECT * FROM order_request');
        $this->db->execute();
        $total_row = $this->db->rowCount();
        return $total_row;
    }
    public function total_visitor()
    {
        $this->db->query('SELECT * FROM visit');
        $this->db->execute();
        $total_row = $this->db->rowCount();
        return $total_row;
    }
    public function total_transaction()
    {
        $this->db->query('SELECT * FROM payment');
        $this->db->execute();
        $total_row = $this->db->rowCount();
        return $total_row;
    }
    public function transaction()
    {

        $stmt = $this->db->dbConnection->prepare("SELECT * FROM payment");
        $stmt->execute();
        return  $stmt->fetchAll();

    }
    public function update_writer_info($id, $data)
    {
        $changeToken = 0;
        $this->db->query('UPDATE user SET f_name=:f_name,l_name=:l_name,email=:email,address=:address,phone_number=:phone_number,title=:title  WHERE id='.$id.'.');
        $this->db->bind(':f_name', $data['f_name']);
        $this->db->bind(':l_name', $data['l_name']);
        $this->db->bind(':email', $data['email']);
        $this->db->bind(':address', $data['address']);
        $this->db->bind(':phone_number', $data['phone_number']);
        $this->db->bind(':title', $data['title']);



        if( $this->db->execute())
        {
            return true;
        }

        else {
            return false;
        }
    }
    public function update_transaction_info($id, $data)
    {
        $changeToken = 0;
        $this->db->query('UPDATE payment SET payment_type=:payment_type,currency=:currency,ammount=:ammount,transaction_id=:transaction_id,medium=:medium,order_id=:order_id,created_at=:created_at  WHERE id='.$id.'.');
        $this->db->bind(':payment_type', $data['payment_type']);
        $this->db->bind(':currency', $data['currency']);
        $this->db->bind(':ammount', $data['ammount']);
        $this->db->bind(':transaction_id', $data['transaction_id']);
        $this->db->bind(':medium', $data['medium']);
        $this->db->bind(':order_id', $data['order_id']);
        $this->db->bind(':created_at', date("Y-m-d H:i:s"));



        if( $this->db->execute())
        {
            return true;
        }

        else {
            return false;
        }
    }
    public function edit_review($id, $data)
    {
        $changeToken = 0;
        $this->db->query('UPDATE review SET customer_name=:customer_name,writer_name=:writer_name,topic=:topic,comment=:comment,rating=:rating,date=:date  WHERE id='.$id.'.');
        $this->db->bind(':customer_name', $data['customer_name']);
        $this->db->bind(':writer_name', $data['writer_name']);
        $this->db->bind(':topic', $data['topic']);
        $this->db->bind(':comment', $data['comment']);
        $this->db->bind(':rating', $data['rating']);
        $this->db->bind(':date', $data['date']);



        if( $this->db->execute())
        {
            return true;
        }

        else {
            return false;
        }
    }
    public function edit_website($id, $data)
    {
        $changeToken = 0;
        $this->db->query('UPDATE website SET color=:color,font=:font,email=:email,phone=:phone,facebook=:facebook,twitter=:twitter,instagram=:instagram,linkedin=:linkedin  WHERE id='.$id.'.');

        $this->db->bind(':color', $data['color']);
        $this->db->bind(':font', $data['font']);
        $this->db->bind(':email', $data['email']);
        $this->db->bind(':phone', $data['phone']);
        $this->db->bind(':facebook', $data['facebook']);
        $this->db->bind(':twitter', $data['twitter']);
        $this->db->bind(':instagram', $data['instagram']);
        $this->db->bind(':linkedin', $data['linkedin']);



        if( $this->db->execute())
        {
            return true;
        }

        else {
            return false;
        }
    }
    public function edit_submission_info_by_id($id, $data)
    {
        $changeToken = 0;
        $this->db->query('UPDATE submission SET stubmissionTime=:stubmissionTime,note=:note,status=:status,order_id=:order_id,created_at=:created_at  WHERE id='.$id.'.');

        $this->db->bind(':stubmissionTime', $data['stubmissionTime']);
        $this->db->bind(':note', $data['note']);
        $this->db->bind(':status', $data['status']);
        $this->db->bind(':order_id', $data['order_id']);
        $this->db->bind(':created_at', date("Y-m-d H:i:s"));




        if( $this->db->execute())
        {
            return true;
        }

        else {
            return false;
        }
    }
    public function update_active_status($id)
    {

        $this->db->query('UPDATE user SET status=0  WHERE id='.$id.'.');

        if( $this->db->execute())
        {
            return true;
        }

        else {
            return false;
        }
    }
    public function update_deactive_status($id)
    {

        $this->db->query('UPDATE user SET status=1  WHERE id='.$id.'.');

        if( $this->db->execute())
        {
            return true;
        }

        else {
            return false;
        }
    }

    //    Check if email already exists
    public function checkEmail($email)
    {
        $this->db->query('SELECT * FROM user WHERE email = :email');
        $this->db->bind(':email', $email);
        $row = $this->db->single();

        if ($this->db->rowCount() > 0) {
            return true;
        } else {
            return false;
        }
    }


    public function findUserById($userId)
    {
        $stmt = $this->db->dbConnection->prepare("SELECT * FROM user WHERE `id` = ?");
        $stmt->execute([$userId]);
        return $stmt->fetch(\PDO::FETCH_ASSOC);
    }
    public function findRoleById($userId)
    {
        $stmt = $this->db->dbConnection->prepare("SELECT * FROM user_role WHERE `user_id` = ?");
        $stmt->execute([$userId]);
        return $stmt->fetch(\PDO::FETCH_ASSOC);
    }
    public function get_writer_list($userId)
    {
        $stmt = $this->db->dbConnection->prepare("SELECT * FROM user  WHERE `id` = ? ");
        $stmt->execute([$userId]);
        return $stmt->fetchAll();
    }
    public function get_student_list($userId)
    {
        $stmt = $this->db->dbConnection->prepare("SELECT * FROM user WHERE `id` = ?");
        $stmt->execute([$userId]);
        return $stmt->fetchAll();
    }
    public function review_info_list_id($userId)
    {
        $stmt = $this->db->dbConnection->prepare("SELECT * FROM review WHERE `id` = ?");
        $stmt->execute([$userId]);
        return $stmt->fetchAll();
    }
    public function get_website_data($userId)
    {
        $stmt = $this->db->dbConnection->prepare("SELECT * FROM website WHERE `id` = ?");
        $stmt->execute([$userId]);
        return $stmt->fetchAll();
    }
    public function get_submission_info($userId)
    {
        $stmt = $this->db->dbConnection->prepare("SELECT * FROM submission WHERE `id` = ?");
        $stmt->execute([$userId]);
        return $stmt->fetchAll();
    }


    //get total value for charts
    public function get_total_student()
    {
        $this->db->query('SELECT * FROM user_role WHERE `role_id`=4');
        $this->db->execute();
        $total_row = $this->db->rowCount();
        return $total_row;
    }
    public function get_total_writer()
    {
        $this->db->query('SELECT * FROM user_role WHERE `role_id`=3');
        $this->db->execute();
        $total_row = $this->db->rowCount();
        return $total_row;
    }
    public function get_total_draft()
    {
        $this->db->query('SELECT * FROM order_request WHERE `status`=:draft');
        $this->db->bind(':draft', 'draft');
        $this->db->execute();
        $total_row = $this->db->rowCount();
        return $total_row;
    }
    public function get_total_completed()
    {
        $this->db->query('SELECT * FROM order_request WHERE `status`=:completed');
        $this->db->bind(':completed', 'completed');
        $this->db->execute();
        $total_row = $this->db->rowCount();
        return $total_row;
    }
    public function get_total_progress()
    {
        $this->db->query('SELECT * FROM order_request WHERE `status`=:progress');
        $this->db->bind(':progress', 'on-going');
        $this->db->execute();
        $total_row = $this->db->rowCount();
        return $total_row;
    }
    public function get_total_canceled()
    {
        $this->db->query('SELECT * FROM order_request WHERE `status`=:canceled');
        $this->db->bind(':canceled', 'canceled');
        $this->db->execute();
        $total_row = $this->db->rowCount();
        return $total_row;
    }
    public function get_total_deactivated()
    {
        $this->db->query('SELECT * FROM order_request WHERE `status`=:deactivated');
        $this->db->bind(':deactivated', 'denied');
        $this->db->execute();
        $total_row = $this->db->rowCount();
        return $total_row;
    }
    //end of total data



    public function get_writer_list_id()
    {
        $stmt = $this->db->dbConnection->prepare("SELECT * FROM user_role WHERE `role_id` = 3");
        $stmt->execute();
        $result =  $stmt->fetchAll();
        $get = [];
        foreach( $result as $row ) {

            array_push($get,$row['user_id']);
        }
        return $get;
    }
    public function get_student_list_id()
    {
        $stmt = $this->db->dbConnection->prepare("SELECT * FROM user_role WHERE `role_id` = 4");
        $stmt->execute();
        $result =  $stmt->fetchAll();
        $get = [];
        foreach( $result as $row ) {

            array_push($get,$row['user_id']);
        }
        return $get;
    }
    public function get_message_list()
    {
        $stmt = $this->db->dbConnection->prepare("SELECT * FROM message");
        $stmt->execute();
        return  $stmt->fetchAll();

    }
    public function see_reviews()
    {
        $stmt = $this->db->dbConnection->prepare("SELECT * FROM review");
        $stmt->execute();
        return  $stmt->fetchAll();

    }
    public function get_website()
    {
        $stmt = $this->db->dbConnection->prepare("SELECT * FROM website");
        $stmt->execute();
        return  $stmt->fetchAll();

    }
    public function get_submission_list()
    {
        $stmt = $this->db->dbConnection->prepare("SELECT * FROM submission");
        $stmt->execute();
        return  $stmt->fetchAll();

    }
    public function get_contact_us()
    {
        $stmt = $this->db->dbConnection->prepare("SELECT * FROM contact_us");
        $stmt->execute();
        return  $stmt->fetchAll();

    }
    public function get_writer_type_data()
    {
        $stmt = $this->db->dbConnection->prepare("SELECT * FROM writer_type ORDER BY priority DESC");
        $stmt->execute();
        return  $stmt->fetchAll();

    }
    public function get_type_data($id)
    {
        $stmt = $this->db->dbConnection->prepare("SELECT * FROM type WHERE `id` = ?");
        $stmt->execute([$id]);
        return $stmt->fetch();

    }
    public function get_writer_name_by_id($id)
    {
        $stmt = $this->db->dbConnection->prepare("SELECT * FROM user WHERE `id` = ?");
        $stmt->execute([$id]);
        return $stmt->fetch();

    }
    public function get_transaction_list()
    {
        $stmt = $this->db->dbConnection->prepare("SELECT * FROM payment");
        $stmt->execute();
        return  $stmt->fetchAll();

    }
    public function get_order_list_id()
    {
        $stmt = $this->db->dbConnection->prepare("SELECT * FROM order_request");
        $stmt->execute();
        return  $stmt->fetchAll();

    }

    public function getTotalOrderByUserId($userId)
    {
        $stmt = $this->db->dbConnection->prepare("SELECT * FROM orders WHERE `student_id` = ?");
        $stmt->execute([$userId]);
        return $stmt->rowCount();
    }
    public function edit_writer_list_id($userId)
    {
        $stmt = $this->db->dbConnection->prepare("SELECT * FROM user WHERE `id` = ?");
        $stmt->execute([$userId]);
        return $stmt->fetchAll();
    }
    public function get_transaction_list_by_id($id)
    {
        $stmt = $this->db->dbConnection->prepare("SELECT * FROM payment WHERE `id` = ?");
        $stmt->execute([$id]);
        return $stmt->fetchAll();
    }

    public function getTotalCompletedOrderByUserId($userId)
    {
        $stmt = $this->db->dbConnection->prepare("SELECT * FROM orders
         WHERE `student_id` = ? AND `status` = ?");
        $stmt->execute([$userId, 'completed']);
        return $stmt->rowCount();
    }

    public function getTotalCanceledOrderByUserId($userId)
    {
        $stmt = $this->db->dbConnection->prepare("SELECT * FROM orders
        WHERE `student_id` = ? AND `status` = ?");
        $stmt->execute([$userId, 'canceled']);
        return $stmt->rowCount();
    }

    public function saveImage($userId, $fileName)
    {
        $stmt = $this->db->dbConnection->prepare("UPDATE `user` SET `profile_image` = ? WHERE `id` = ?");
        $stmt->execute([$fileName, $userId]);
        if ($stmt->rowCount() > 0) {
            return true;
        }
        return false;
    }

    public function editUser(
        $id,
        $f_name = "",
        $l_name = "",
        $email = "",
        $phone = "",
        $title = "",
        $description = ""
    ) {
        $stmt = $this->db->dbConnection->prepare("UPDATE `user` SET `f_name` = ? , 
        `l_name` =? , `email`= ?, `phone_number`=? , `title`=?, `description` =? WHERE `id` = ?");
        $stmt->execute([$f_name, $l_name, $email, $phone, $title, $description, $id]);
        if ($stmt->rowCount() > 0) {
            return true;
        }
        return false;
    }


    //all delete operation
    public function deleteWriter($userId)
    {
        $stmt = $this->db->dbConnection->prepare("DELETE FROM user WHERE id=?");
       $stmt->execute([$userId]);
       return true;
    }
    public function delete_order($userId)
    {
        $stmt = $this->db->dbConnection->prepare("DELETE FROM order_request WHERE id=?");
       $stmt->execute([$userId]);
       return true;
    }
    public function deleteStudent($userId)
    {
        $stmt = $this->db->dbConnection->prepare("DELETE FROM user WHERE id=?");
       $stmt->execute([$userId]);
       return true;
    }
    public function deleteMessages($userId)
    {
        $stmt = $this->db->dbConnection->prepare("DELETE FROM message WHERE id=?");
       $stmt->execute([$userId]);
       return true;
    }
    public function delete_contact($userId)
    {
        $stmt = $this->db->dbConnection->prepare("DELETE FROM contact_us WHERE id=?");
       $stmt->execute([$userId]);
       return true;
    }
    public function delete_review($userId)
    {
        $stmt = $this->db->dbConnection->prepare("DELETE FROM review WHERE id=?");
       $stmt->execute([$userId]);
       return true;
    }
    public function delete_website($userId)
    {
        $stmt = $this->db->dbConnection->prepare("DELETE FROM website WHERE id=?");
       $stmt->execute([$userId]);
       return true;
    }
    public function deleteWriterType($userId)
    {
        $stmt = $this->db->dbConnection->prepare("DELETE FROM writer_type WHERE id=?");
       $stmt->execute([$userId]);
       return true;
    }
    public function deleteTransactionById($id)
    {
        $stmt = $this->db->dbConnection->prepare("DELETE FROM payment WHERE id=?");
       $stmt->execute([$id]);
       return true;
    }
    public function deleteSubmission($id)
    {
        $stmt = $this->db->dbConnection->prepare("DELETE FROM submission WHERE id=?");
       $stmt->execute([$id]);
       return true;
    }
    //end
}
