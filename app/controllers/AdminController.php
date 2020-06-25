<?php
require_once '../app/libraries/SuggesstionEngine.php';
class AdminController extends Controller
{
    public function __construct()
    {
        $this->userModel = $this->model('User');
        $this->appointments = $this->model('Appointment');
    }



    //    backend logout
    public function logout()
    {
        session_destroy();
        header('location: /');
    }


    public function test()
    {
        $test  = new SuggesstionEngine();
        $test->run();
    }

    
    public function dashboard()
    {
        $this->view('/backend/dashboard');
    }
}
