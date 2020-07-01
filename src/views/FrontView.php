<?php

require_once('libs/smarty/Smarty.class.php');

class FrontView{

    private $smarty;

    function __construct(){
        $this->smarty = new Smarty;
    }

    function Index(){
        $this->smarty->display('src/views/templates/frontIndex.tpl');

    }

    function Menu($categories,$dishes){
        $this->smarty->assign('categories',$categories);
        $this->smarty->assign('dishes',$dishes);
        $this->smarty->display('src/views/templates/frontMenu.tpl');
    }

    function Events(){
        $this->smarty->display('src/views/templates/frontEvents.tpl');

    }
    
    function About(){
        $this->smarty->display('src/views/templates/frontAbout.tpl');
        
    }
    
    function Contact(){
        $this->smarty->display('src/views/templates/frontContact.tpl');

    }

}

?>