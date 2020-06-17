<?php

require_once('libs/smarty/Smarty.class.php');

class FrontView{

    private $smarty;

    function __construct(){
        $this->smarty = new Smarty;
    }

    function Index(){
        // $this->smarty->assign('task',$task);
        $this->smarty->display('src/views/templates/frontIndex.tpl');
        // echo include_once "src/views/index.html";
    }

    function Menu(){
        // $this->smarty->assign('task',$task);
        // $this->smarty->display('templates/task.tpl');
        echo include_once "src/views/menu.html";
    }

    function Events(){
        // $this->smarty->assign('task',$task);
        // $this->smarty->display('templates/task.tpl');
        echo include_once "src/views/eventos.html";
    }
    
    function About(){
        // $this->smarty->assign('task',$task);
        // $this->smarty->display('templates/task.tpl');
        echo include_once "src/views/nosotros.html";
    }
    
    function Contact(){
        // $this->smarty->assign('task',$task);
        // $this->smarty->display('templates/task.tpl');
        echo include_once "src/views/contacto.html";
    }

}

?>