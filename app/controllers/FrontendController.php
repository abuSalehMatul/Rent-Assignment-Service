<?php


class FrontendController extends Controller
{
    function __construct(){
        $this->userModel = $this->model('User');
    }

    public function index(){

        $data['website'] = $this->userModel->get_website();
            //session is set
            $this->view('pages/index',$data);


    }
    public function dashboard(){
        $this->view('backend/admin_dashboard');

    }
    public function team(){
        $data['website'] = $this->userModel->get_website();
        $this->view('pages/team',$data);

    }
    public function services(){
        $data['website'] = $this->userModel->get_website();
        $this->view('pages/services',$data);

    }
    public function reviews(){
        $data['website'] = $this->userModel->get_website();
        $data['review'] = $this->userModel->see_reviews();
        $this->view('pages/reviews',$data);

    }
    public function aboutUs(){
        $data['website'] = $this->userModel->get_website();
        $this->view('pages/aboutUs',$data);

    }
    public function oauth(){
        $this->view('backend/oauth');

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