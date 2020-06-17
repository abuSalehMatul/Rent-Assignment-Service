<?php

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

require_once '../vendor/autoload.php';
class AuthController extends Controller
{
    public function __construct()
    {
        $this->userModel = $this->model('User');
    }

    public function faker()
    {
        //        require the model
        require_once '../vendor/autoload.php';
        $faker = Faker\Factory::create();

        echo $faker->name . "\n";
        echo $faker->address . "\n";
    }

    public function register()
    {


        //writerRedirect();
        //        check for post method
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            //            process form data
            // echo "nishan";
            // exit();

            $token = mt_rand(100000, 999999);;
            //            Sanitize post data
            $_POST = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);
            extract($_POST);
            $data = [
                'email' => trim($email),
                'pass' => md5($pass),
                'role' => $role,
                'email_err' => '',
                'pass_err' => '',
                'token' => $token,
            ];

            $mailCheck = $this->userModel->checkEmail($email);
            if ($mailCheck == true) {
                echo 'mail already exists';
            } else {
                $signup = $this->userModel->register($data);
                if ($signup) {

                    $role_data['user_id'] = $signup;
                    $role_data['role_id'] = $data['role'];
                    $setUserRole = $this->userModel->setUserRole($role_data);

                    if ($setUserRole == true) {
                        try {
                            $mail = new PHPMailer();
                            $mail->SMTPOptions = array(
                                'ssl' => array(
                                    'verify_peer' => false,
                                    'verify_peer_name' => false,
                                    'allow_self_signed' => true
                                )
                            );
                            $mail->IsSMTP(); // enable SMTP
                            //                            $mail->SMTPDebug = 1;  // debugging: 1 = errors and messages, 2 = messages only
                            $mail->SMTPAuth = true;

                            $mail->Host = 'smtp.gmail.com';
                            $mail->SMTPAuth = true;
                            $mail->Username = 'dummy@gmail.com';
                            $mail->Password = 'xxxxxxxxxxxxx';
                            $mail->SMTPSecure = 'tls';
                            $mail->Port = 587;
                            $mail->setFrom('dummy@gmail.com');
                            $mail->addAddress($data['email']);


                            $mail->isHTML(true);                                  // Set email format to HTML
                            $mail->Subject = '2 step confirmation';
                            $mail->Body = 'Your verification code is <b>' . $token . '</b>';
                            $mail->send();
                            $this->view('/backend/verification_page');
                        } catch (Exception $e) {
                            echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
                        }
                    }
                }
            }
        } else {
            $this->view('/backend/signup');
        }
    }




    public function login()
    {

        if (isset($_SESSION['id']) && $_SESSION['id'] != null && isset($_SESSION['role']) && $_SESSION['role'] == 1) {
            //session is set
            $_SESSION['user'] = $this->userModel->findUserById($_SESSION['id']);
            $this->view('root/dashboard');
        } else if (isset($_SESSION['id']) && $_SESSION['id'] != null && isset($_SESSION['role']) && $_SESSION['role'] == 2) {
            //session is set
            $_SESSION['user'] = $this->userModel->findUserById($_SESSION['id']);
            $this->view('backend/dashboard');
        } else if (isset($_SESSION['id']) && $_SESSION['id'] != null && isset($_SESSION['role']) && $_SESSION['role'] == 3) {
            //session is set
            $_SESSION['user'] = $this->userModel->findUserById($_SESSION['id']);
            header("Location: " . URLROOT . "/" . $_SESSION['lang'] . "/writer/dashboard");
        } else if (isset($_SESSION['id']) && $_SESSION['id'] != null && isset($_SESSION['role']) && $_SESSION['role'] == 4) {
            //session is set
            $_SESSION['user'] = $this->userModel->findUserById($_SESSION['id']);
            header("Location: " . URLROOT . "/" . $_SESSION['lang'] . "/student/dashboard");
        } else if (!isset($_SESSION['id']) || (isset($_SESSION['id']) && empty($_SESSION['id']))) {
            //session is not set
            writerRedirect();
            if ($_SERVER['REQUEST_METHOD'] == 'POST') {
                //            Sanitize post data
                $_POST = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);
                extract($_POST);
                $data = [
                    'email' => trim($email),
                    'pass' => $pass,
                    'email_err' => '',
                    'pass_err' => '',
                ];


                if (empty($pass)) {
                    $data['pass_err'] = 'Please enter password';
                }

                if ($this->userModel->checkEmail($data['email'])) {

                    if (empty($data['pass_err'])) {
                        $loggedInUser = $this->userModel->login($data['email'], $data['pass']);

                        if ($loggedInUser) {
                            if ($loggedInUser->token != 0) {
                                $this->view('backend/verification_page');
                            } else {
                                $_SESSION['user'] = $this->userModel->findUserById($_SESSION['id']);
                                if ($loggedInUser->role == 2) {

                                    $_SESSION['id'] = $loggedInUser->id;
                                    $_SESSION['role'] = $loggedInUser->role;
                                   

                                    //                        redirect to dashboard
                                    $this->view('backend/dashboard', $_SESSION['id'], $_SESSION['role']);
                                } else if ($loggedInUser->role == 3) {

                                    $_SESSION['id'] = $loggedInUser->id;
                                    $_SESSION['role'] = $loggedInUser->role;

                                    //                        redirect to writer dashboard
                                    header("Location: " . URLROOT . "/" . $_SESSION['lang'] . "/writer/dashboard");
                                     //$this->view('writer/dashboard', $_SESSION['id'],$_SESSION['role']);
                                } else if ($loggedInUser->role == 4) {

                                    $_SESSION['id'] = $loggedInUser->id;
                                    $_SESSION['role'] = $loggedInUser->role;

                                    //                        redirect to student dashboard
                                    header("Location: " . URLROOT . "/" . $_SESSION['lang'] . "/student/dashboard");
                                    // $this->view('student/dashboard', $_SESSION['id'],$_SESSION['role']);
                                } else if ($loggedInUser->role == 1) {

                                    $_SESSION['id'] = $loggedInUser->id;
                                    $_SESSION['role'] = $loggedInUser->role;

                                    //                        redirect to root dashboard
                                    $this->view('root/dashboard', $_SESSION['id'], $_SESSION['role']);
                                } else {
                                    $this->view('backend/login');
                                }
                            }
                        } else {
                            $data['pass_err'] = 'Incorrect Password';
                        }
                    }
                } else {
                    $data['email_err'] = 'This email doesn\'t exist';
                }


                if (empty($data['email_err']) && empty($data['pass_err'])) {
                    die('Success');
                } else {

                    $this->view('/backend/login', $data);
                }
            } else {
                $data = [
                    'email' => '',
                    'email_err' => '',
                    'pass_err' => '',
                ];
                $this->view('/backend/login', $data);
            }
        }
    }

    public function verify()
    {

        writerRedirect();
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            //            Sanitize post data
            $_POST = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);
            extract($_POST);
            $data = [
                'email' => trim($email),
                'token' => $verify_token,
            ];


            $verified_user = $this->userModel->verify($data['email'], $data['token']);

            if ($verified_user) {

                $fetchLoggedData = $this->userModel->fetchLoggedData($data['email']);
                if ($fetchLoggedData->role == 1) {
                    //                  redirect to dashboard

                    $_SESSION['id'] = $fetchLoggedData->id;
                    $_SESSION['role'] = $fetchLoggedData->role;
                    $this->view('root/dashboard', $_SESSION['id'], $_SESSION['role']);
                } else if ($fetchLoggedData->role == 2) {
                    //                  redirect to dashboard

                    $_SESSION['id'] = $fetchLoggedData->id;
                    $_SESSION['role'] = $fetchLoggedData->role;
                    $this->view('backend/dashboard', $_SESSION['id'], $_SESSION['role']);
                } else if ($fetchLoggedData->role == 3) {
                    //                  redirect to dashboard

                    $_SESSION['id'] = $fetchLoggedData->id;
                    $_SESSION['role'] = $fetchLoggedData->role;
                    $this->view('writer/dashboard', $_SESSION['id'], $_SESSION['role']);
                } else if ($fetchLoggedData->role == 4) {
                    //                  redirect to dashboard

                    $_SESSION['id'] = $fetchLoggedData->id;
                    $_SESSION['role'] = $fetchLoggedData->role;
                    $this->view('student/dashboard', $_SESSION['id'], $_SESSION['role']);
                } else {
                    $this->view('backend/verification_page');
                }
            } else {
                $this->view('backend/verification_page');
            }
        }
    }

    public function google()
    {
        $g_client = new Google_Client();
        $g_client->setClientId("882413254155-dqrcsii5mp2f40vc0v4hhj0gkacp9n1q.apps.googleusercontent.com");
        $g_client->setClientSecret("xNA8IIyIJpOmlZ3ZgRvKX8qx");
        $g_client->setRedirectUri("http://essay-lite.io/en/backend/dashboard");
        $g_client->setScopes("email");

        //Step 2 : Create the url
        $auth_url = $g_client->createAuthUrl();
        echo "<a href='$auth_url' style='text-align: center; border: 2px solid cornflowerblue; border-radius: 6px; text-decoration: none; margin-bottom: 400px; padding: 20px'>Login Through Google </a>";

        //Step 3 : Get the authorization  code
        $code = isset($_GET['code']) ? $_GET['code'] : NULL;

        //Step 4: Get access token
        if (isset($code)) {

            try {

                $token = $g_client->fetchAccessTokenWithAuthCode($code);
                $g_client->setAccessToken($token);
            } catch (Exception $e) {
                echo $e->getMessage();
            }




            try {
                $pay_load = $g_client->verifyIdToken();
            } catch (Exception $e) {
                echo $e->getMessage();
            }
        } else {
            $pay_load = null;
        }

        if (isset($pay_load)) {



            var_dump($pay_load['email']);
        }
    }
    public function logout()
    {

        unset($_SESSION['id']);

        //session_destroy();

        header("Location: login");
        exit;
    }
}
