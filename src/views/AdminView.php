<?php

require_once('libs/smarty/Smarty.class.php');

class AdminView{

    private $smarty;

    function __construct(){
        $this->smarty = new Smarty;
    }

    function showIndex(){
        // $this->smarty->assign('task',$task);
        $this->smarty->display('src/views/templates/adminIndex.tpl');
        // echo include_once "src/views/index.html";
    }

    function showMenu(){
        // $this->smarty->assign('task',$task);
        // $this->smarty->display('templates/task.tpl');
        echo include_once "src/views/menu.html";
    }

    function showEventos(){
        // $this->smarty->assign('task',$task);
        // $this->smarty->display('templates/task.tpl');
        echo include_once "src/views/eventos.html";
    }
    
    function showNosotros(){
        // $this->smarty->assign('task',$task);
        // $this->smarty->display('templates/task.tpl');
        echo include_once "src/views/nosotros.html";
    }
    
    function showContacto(){
        // $this->smarty->assign('task',$task);
        // $this->smarty->display('templates/task.tpl');
        echo include_once "src/views/contacto.html";
    }

}

?>