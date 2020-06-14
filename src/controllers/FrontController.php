<?php

require_once "src/views/FrontView.php";

class FrontController{

    private $view;
    // private $model;

    function __construct(){
        $this->view = new FrontView();
        // $this->model = new TaskModel();
    }

    function showIndex($params = null){
        // echo include_once "src/views/index.html";
        $this->view->showIndex();
    }

    function showMenu($params = null){
        // echo include_once "src/views/menu.html";
        $this->view->showMenu();
    }

    function showEventos($params = null){
        // echo include_once "src/views/menu.html";
        $this->view->showEventos();
    }

    function showNosotros($params = null){
        // echo include_once "src/views/menu.html";
        $this->view->showNosotros();
    }

    function showContacto($params = null){
        // echo include_once "src/views/menu.html";
        $this->view->showContacto();
    }

}

?>