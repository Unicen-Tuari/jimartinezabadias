<?php

require_once "src/views/AdminView.php";

class AdminController{

    private $view;
    // private $model;

    function __construct(){
        $this->view = new AdminView();
        // $this->model = new TaskModel();
    }

    function showIndex(){
        // echo include_once "src/views/index.html";
        $this->view->Index();
    }

    function showDishes(){
        // echo include_once "src/views/menu.html";
        $this->view->Dishes();
    }

}

?>