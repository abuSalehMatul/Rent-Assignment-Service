<?php


class UserController extends Controller
{
   
    protected $userModel;
    protected $mediaModel;

    public function __construct()
    {
        $this->userModel = $this->model('User');
        $this->mediaModel = $this->model('Media');
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

}