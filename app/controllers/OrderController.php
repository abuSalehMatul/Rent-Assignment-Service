<?php

class OrderController extends Controller {
    public function __construct(){
        $this->userModel = $this->model('User');
        $this->orderRequestModel = $this->model('OrderRequest');
    }



//    backend logout
    public function myOrder(){
       $this->data['order_request'] = $this->orderRequestModel->getByUserId($_SESSION['id']);

       $this->view('order/allOrder', $this->data, 'data');
    }
}