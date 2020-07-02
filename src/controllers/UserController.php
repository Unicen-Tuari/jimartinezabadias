<?php

include_once 'src/models/UserModel.php';
include_once 'src/views/UserView.php';

class UserController 
// extends SecureController
{

    private $UserModel;
    private $UserView;
    
    function __construct(){
        $this->UserModel = new UserModel();
        $this->UserView = new  UserView();
    }

    function showLogin(){
        $this->UserView->Login();
    }

    function validateUser(){
        $username = $_POST['username'];
        $password = $_POST['password'];
        $user = $this->UserModel->getUser($username);
        if (password_verify($password, $user['password'])){
            session_start();
            $_SESSION['username'] = $user['username'];
            header("Location: admin_menu");
        } else {
            header("Location: admin");;
        }
    }

    function formNewUser(){
        return $this->UserView->formNewUser();
    }

    function addUser(){
        $username = $_POST["username"];
        $password = $_POST["password"];
        $this->UserModel->addUser($username, $password);
        header("Location: admin_menu");
    }

    function logout(){
        session_start();
        session_destroy();
        header("Location: admin");
    }


}

?>