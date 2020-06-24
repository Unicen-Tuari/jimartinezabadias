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
        'admin' => 'AdminController#showIndex',
        'admin/platos' => 'AdminController#showDishes',
        'admin/plato' => 'AdminController#showDish',
        'admin/nuevo_plato' => 'AdminController#formNewDish',
        'admin/agregar_plato' => 'AdminController#insertDish',
        'admin/editar_plato' => 'AdminController#editDish',
        'admin/guardar_plato' => 'AdminController#saveDish',
        'admin/borrar_plato' => 'AdminController#deleteDish'
    ];
}
?>