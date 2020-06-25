<?php

class OrderController extends Controller {
    public function __construct(){
        $this->userModel = $this->model('User');
        $this->orderRequestModel = $this->model('OrderRequest');
    }



//    backend logout
    // public function myOrderRequest(){
    //    return $this->orderRequestModel->getByUserId($_SESSION['id']);
    // }

    
}