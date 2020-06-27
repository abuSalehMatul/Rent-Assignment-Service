<?php


class UserController extends Controller
{
   
    protected $userModel;
    protected $mediaModel;

    public function __construct()
    {
        $this->userModel = $this->model('User');
        $this->mediaModel = $this->model('Media');
        $this->orderRequestModel = $this->model('OrderRequest');
    }

    public function getPrice()
    {
        $price = $this->orderRequestModel->getPrice($_GET['page'], $_GET['service'],$_GET['subject'], $_GET['day'], $_GET['lavel']);
        print_r($price);
    }

    public function findProfile()
    {
        if(isset($_SESSION['id']))
        {
            $this->data['user']= $this->userModel->findUserById($_SESSION['id']);
            $this->data['user_image'] = $this->mediaModel->getMedia('user', $_SESSION['id']);
            return $this->view('user/profile', $this->data, 'data');
        } 
        else{
            $this->Return404Page();
        }
    }

    public function getMyRequest()
    {
        $this->data['order_request'] = $this->orderRequestModel->findById($_GET['myrequest']);
        if($this->data['order_request'] != false){
            return $this->view('user/orderRequest', $this->data, 'data');
        }
        else{
            $this->Return404Page();
        }
    }

}