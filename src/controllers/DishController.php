<?php

require_once "src/views/AdminView.php";
require_once "src/models/DishModel.php";
require_once "src/models/CategoryModel.php";

class DishController{

    private $AdminView;
    private $DishModel;
    private $CategoryModel;

    function __construct(){
        $this->AdminView = new AdminView();
        $this->DishModel = new DishModel();
        $this->CategoryModel = new CategoryModel();

        session_start();

        if(!isset($_SESSION["username"])){
          header("Location: admin");
          die();
        }else{
          if ( isset($_SESSION['LAST_ACTIVITY']) && (time() - $_SESSION['LAST_ACTIVITY'] > 100)) { 
            header("Location: user_logout");
            die();
          } 
          $_SESSION['LAST_ACTIVITY'] = time();
        }
    }

    function showMenu(){
        $menu = $this->DishModel->Menu();
        $this->AdminView->Index($menu);
    }

    function showDishes(){
        $dishes = $this->DishModel->Dishes();
        $this->AdminView->Dishes($dishes);
    }

    function showDish($params){
        $id_dish = $params[0];
        $dish = $this->DishModel->Dish($id_dish);
        $this->AdminView->Dish($dish);
    }

    function formNewDish(){
        $categories = $this->CategoryModel->Categories();
        $this->AdminView->formNewDish($categories);
    }

    function editDish($params){
        $id_dish = $params[0];
        $dish = $this->DishModel->Dish($id_dish);
        $categories = $this->CategoryModel->Categories();
        $this->AdminView->formEditDish($dish,$categories);
    }

    function insertDish(){
        $this->DishModel->insertDish(
            $_GET["id_category"],
            $_GET["dish_name"],
            $_GET["description"], 
            $_GET["price"],
            $_GET["in_menu"]);
        header("Location: admin_platos");
    }

    function saveDish(){
        $this->DishModel->updateDish(
            $_GET["id_dish"],
            $_GET["id_category"],
            $_GET["new_id_category"],
            $_GET["dish_name"],
            $_GET["description"], 
            $_GET["price"],
            $_GET["in_menu"]);
        header("Location: admin_platos");
    }

    function deleteDish($params){
        $id_dish = $params[0];
        $this->DishModel->deleteDish($id_dish);
        header("Location: ../admin_platos");
    }
    
}

?>