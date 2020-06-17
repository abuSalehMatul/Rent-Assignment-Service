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
        $this->db->query('SELECT * FROM user WHERE email = :email AND password= :password');
        $this->db->bind(':email', $email);
        $hashedPass = md5($pass);
        $this->db->bind(':password', $hashedPass);
        $this->db->execute();
        $count = $this->db->rowCount();
        if ($count > 0) {
            return $this->db->single();
        } else {
            return false;
        }
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

    public function getTotalOrderByUserId($userId)
    {
        $stmt = $this->db->dbConnection->prepare("SELECT * FROM orders WHERE `student_id` = ?");
        $stmt->execute([$userId]);
        return $stmt->rowCount();
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
}
