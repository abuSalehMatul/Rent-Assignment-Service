<?php


class WriterController extends Controller
{
    public function __construct()
    {
        $this->userModel = $this->model('User');
        $this->websiteModel = $this->model('Website');
        $this->orderRequestModel = $this->model('OrderRequest');
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
