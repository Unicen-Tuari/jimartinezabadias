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
        // print_r($dishes);
        $this->view->Dishes($dishes);
    }

    function showDish($params){
        [$cod_category,$id_dish] = $this->splitDishId($params[0]);
        $dish = $this->model->Dish($id_dish,$cod_category);
        $this->view->Dish($dish);
    }

    function formNewDish(){
        $categories = $this->model->Categories();
        $this->view->formNewDish($categories);
    }

    function editDish($params){
        [$cod_category,$id_dish] = $this->splitDishId($params[0]);
        $dish = $this->model->Dish($id_dish,$cod_category);
        $categories = $this->model->Categories();
        $this->view->formEditDish($dish,$categories);
    }

    function insertDish(){
        $this->model->insertDish(
            $_GET["cod_category"],
            $_GET["dish_name"],
            $_GET["description"], 
            $_GET["price"],
            $_GET["in_menu"]);
        header("Location: platos");
    }

    function saveDish(){
        $this->model->updateDish(
            $_GET["id_dish"],
            $_GET["cod_category"],
            $_GET["new_cod_category"],
            $_GET["dish_name"],
            $_GET["description"], 
            $_GET["price"],
            $_GET["in_menu"]);
        header("Location: platos");
    }

    function deleteDish($params){
        [$cod_category,$id_dish] = $this->splitDishId($params[0]);
        $this->model->deleteDish($id_dish,$cod_category);
        header("Location: ../platos");
    }

    function showCategories(){
        $categories = $this->model->Categories();
        $this->view->Categories($categories);
    }

    function formNewCategory(){
        $categories = $this->model->Categories();
        $this->view->formNewCategory($categories);
    }
    
    function insertCategory(){
        $this->model->insertCategory(
            $_GET["cod_category"],
            $_GET["category_name"],
            $_GET["description"]);
        header("Location: categorias");
    }

    // Helpers
    private function splitDishId($dish_url){
        return explode('_',$dish_url);
    }
}

?>