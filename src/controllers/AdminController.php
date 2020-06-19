<?php

require_once "src/views/AdminView.php";
require_once "src/models/AdminModel.php";

class AdminController{

    private $view;
    private $model;

    function __construct(){
        $this->view = new AdminView();
        $this->model = new AdminModel();
    }

    function showIndex(){
        // echo include_once "src/views/index.html";
        $this->view->Index();
    }

    function showDishes(){
        $dishes = $this->model->Dishes();
        print_r($dishes);
        $this->view->Dishes($dishes);
    }

}

?>