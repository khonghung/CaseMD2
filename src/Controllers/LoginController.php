<?php
namespace App\Controllers;

use App\Models\LoginModel;

class LoginController extends BaseController
{
    protected $model;

    public function __construct()
    {
        $this->model = new LoginModel();
        parent::__construct($this->model);
    }

    public function register()
    {
        if ($_SERVER['REQUEST_METHOD'] == 'GET') {
            include "src/Views/Login/register.php";
        } else {
            $data = [
                "name" => $_POST["name"],
                "email" => $_POST["email"],
                "password" => $_POST["password"]
            ];
            $this->model->create($data);
            header('Location:index.php?page=login');
        }
    }

    public function login($email, $password)
    {
        if ($this->model->checkLogin($email, $password)) {
            $admin = $this->model->getByEmail($email);
            $_SESSION['name'] = $admin['name'];
            $_SESSION['email'] = $admin['email'];
            $_SESSION['login_error'] = null;
            header('location: index.php');
        } else {
            header('Location:index.php?page=login');
        }
    }

    public function showLogin()
    {
        if ($_SERVER["REQUEST_METHOD"] == "GET") {
            include "src/Views/Login/login.php";
        } else {
            $this->login($_REQUEST['email'], $_REQUEST['password']);
        }
    }

    public function logout()
    {
        session_destroy();
        header("Location:index.php?page=login");
    }


}