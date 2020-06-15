<?php


class StudentController extends Controller
{


    public function __construct()
    {
        $this->userModel = $this->model('User');
    }

    public function dashboard()
    {  
        if (isset($_SESSION['id']) && $_SESSION['id'] != null && isset($_SESSION['role']) && $_SESSION['role'] == 4) {
            $this->data['total_order'] = $this->userModel->getTotalOrderByUserId($_SESSION['id']);
            $this->data['canceled_order'] = $this->userModel->getTotalCanceledOrderByUserId($_SESSION['id']);
            $this->data['completed_order'] = $this->userModel->getTotalCompletedOrderByUserId($_SESSION['id']);
            $this->view('student/dashboard', $this->data, 'data');
        }
    }
}
