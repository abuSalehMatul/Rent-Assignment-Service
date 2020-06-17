<?php


class StudentController extends Controller
{

    protected $userModel;
    protected $mediaModel;
    protected $orderRequestModel;

    public function __construct()
    {
        $this->userModel = $this->model('User');
        if (!isset($_SESSION['user']) || $_SESSION['user'] == null) {
            $_SESSION['user'] = $this->userModel->findUserById($_SESSION['id']);
        }

        $this->mediaModel = $this->model('Media');
        $this->orderRequestModel = $this->model('OrderRequest');
    }

    public function __call($method, $arguments = [])
    {
        if (method_exists($this, $method)) {
            if (
                isset($_SESSION['id']) && $_SESSION['id'] != null &&
                isset($_SESSION['role']) && $_SESSION['role'] == 4
            ) {
                return call_user_func_array(array($this, $method), $arguments);
            } else {
                header("Location: " . URLROOT . "/" . $_SESSION['lang'] . "/auth/login");
            }
        }
    }

    private function validator($data)
    {
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }



    private function draftSave()
    {
        if (!empty($_POST['token'])) {
            if (!hash_equals($_SESSION['token'], $_POST['token'])) {
                echo "un-authentic access.. ";
                die();
            }
        }
        
        if (
            $this->required($_POST['type']) && $this->required($_POST['page']) && $this->required($_POST['day'])
            && $this->required($_POST['lavel']) &&
              $this->required($_POST['service'] 
            )
        ) {
            $this->orderRequestModel->draftSave(
                $_SESSION['id'],
                $this->validator($_POST['type']),
                $this->validator($_POST['page']),
                $this->validator($_POST['lavel']),
                $this->validator($_POST['service']),
                $this->validator($_POST['language']),
                $this->validator($_POST['day']),
            );
            $price = $this->orderRequestModel->calculatePrice($_SESSION['draft_id']);
            print_r($price);
        } else {
            print_r('all data required');
        }
    }

    private function OrderRequestsave()
    {
        if (!empty($_POST['token'])) {
            if (!hash_equals($_SESSION['token'], $_POST['token'])) {
                echo "un-authentic access.. ";
                die();
            }
        }
        if ($this->required($_POST['subject'])) {
            $this->orderRequestModel->onProcessSave(
                $_SESSION['draft_id'],
                $this->validator($_POST['subject']),
                $this->validator($_POST['style']),
                $this->validator($_POST['topic']),
                $this->validator($_POST['resource'])

            );
            
        } else {
            print_r('all data required');
        }
    }

    private function StartOrderRequest()
    {
        $this->view('student/orderRequest');
    }

    private function imageStudent()
    {
        if (!empty($_POST['token'])) {
            if (!hash_equals($_SESSION['token'], $_POST['token'])) {
                echo "un-authentic access.. ";
                die();
            }
        }

        $this->userModel->editUser(
            $_SESSION['id'],
            $this->validator($_POST['f_name']),
            $this->validator($_POST['l_name']),
            $this->validator($_POST['email']),
            $this->validator($_POST['phone']),
            $this->validator($_POST['title']),
            $this->validator($_POST['description']),
        );
        header("Location: " . URLROOT . "/" . $_SESSION['lang'] . "/User/findProfile");
    }


    private function dashboard()
    {
        $this->data['total_order'] = $this->userModel->getTotalOrderByUserId($_SESSION['id']);
        $this->data['canceled_order'] = $this->userModel->getTotalCanceledOrderByUserId($_SESSION['id']);
        $this->data['completed_order'] = $this->userModel->getTotalCompletedOrderByUserId($_SESSION['id']);
        $this->view('student/dashboard', $this->data, 'data');
    }

    private function imageSave()
    {
        if (!empty($_POST['token'])) {
            if (!hash_equals($_SESSION['token'], $_POST['token'])) {
                echo "un-authentic access.. ";
                die();
            }
        }
        $target_dir = $_SERVER['DOCUMENT_ROOT'] . "/public/imageUploads/";

        $fileName = time() . rand(20, 3000) . basename($_FILES["image"]["name"]);
        $db_dir = URLROOT . "/public/imageUploads/" . $fileName;
        $target_file = $target_dir . $fileName;
        $uploadOk = 1;
        $imageFileType = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));

        // Check if image file is a actual image or fake image
        if (isset($_POST["submit"])) {
            $check = getimagesize($_FILES["image"]["tmp_name"]);
            if ($check !== false) {
                //  echo "File is an image - " . $check["mime"] . ".";
                $uploadOk = 1;
            } else {
                echo "File is not an image.";
                $uploadOk = 0;
            }
        }

        //Check if file already exists
        if (file_exists($target_file)) {
            echo "Sorry, file already exists.";
            $uploadOk = 0;
        }

        // Check file size
        if ($_FILES["image"]["size"] > 5000000) {
            echo "Sorry, your file is too large.";
            $uploadOk = 0;
        }

        // Allow certain file formats
        if (
            $imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
            && $imageFileType != "gif"
        ) {
            echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
            $uploadOk = 0;
        }

        // Check if $uploadOk is set to 0 by an error
        if ($uploadOk == 0) {
            echo "Sorry, your file was not uploaded.";
            // if everything is ok, try to upload file
        } else {
            if (move_uploaded_file($_FILES["image"]["tmp_name"], $target_file)) {
                $this->userModel->saveImage($_SESSION['id'], $db_dir);
                header("Location: " . URLROOT . "/" . $_SESSION['lang'] . "/User/findProfile");
            } else {
                echo "Sorry, there was an error uploading your file.";
            }
        }
    }
}
