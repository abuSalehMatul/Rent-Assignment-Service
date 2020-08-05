<?php


class DemoTestController extends Controller
{
    public function __construct()
    {
        $this->userModel = $this->model('User');
        $this->appointments = $this->model('Appointment');
        $this->chatRequestModel = $this->model('Chat');
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
        $data['transaction'] = $this->userModel->transaction();
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

    //test
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

    //end


    public function voiceChat()
    {



        $this->view('/chat/chat');
    }
    public function save_voice()
    {

        $input = $_FILES['audio_data']['tmp_name']; //get the temporary name that PHP gave to the uploaded file
        $output = $_FILES['audio_data']['name'].".wav"; //letting the client control the filename is a rather bad idea
//move the file from temp name to local folder using $output name
        move_uploaded_file($input, $output);
    }


    //order
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

    //end


    //chat message
    public function messages()
    {


        $data['get_message_list'] = $this->userModel->get_message_list();
        $this->view('/backend/messages',$data);

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


    public function gotoChat($root, $url, $receiver_id,$order_id)
    {



        $check_chatroom =
        $data['check_room_data'] =$this->chatRequestModel->check_exist_chatroom($_SESSION['id'],$receiver_id);
        if($data['check_room_data']){


            $datas['user_id'] = $_SESSION['id'];
            $datas['big_id_participent'] = $receiver_id;
            $datas['offer_id'] = $order_id;

            $update= $this->chatRequestModel->update_chatroom($datas);
        }
        else{
            $info['user_id'] = $_SESSION['id'];
            $info['big_id_participent'] = $receiver_id;
            $info['offer_id'] = $order_id;
            $insert= $this->chatRequestModel->insert_chatroom($info);
        }
        $data['receiver_id'] = $receiver_id;
        $data['user_id'] = $_SESSION['id'];
//       $datas['insert_room_data'] =  $this->chatRequestModel->getChatUserId($_SESSION['id']);
        $this->view('writer/chat', $data['receiver_id']);
    }
    public function adminChat($root, $url, $id)
    {

        $data['get_admin'] =$this->chatRequestModel->get_admin_id();

        $admin_id['data'] = [];
        foreach ($data['get_admin'] as $admins){
            $admin = $this->chatRequestModel->get_admin_details_by_id($admins['user_id']);
            array_push($admin_id,$admin);
        }
//print_r($admin_id);
//        exit();

        $this->view('system_chat/admin_chat', $admin_id);
    }
    public function system_chat()
    {
        $id = $_SESSION['id'];
        $data= [];
        $get =
            $this->chatRequestModel->getChatReceiverUserId($id);

        foreach ($get as $key=>$val){
//            $info = $this->chatRequestModel->user_by_id($val['big_id_participent']);
            array_push($data,$val[0]);
        }
//        echo '<pre>';
//        print_r();
//        echo '</pre>';
//        exit();
        $datas = array_unique($data);
//        echo '<pre>';
//        print_r($data);
//        echo '</pre>';
//        exit();
        $this->view('backend/system_message', $datas);
    }
    public function get_user_name_by_id($root, $url, $id)
    {
//        $id = $_SESSION['id'];
        $data =
            $this->chatRequestModel->user_by_id($id);
        echo json_encode($data);
    }

    public function insert_chat()
    {
        $data = array(
            'sender_id' => $_SESSION['id'],
            'message' => $_POST['message'],
            'receiver_id' => $_POST['receiver_id'],

        );
//        $sender_id = $_SESSION['id'];
//        $message = $this->input->post('message');
//        $receiver_id = $this->input->post('receiver_id');
        $this->chatRequestModel->saverecords($data);
        echo json_encode(array(
            "statusCode" => 200
        ));

    }

    public function fetch_user_chat_history()
    {

        $sender_id = 1;
        $receiver_id = $_POST['receiver_id'];


        $result = $this->chatRequestModel->all_records($sender_id, $receiver_id);


        if($result){
            $output = '<li class="sent">';
            foreach ($result as $row) {
                $user_name = '';
                $chat_message = '';
                $login = strtotime($row['created_at']);
                $date = date('Y-m-d H:i:s');
                $data = strtotime($date);


                $diff = $data - $login;

                if ($diff > 86400) {
                    $time = round($diff / 86400) . " days ago";
                } elseif ($diff > 3600) {
                    $time = round($diff / 3600) . " hours ago";
                } else {
                    $time = round($diff / 60) . " minutes ago";
                }
                if ($row["sender_id"] == $sender_id) {

                    $chat_message = $row['message'];
                    if (strpos($chat_message, '.wav') !== false) {
                        $user_name = '<b class="text-success">You</b>';
                        $output .= '
	
			<audio controls preload="none">' . $user_name . ' - 
				<source src="' . URLROOT . '/uploads/' . $chat_message . '" type="audio/ogg">
					- <small><em>' . $time . '</em></small>
				</audio><br>
		
	
		';

                    }
                    else{
                        $user_name = '<b class="text-success">You</b>';
                        $output .= '
	
			<p>' . $user_name . ' - ' . $chat_message . '
				<br>
					- <small><em>' . $time . '</em></small>
				</br></p><br>
		
	
		';}

                } else {

                    $chat_message = $row["message"];

                    $user_name = $row["sender_id"];
                    $output .= '
	
			<p  style="margin-left: 400px">' . $this->get_user_name($user_name) . ' - ' . $chat_message . '
				<br>
					- <small><em>' . $time . '</em></small>
				</br></p><br>
		
	
		';

                }

            }
            $output .= '</li>';
            echo $output;
        }
        else{
            $output = '';
            echo $output;
        }

//        echo json_encode(array(
//            "statusCode" => 200
//        ));

    }

    function get_user_name($user_id)
    {

        $result = $this->chatRequestModel->get_user_name($user_id);

        return $result['f_name'].' '.$result['l_name'];

    }

    //end



    //submission list
    public function submission()
    {


        $data['get_submission_list'] = $this->userModel->get_submission_list();
        $this->view('/backend/submission',$data);

    }
    public function edit_submission($root, $opt, $id)
    {


        $data['get_submission_list'] = $this->userModel->get_submission_info($id);
        $this->view('/backend/submission_edit',$data);

    }
    public function edit_submission_info($root, $opt, $id)
    {

        if ($_SERVER['REQUEST_METHOD'] == 'POST') {


            $_POST = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);
            extract($_POST);
            $datas = [
                'stubmissionTime' => $stubmissionTime,
                'note' => $note,
                'status' => $status,
                'order_id' => $order_id,

            ];
        }


        $update = $this->userModel->edit_submission_info_by_id($id, $datas);
        if ($update == true) {
            $this->submission();
        } else {
            echo 'error';
        }



    }
    public function delete_submission($root, $opt, $id)
    {
        $delete = $this->userModel->deleteSubmission($id);

        if ($delete == true) {
            $this->transaction();
        } else {
            echo 'error';
        }
    }

    //end


    //contact us info
    public function contact()
    {

        if ($_SERVER['REQUEST_METHOD'] == 'POST') {


            $_POST = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);
            extract($_POST);
            $data = [
                'name' => $name,
                'email' => $email,
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
    public function contact_us()
    {


        $data['contact_us'] = $this->userModel->get_contact_us();
        $this->view('/backend/contact_us',$data);

    }

    //end


    public function transaction()
    {


        $data['get_transaction_list'] = $this->userModel->get_transaction_list();
        $this->view('/backend/transaction',$data);

    }
    public function edit_transaction($root, $opt, $id)
    {

        $data = $this->userModel->get_transaction_list_by_id($id);


        $this->view('/backend/transaction_page_edit', $data);
    }
    public function edit_transaction_info($root, $opt, $id)
    {

        if ($_SERVER['REQUEST_METHOD'] == 'POST') {


            $_POST = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);
            extract($_POST);
            $datas = [
                'payment_type' => $payment_type,
                'currency' => $currency,
                'ammount' => $ammount,
                'transaction_id' => $transaction_id,
                'order_id' => $order_id,
                'medium' => $medium,

            ];
        }

//        echo '<pre>';
//
//        print_r($data);
//        exit();
//        echo '</pre>';

//
        $update = $this->userModel->update_transaction_info($id, $datas);
        if ($update == true) {
            $this->transaction();
        } else {
            echo 'error';
        }
//
//
//        $this->view('/backend/writer_page_edit',$data);
    }
    public function delete_transaction($root, $opt, $id)
    {
        $delete = $this->userModel->deleteTransactionById($id);

        if ($delete == true) {
            $this->transaction();
        } else {
            echo 'error';
        }
    }


    //charts
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
//end


//see more writer panel
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

// end


//writer


    public function get_type_data($root, $opt, $id)
    {


        $data = $this->userModel->get_type_data($id);

        echo json_encode($data);
    }
    public function get_writer_name_by_id($root, $opt, $id)
    {


        $data = $this->userModel->get_writer_name_by_id($id);

        echo json_encode($data);
    }
    public function writer_type()
    {

        $data['writer_type'] = $this->userModel->get_writer_type_data();

        $this->view('/backend/top_writer/top_writer_type', $data);
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
    public function delete_writer_type($root, $opt, $id)
    {

        $delete = $this->userModel->deleteWriterType($id);

        if ($delete == true) {
            $this->writer_type();
        } else {
            echo 'error';
        }


    }

//end


    //review
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
    public function see_review_info($root, $opt, $id)
    {

        $data = $this->userModel->review_info_list_id($id);


        $this->view('/backend/review_page_edit', $data);
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
    public function delete_review($root, $opt, $id)
    {


        $delete = $this->userModel->delete_review($id);

        if ($delete == true) {
            $this->see_reviews();
        } else {
            echo 'error';
        }


    }
    //end



    //wbsite
    public function website_setting()
    {


        $data['website'] = $this->userModel->get_website();

        $this->view('/backend/website/website', $data);
    }
    public function add_website_setting()
    {
        $this->view('/backend/website/add_website');
    }
    public function insert_website_data()
    {


        if ($_SERVER['REQUEST_METHOD'] == 'POST') {


            $_POST = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);
            extract($_POST);
            $data = [
                'color' => $color,
                'font' => $font,
                'email' => $email,
                'phone' => $phone,
                'facebook' => $facebook,
                'twitter' => $twitter,
                'instagram' => $instagram,
                'linkedin' => $linkedin,
            ];
        }

//        echo '<pre>';
//
//        print_r($data);
//        exit();
//        echo '</pre>';

//
        $update = $this->userModel->add_website_data($data);
        if ($update == true) {
            $this->website_setting();
        } else {
            echo 'error';
        }
    }
    public function get_website_data($root, $opt, $id)
    {


        $data['website'] = $this->userModel->get_website_data($id);

        $this->view('/backend/website/website_page_edit', $data);
    }
    public function update_website_data($root, $opt, $id)
    {


        if ($_SERVER['REQUEST_METHOD'] == 'POST') {


            $_POST = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);
            extract($_POST);
            $data = [
                'color' => $color,
                'font' => $font,
                'email' => $email,
                'phone' => $phone,
                'facebook' => $facebook,
                'twitter' => $twitter,
                'instagram' => $instagram,
                'linkedin' => $linkedin,

            ];
        }

        $update = $this->userModel->edit_website($id,$data);

        if ($update == true) {
            $this->website_setting();
        }

        else {
            $this->get_website_data();
        }
    }
    public function delete_website($root, $opt, $id)
    {


        $delete = $this->userModel->delete_website($id);

        if ($delete == true) {
            $this->website_setting();
        } else {
            echo 'error';
        }


    }
    //end











}