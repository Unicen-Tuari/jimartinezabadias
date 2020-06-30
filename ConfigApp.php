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
        'admin' => 'UserController#login',
        'admin_menu' => 'AdminController#showIndex',
        'admin_platos' => 'AdminController#showDishes',
        'admin_plato' => 'AdminController#showDish',
        'admin_nuevo_plato' => 'AdminController#formNewDish',
        'admin_agregar_plato' => 'AdminController#insertDish',
        'admin_editar_plato' => 'AdminController#editDish',
        'admin_guardar_plato' => 'AdminController#saveDish',
        'admin_borrar_plato' => 'AdminController#deleteDish',
        'admin_categorias' => 'AdminController#showCategories',
        'admin_nueva_categoria' => 'AdminController#formNewCategory',
        'admin_agregar_categoria' => 'AdminController#insertCategory',
        'admin_categoria' => 'AdminController#showCategory',
        'admin_editar_categoria' => 'AdminController#editCategory',
        'admin_guardar_categoria' => 'AdminController#saveCategory',
        'admin_borrar_categoria' => 'AdminController#deleteCategory',
        'user_verify' => 'UserController#validateUser',
        'new_user' => 'UserController#formNewUser',
        'add_user' => 'UserController#addUser',
        'user_logout' => 'UserController#logout'
    ];
}
?>