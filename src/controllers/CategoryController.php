<?php

require_once "src/views/AdminView.php";
require_once "src/models/CategoryModel.php";

class CategoryController{

    private $AdminView;
    private $CategoryModel;

    function __construct(){
        $this->AdminView = new AdminView();
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

    function showCategories(){
        $categories = $this->CategoryModel->Categories();
        $this->AdminView->Categories($categories);
    }

    function formNewCategory(){
        $this->AdminView->formNewCategory($categories);
    }
    
    function insertCategory(){
        $this->CategoryModel->insertCategory(
            $_GET["category_name"],
            $_GET["description"]);
        header("Location: admin_categorias");
    }

    function showCategory($params){
        $id_category = $params[0];
        $category = $this->CategoryModel->Category($id_category);
        $this->AdminView->Category($category);
    }

    function editCategory($params){
        $id_category = $params[0];
        $category = $this->CategoryModel->Category($id_category);
        $this->AdminView->formEditCategory($category);
    }

    function saveCategory(){
        $this->CategoryModel->updateCategory(
            $_GET["id_category"],
            $_GET["category_name"],
            $_GET["description"]);
        header("Location: admin_categorias");
    }

    function deleteCategory($params){
        $id_category = $params[0];
        $this->CategoryModel->deleteCategory($id_category);
        header("Location: ../admin_categorias");
    }
    
}

?>