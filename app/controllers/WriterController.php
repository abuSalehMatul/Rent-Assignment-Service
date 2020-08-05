<?php


class WriterController extends Controller
{
    public function __construct()
    {
        $this->userModel = $this->model('User');
        $this->websiteModel = $this->model('Website');
        $this->orderRequestModel = $this->model('OrderRequest');
        $this->chatRequestModel = $this->model('Chat');
    }

    public function __call($method, $arguments = [])
    {
        if (method_exists($this, $method)) {
            if (
                isset($_SESSION['id']) && $_SESSION['id'] != null &&
                isset($_SESSION['role']) && $_SESSION['role'] == 3
            ) {
                return call_user_func_array(array($this, $method), $arguments);
            } else {
                header("Location: " . URLROOT . "/" . $_SESSION['lang'] . "/auth/login");
            }
        }
    }

    private function saveSubject()
    {
        if (!empty($_POST['token'])) {
            if (!hash_equals($_SESSION['token'], $_POST['token'])) {
                echo "un-authentic access.. ";
                die();
            }
        }
        $subjects = $this->websiteModel->saveSubject($_SESSION['id'], $_POST['subject']);
        print_r($subjects);
    }

    private function saveService()
    {
        if (!empty($_POST['token'])) {
            if (!hash_equals($_SESSION['token'], $_POST['token'])) {
                echo "un-authentic access.. ";
                die();
            }
        }
        $subjects = $this->websiteModel->saveService($_SESSION['id'], $_POST['subject']);
        print_r($subjects);
    }

    private function saveType()
    {
        if (!empty($_POST['token'])) {
            if (!hash_equals($_SESSION['token'], $_POST['token'])) {
                echo "un-authentic access.. ";
                die();
            }
        }
        $subjects = $this->websiteModel->saveType($_SESSION['id'], $_POST['subject']);
        print_r($subjects);
    }

    private function deletePreference()
    {
        if (!empty($_POST['token'])) {
            if (!hash_equals($_SESSION['token'], $_POST['token'])) {
                echo "un-authentic access.. ";
                die();
            }
        }
        print_r($this->websiteModel->deletePreference($_SESSION['id'], $_POST['table'], $_POST['name']));
    }

    private function dashboard()
    {
        $this->data['total_order'] = $this->userModel->getTotalOrderByUserId($_SESSION['id']);
        $this->data['canceled_order'] = $this->userModel->getTotalCanceledOrderByUserId($_SESSION['id']);
        $this->data['completed_order'] = $this->userModel->getTotalCompletedOrderByUserId($_SESSION['id']);
        $this->data['subjects'] = $this->websiteModel->getSubjects();
        $this->data['services'] = $this->websiteModel->getServices();
        $this->data['type'] = $this->websiteModel->getType();
        $this->data['writer_subject'] = $this->websiteModel->getWriterSubject($_SESSION['id']);
        $this->data['writer_type'] = $this->websiteModel->getWriterType($_SESSION['id']);
        $this->data['writer_service'] = $this->websiteModel->getWriterService($_SESSION['id']);

        $this->view('writer/dashboard', $this->data, 'data');
    }

    private function gotoChat($root, $url, $receiver_id,$order_id)
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
    private function adminChat($root, $url, $id)
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
    private function allChat()
    {
        $id = $_SESSION['id'];
        $data= [];
        $get =
            $this->chatRequestModel->getChatUserId($id);
//       echo '<pre>';
       foreach ($get as $key=>$val){
           $info = $this->chatRequestModel->user_by_id($val['big_id_participent']);
           array_push($data,$info);
       }

//print_r($data);
//       echo '</pre>';
//       exit();
        $this->view('writer/all_chat', $data);
    }
    private function get_user_name_by_id($root, $url, $id)
    {
//        $id = $_SESSION['id'];
        $data =
            $this->chatRequestModel->user_by_id($id);
       echo json_encode($data);
    }

    private function insert_chat()
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

    private function fetch_user_chat_history()
    {

        $sender_id = $_SESSION['id'];
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
//    private function fetch_user_name()
//    {
//
//
//        $id = $_POST['id'];
//
//
//        $result = $this->chatRequestModel->user_by_id($id);
//        echo $result;
//
//
//    }
    private function offerRequest()
    {
        $this->data['offer_request'] =
            $this->orderRequestModel->getOrderRequestBySuggesstionByUserId($_SESSION['id']);
        $this->view('writer/offerRequest', $this->data, 'data');
    }

    private function denyRequest()
    {
        if (!empty($_POST['token'])) {
            if (!hash_equals($_SESSION['token'], $_POST['token'])) {
                echo "un-authentic access.. ";
                die();
            }
        }
        $authority = $this->orderRequestModel->checkWriterAuthorityToPerformOrder($_POST['requestId'], $_SESSION['id']);
        if ($authority == "success") {
            return $this->orderRequestModel->denyRequest($_POST['requestId'], $_SESSION['id']);
        } else {
            return 'un-authentic access..';
        }
    }

    private function acceptRequest()
    {
        if (!empty($_POST['token'])) {
            if (!hash_equals($_SESSION['token'], $_POST['token'])) {
                echo "un-authentic access.. ";
                die();
            }
        }
        $authority = $this->orderRequestModel->checkWriterAuthorityToPerformOrder($_POST['requestId'], $_SESSION['id']);
        if ($authority == "success") {
            return $this->orderRequestModel->acceptRequest($_POST['requestId'], $_SESSION['id']);
        } else {
            return 'un-authentic access..';
        }
    }
}
