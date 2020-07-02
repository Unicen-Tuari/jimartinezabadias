<?php

include_once "database/ConfigDB.php";

define('BASE_URL','//'.$_SERVER['SERVER_NAME'] . dirname($_SERVER['PHP_SELF']) . '/');

class ConfigApp{
    public static $ACTION = "action";
    public static $PARAMS = "params";
    public static $ACTIONS = [
        '' => 'FrontController#showIndex',
        'menu' => 'FrontController#showMenu',
        'eventos' => 'FrontController#showEvents',
        'nosotros' => 'FrontController#showAbout',
        'contacto' => 'FrontController#showContact',
        'admin' => 'UserController#showLogin',
        'admin_menu' => 'DishController#showMenu',
        'admin_platos' => 'DishController#showDishes',
        'admin_plato' => 'DishController#showDish',
        'admin_nuevo_plato' => 'DishController#formNewDish',
        'admin_agregar_plato' => 'DishController#insertDish',
        'admin_editar_plato' => 'DishController#editDish',
        'admin_guardar_plato' => 'DishController#saveDish',
        'admin_borrar_plato' => 'DishController#deleteDish',
        'admin_categorias' => 'CategoryController#showCategories',
        'admin_nueva_categoria' => 'CategoryController#formNewCategory',
        'admin_agregar_categoria' => 'CategoryController#insertCategory',
        'admin_categoria' => 'CategoryController#showCategory',
        'admin_editar_categoria' => 'CategoryController#editCategory',
        'admin_guardar_categoria' => 'CategoryController#saveCategory',
        'admin_borrar_categoria' => 'CategoryController#deleteCategory',
        'user_verify' => 'UserController#validateUser',
        'new_user' => 'UserController#formNewUser',
        'add_user' => 'UserController#addUser',
        'user_logout' => 'UserController#logout'
    ];
}
?>