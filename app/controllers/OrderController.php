<?php

class OrderController extends Controller {
    public function __construct(){
        $this->userModel = $this->model('User');
        $this->orderModel = $this->model('Order');
    }

    public function myOrder()
    {
        $this->data['orders'] = $this->orderModel->getByUserIdAndStatus($_SESSION['id'], "progress");
        return $this->view('order/myProgressOrder', $this->data, 'data');
    }

//    backend logout
    // public function myOrderRequest(){
    //    return $this->orderRequestModel->getByUserId($_SESSION['id']);
    // }

    
}