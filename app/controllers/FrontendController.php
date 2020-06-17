<?php


class FrontendController extends Controller
{
    function __construct(){

    }

    public function index(){


            //session is set
            $this->view('pages/index');


    }
    public function dashboard(){
        $this->view('backend/dashboard');

    }
    public function services(){
        $this->view('pages/services');

    }
    public function reviews(){
        $this->view('pages/reviews');

    }
    public function aboutUs(){
        $this->view('pages/aboutUs');

    }
    public function logout()
    {
        if (!empty($_POST['token'])) {
            if (!hash_equals($_SESSION['token'], $_POST['token'])) {
                echo "un-authentic access.. ";
                die();
            }
        }
        session_destroy();
        header("Location: ".URLROOT."/".$_SESSION['lang']. "/");
    }

}