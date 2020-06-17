<?php

require_once "src/views/FrontView.php";

class FrontController{

    private $view;
    // private $model;

    function __construct(){
        $this->view = new FrontView();
        // $this->model = new TaskModel();
    }

    function showIndex(){
        // echo include_once "src/views/index.html";
        $this->view->Index();
    }

    function showMenu(){
        // echo include_once "src/views/menu.html";
        $this->view->Menu();
    }

    function showEvents(){
        // echo include_once "src/views/menu.html";
        $this->view->Events();
    }

    function showAbout(){
        // echo include_once "src/views/menu.html";
        $this->view->About();
    }

    function showContact(){
        // echo include_once "src/views/menu.html";
        $this->view->Contact();
    }

}

?>