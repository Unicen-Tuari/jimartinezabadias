<?php

require_once('libs/smarty/Smarty.class.php');

class AdminView{

    private $smarty;

    function __construct(){
        $this->smarty = new Smarty;
    }

    function Index(){
        // $this->smarty->assign('task',$task);
        $this->smarty->display('src/views/templates/adminIndex.tpl');
        // echo include_once "src/views/index.html";
    }

    function Dishes(){
        // $this->smarty->assign('task',$task);
        $this->smarty->display('src/views/templates/adminDishes.tpl');
        // echo include_once "src/views/templates/adminPlatos.tpl";
    }


}

?>