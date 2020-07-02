<?php

require_once "src/views/FrontView.php";
require_once "src/models/DishModel.php";
require_once "src/models/CategoryModel.php";

class FrontController{

    private $FrontView;
    private $DishModel;
    private $CategoryModel;

    function __construct(){
        $this->FrontView = new FrontView();
        $this->DishModel = new DishModel();
        $this->CategoryModel = new CategoryModel();
    }

    function showIndex(){
        $this->FrontView->Index();
    }

    function showMenu(){
        $categories = $this->CategoryModel->Categories();
        $dishes = $this->DishModel->Dishes();
        $this->FrontView->Menu($categories, $dishes);
    }

    function showEvents(){
        $this->FrontView->Events();
    }

    function showAbout(){
        $this->FrontView->About();
    }

    function showContact(){
        $this->FrontView->Contact();
    }

}

?>