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

    private function gotoChat($root, $url, $id)
    {
        $data['receiver_id'] = $id;
//        $data['get_chat'] =
//            $this->chatRequestModel->getChatUserId($_SESSION['id']);
        $this->view('writer/chat', $data['receiver_id']);
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
                $user_name = '<b class="text-success">You</b>';
                $output .= '
	
			<p>' . $user_name . ' - ' . $chat_message . '
				<br>
					- <small><em>' . $time . '</em></small>
				</br></p><br>
		
	
		';

            } else {

                $chat_message = $row["message"];

                $user_name = '<b class="text-danger">anonymous </b>';
                $output .= '
	
			<p id="chat_list" style="margin-left: 400px">' . $user_name . ' - ' . $chat_message . '
				<br>
					- <small><em>' . $time . '</em></small>
				</br></p><br>
		
	
		';

            }

        }
        $output .= '</li>';
        echo $output;
//        echo json_encode(array(
//            "statusCode" => 200
//        ));

    }

    function get_user_name($user_id)
    {

        $result = $this->chatRequestModel->get_user_name($user_id);
        foreach ($result as $row) {
            return $row['f_name'];
        }
    }
    private function fetch_user_name()
    {


        $id = $_POST['id'];


        $result = $this->chatRequestModel->user_name_fetch($id);
        echo $result['f_name'];


    }
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
