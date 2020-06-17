<?php


class WriterController extends Controller
{
    public function __construct(){
        $this->userModel = $this->model('User');
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
                header("Location: ".URLROOT."/".$_SESSION['lang']. "/auth/login");
               
            }
        }
    } 

    private function dashboard()
    {
        $this->data['total_order'] = $this->userModel->getTotalOrderByUserId($_SESSION['id']);
        $this->data['canceled_order'] = $this->userModel->getTotalCanceledOrderByUserId($_SESSION['id']);
        $this->data['completed_order'] = $this->userModel->getTotalCompletedOrderByUserId($_SESSION['id']);
        $this->view('writer/dashboard', $this->data, 'data');
    }
}