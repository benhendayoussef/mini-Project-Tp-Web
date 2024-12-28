<?php

require_once __DIR__ . '/../models/User.php';
require_once __DIR__ . '/BaseController.php';

class UserController extends BaseController {
    private $userModel;

    public function __construct() {
        $this->userModel = new User();
    }

    public function register() {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $name = $_POST['name'] ?? '';
            $username = $_POST['username'] ?? '';
            $password = $_POST['password'] ?? '';

            try {
                $hashedPassword = password_hash($password, PASSWORD_BCRYPT);
                $this->userModel->addUser($name, $username, $hashedPassword);
                header("Location: /mini-Project-Tp-Web/public/index.php");
                exit();
            } catch (Exception $e) {
                $this->render('users/add', ['error' => $e->getMessage()]);
            }
        } else {
            $this->render('users/add');
        }
    }

    public function delete($id) {
        try {
            $this->userModel->deleteUser($id);
            header("Location: /users.php");
            exit();
        } catch (Exception $e) {
            $this->render('error', ['error' => $e->getMessage()]);
        }
    }

    public function login() {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $username = $_POST['userName'] ?? '';
            $password = $_POST['password'] ?? '';

            try {
                $user = $this->userModel->getUserByUsername($username);

                if ($user && password_verify($password, $user['password'])) {
                    setcookie("auth_user", $user['id'], time() + 60*60*24*7, "/");
                    header("Location: /mini-Project-Tp-Web/public/index.php");
                    exit();
                } else {
                    $this->render('users/login', ['error' => 'Invalid username and/or password.']);
                }
            } catch (Exception $e) {
                $this->render('users/login', ['error' => $e->getMessage()." ".$username." password ".$password]);
            }
        } else {
            $this->render('users/login'); 
        }
    }

    public function logout() {
        setcookie("auth_user", "", time() - 60*60*24*7, "/"); 
        header("Location: /login.php");
        exit();
    }
}

if (isset($_GET['action']) && $_GET['action'] === 'register') {
    $controller = new UserController();
    $controller->register();
}
if (isset($_GET['action']) && $_GET['action'] === 'login') {
    $controller = new UserController();
    $controller->login();
}

?>
