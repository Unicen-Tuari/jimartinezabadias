<?php

include_once 'src/models/UserModel.php';
include_once 'src/views/UserView.php';

class UserController 
// extends SecureController
{

    private $userModel;
    private $userView;
    
    function __construct(){
        $this->userModel = new UserModel();
        $this->userView = new  UserView();
    }

    function login(){
        $this->userView->Login();
    }

    function validateUser(){
        $username = $_POST['username'];
        $password = $_POST['password'];
        $user = $this->userModel->getUser($username);
        if (password_verify($password, $user['password'])){
            session_start();
            $_SESSION['username'] = $user['username'];
            header("Location: admin_menu");
        } else {
            header("Location: admin");;
        }
    }

    function formNewUser(){
        return $this->userView->formNewUser();
    }

    function addUser(){

        $username = $_POST["username"];
        $password = $_POST["password"];
        $this->userModel->addUser($username, $password);
        header("Location: admin_menu");
      }

      function logout(){
        session_start();
        session_destroy();
        header("Location: admin");
      }


}

?>