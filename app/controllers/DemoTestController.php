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

//    public function dashboard(){
//        guestRedirect();
//        $appointments = $this->appointments->getAll();
//        $this->view('/backend/dashboard', $appointments, 'appointments');
//
//    }
    public function dashboard()
    {

        $data['get_writer_list_id'] = $this->userModel->get_writer_list_id();
        $data['get_student_list_id'] = $this->userModel->get_student_list_id();
        $data['get_message_list'] = $this->userModel->get_message_list();
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

        $this->view('/backend/admin_dashboard', $data);
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
}