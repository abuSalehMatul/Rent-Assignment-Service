<?php


class DemoTestController extends Controller
{
    public function __construct()
    {
        $this->userModel = $this->model('User');
        $this->appointments = $this->model('Appointment');
    }


//    backend logout
    public function logout()
    {
        session_destroy();
        header('location: /');
    }

    public function dashboard()
    {

        $data['get_writer_list_id'] = $this->userModel->get_writer_list_id();
        $data['get_student_list_id'] = $this->userModel->get_student_list_id();
        $data['total_users'] = $this->userModel->total_users();
        $data['total_order'] = $this->userModel->total_order();
        $data['total_visitor'] = $this->userModel->total_visitor();
        $data['total_transaction'] = $this->userModel->total_transaction();
        $data['writer'] = [];
        $data['student'] = [];


        foreach ($data['get_writer_list_id'] as $writers) {
            $data['get_writer_list'] = $this->userModel->get_writer_list($writers);

            array_push($data['writer'], $data['get_writer_list']);
        }

        foreach ($data['get_student_list_id'] as $students) {
            $data['get_student_list'] = $this->userModel->get_student_list($students);

            array_push($data['student'], $data['get_student_list']);
        }

        $this->view('/backend/admin_dashboard', $data);
    }
    public function dash()
    {

        $data['get_writer_list_id'] = $this->userModel->get_writer_list_id();
        $data['get_student_list_id'] = $this->userModel->get_student_list_id();

        $data['get_submission_list'] = $this->userModel->get_submission_list();
        $data['get_transaction_list'] = $this->userModel->get_transaction_list();
        $data['total_users'] = $this->userModel->total_users();
        $data['total_order'] = $this->userModel->total_order();
        $data['total_visitor'] = $this->userModel->total_visitor();
        $data['total_transaction'] = $this->userModel->total_transaction();
        $data['writer'] = [];
        $data['student'] = [];


        foreach ($data['get_writer_list_id'] as $writers) {
            $data['get_writer_list'] = $this->userModel->get_writer_list($writers);

            array_push($data['writer'], $data['get_writer_list']);
        }

        foreach ($data['get_student_list_id'] as $students) {
            $data['get_student_list'] = $this->userModel->get_student_list($students);

            array_push($data['student'], $data['get_student_list']);
        }

        $this->view('/backend/admin_dash',$data);
    }
    public function order()
    {

        $data['order'] = $this->userModel->get_order_list_id();


//        $data['order'] = [];
//
//
//        foreach ($data['order_list'] as $orders) {
//
//            array_push($orders, $data['order']);
//        }

        $this->view('/backend/order_requests', $data);
    }
    public function messages()
    {


        $data['get_message_list'] = $this->userModel->get_message_list();
        $this->view('/backend/messages',$data);

    }
    public function submission()
    {


        $data['get_submission_list'] = $this->userModel->get_submission_list();
        $this->view('/backend/submission',$data);

    }
    public function contact_us()
    {


        $data['contact_us'] = $this->userModel->get_contact_us();
        $this->view('/backend/contact_us',$data);

    }
    public function transaction()
    {


        $data['get_transaction_list'] = $this->userModel->get_transaction_list();
        $this->view('/backend/transaction',$data);

    }
    public function chart()
    {
       $data =array();

        $data['total_writer'] = $this->userModel->get_total_writer();
        $data['total_student'] = $this->userModel->get_total_student();

        echo json_encode($data);

    }
    public function orderChart()
    {
       $data =array();

        $data['draft'] = $this->userModel->get_total_draft();
        $data['completed'] = $this->userModel->get_total_completed();
        $data['progress'] = $this->userModel->get_total_progress();
        $data['canceled'] = $this->userModel->get_total_canceled();
        $data['deactivated'] = $this->userModel->get_total_deactivated();

        echo json_encode($data);

    }

    public function see_more_writer()
    {


        $data['get_writer_list_id'] = $this->userModel->get_writer_list_id();

        $data['writer'] = [];


        foreach ($data['get_writer_list_id'] as $writers) {
            $data['get_writer_list'] = $this->userModel->get_writer_list($writers);

            array_push($data['writer'], $data['get_writer_list']);
        }


//        echo '<pre>';
//
//        print_r($data['writer']);
//        exit();
//        echo '</pre>';
        $this->view('/backend/writer_page', $data);
    }

    public function see_more_student()
    {


        $data['get_student_list_id'] = $this->userModel->get_student_list_id();

        $data['student'] = [];


        foreach ($data['get_student_list_id'] as $students) {
            $data['get_student_list'] = $this->userModel->get_writer_list($students);

            array_push($data['student'], $data['get_student_list']);
        }


//        echo '<pre>';
//
//        print_r($data['writer']);
//        exit();
//        echo '</pre>';
        $this->view('/backend/student_page', $data);
    }
    public function see_reviews()
    {


        $data['review'] = $this->userModel->see_reviews();

        $this->view('/backend/review', $data);
    }
    public function add_review()
    {
        $this->view('/backend/add_review');
    }
    public function insert_review()
    {

        if ($_SERVER['REQUEST_METHOD'] == 'POST') {


            $_POST = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);
            extract($_POST);
            $data = [
                'customer_name' => $customer_name,
                'writer_name' => $writer_name,
                'topic' => $topic,
                'comment' => $comment,
                'rating' => $rating,
                'date' => $date,

            ];
        }

//        echo '<pre>';
//
//        print_r($data);
//        exit();
//        echo '</pre>';

//
        $update = $this->userModel->add_review($data);
        if ($update == true) {
            $this->see_reviews();
        } else {
            echo 'error';
        }
    }
    public function contact()
    {

        if ($_SERVER['REQUEST_METHOD'] == 'POST') {


            $_POST = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);
            extract($_POST);
            $data = [
                'name' => $name,
                'email' => $email,
                'phone_number' => $phone_number,
                'message' => $message,

            ];
        }

//        echo '<pre>';
//
//        print_r($data);
//        exit();
//        echo '</pre>';

//
        $update = $this->userModel->add_contact($data);
        if ($update == true) {
            $this->view('pages/services');
        } else {
            echo 'error';
        }
    }
    public function see_review_info($root, $opt, $id)
    {

        $data = $this->userModel->review_info_list_id($id);


        $this->view('/backend/review_page_edit', $data);
    }


    public function edit_writer($root, $opt, $id)
    {


//        echo '<pre>';
//
//        print_r($id);
//        exit();
//        echo '</pre>';


        $data = $this->userModel->edit_writer_list_id($id);


        $this->view('/backend/writer_page_edit', $data);
    }

    public function update_active_status($root, $opt, $id)
    {

        $data = $this->userModel->update_active_status($id);
        if ($data == true) {
            echo json_encode(array("statusCode" => 200));
        }
        else {
            echo json_encode(array("statusCode"=>201));
        }
//        $this->view('/backend/writer_page_edit',$data);
    }

    public function update_deactive_status($root, $opt, $id)
    {


        $data = $this->userModel->update_deactive_status($id);

        if ($data == true) {
            echo json_encode(array("statusCode" => 200));
        }

    }
    public function edit_review($root, $opt, $id)
    {
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {


            $_POST = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);
            extract($_POST);
            $data = [
                'customer_name' => $customer_name,
                'writer_name' => $writer_name,
                'topic' => $topic,
                'comment' => $comment,
                'rating' => $rating,
                'date' => $date,

            ];
        }

        $update = $this->userModel->edit_review($id,$data);

        if ($update == true) {
           $this->see_reviews();
        }

        else {
            $this->edit_review();
        }

    }

    public function edit_student($root, $opt, $id)
    {


//        echo '<pre>';
//
//        print_r($id);
//        exit();
//        echo '</pre>';


        $data = $this->userModel->edit_writer_list_id($id);


        $this->view('/backend/writer_page_edit', $data);
    }

    public function edit_writer_info($root, $opt, $id)
    {
        $data['get_writer_list_id'] = $this->userModel->get_writer_list_id();

        $data['writer'] = [];


        foreach ($data['get_writer_list_id'] as $writers) {
            $data['get_writer_list'] = $this->userModel->get_writer_list($writers);

            array_push($data['writer'], $data['get_writer_list']);
        }
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {


            $_POST = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);
            extract($_POST);
            $datas = [
                'email' => $email,
                'f_name' => $f_name,
                'l_name' => $l_name,
                'address' => $address,
                'phone_number' => $phone_number,
                'title' => $title,

            ];
        }

//        echo '<pre>';
//
//        print_r($data);
//        exit();
//        echo '</pre>';

//
        $update = $this->userModel->update_writer_info($id, $datas);
        if ($update == true) {
            $this->see_more_writer();
        } else {
            echo 'error';
        }
//
//
//        $this->view('/backend/writer_page_edit',$data);
    }

    public function edit_student_info($root, $opt, $id)
    {

        if ($_SERVER['REQUEST_METHOD'] == 'POST') {


            $_POST = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);
            extract($_POST);
            $datas = [
                'email' => $email,
                'f_name' => $f_name,
                'l_name' => $l_name,
                'address' => $address,
                'phone_number' => $phone_number,
                'title' => $title,

            ];
        }

//        echo '<pre>';
//
//        print_r($data);
//        exit();
//        echo '</pre>';

//
        $update = $this->userModel->update_writer_info($id, $datas);
        if ($update == true) {
            $this->see_more_student();
        } else {
            echo 'error';
        }
//
//
//        $this->view('/backend/writer_page_edit',$data);
    }

    public function delete_writer($root, $opt, $id)
    {


//        echo '<pre>';
//
//        print_r($id);
//        exit();
//        echo '</pre>';


        $delete = $this->userModel->deleteWriter($id);

        if ($delete == true) {
            $this->see_more_writer();
        } else {
            echo 'error';
        }


    }
    public function delete_order($root, $opt, $id)
    {


//        echo '<pre>';
//
//        print_r($id);
//        exit();
//        echo '</pre>';


        $delete = $this->userModel->delete_order($id);

        if ($delete == true) {
            $this->order();
        } else {
            echo 'error';
        }


    }

    public function delete_student($root, $opt, $id)
    {


//        echo '<pre>';
//
//        print_r($id);
//        exit();
//        echo '</pre>';


        $delete = $this->userModel->deleteStudent($id);

        if ($delete == true) {
            $this->see_more_student();
        } else {
            echo 'error';
        }


    }
    public function delete_messages($root, $opt, $id)
    {


//        echo '<pre>';
//
//        print_r($id);
//        exit();
//        echo '</pre>';


        $delete = $this->userModel->deleteMessages($id);

        if ($delete == true) {
            $this->messages();
        } else {
            echo 'error';
        }


    }
    public function delete_review($root, $opt, $id)
    {


        $delete = $this->userModel->delete_review($id);

        if ($delete == true) {
            $this->see_reviews();
        } else {
            echo 'error';
        }


    }
    public function delete_contact($root, $opt, $id)
    {


        $delete = $this->userModel->delete_contact($id);

        if ($delete == true) {
            $this->see_reviews();
        } else {
            echo 'error';
        }


    }
}