<?php

require_once "src/views/FrontView.php";
require_once "src/models/AdminModel.php";

class FrontController{

    private $view;
    private $model;

    function __construct(){
        $this->view = new FrontView();
        $this->model = new AdminModel();
    }

    function showIndex(){
        $this->view->Index();
    }

    function showMenu(){
        $categories = $this->model->Categories();
        $dishes = $this->model->Menu();
        $this->view->Menu($categories, $dishes);
    }

    function showEvents(){
        $this->view->Events();
    }

    function showAbout(){
        $this->view->About();
    }

    function showContact(){
        $this->view->Contact();
    }

}

?>