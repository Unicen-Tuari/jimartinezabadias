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
        $menu = $this->makeMenu($categories,$dishes);
        $this->smarty->assign('menu',$menu);
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

    function Login(){
        $this->smarty->display("src/views/templates/frontLogin.tpl");
    }

    function formNewUser(){
        return $this->smarty->display('src/views/templates/formNewUser.tpl');
    }

    private function makeMenu($categories,$dishes){
        $menu = [];
        foreach ($categories as $category) {
            $category['dishes'] = [];
            foreach ($dishes as $dish) {
                if (($dish['in_menu'] == 'P') and ($dish['id_category'] == $category['id_category'])){
                    array_push($category['dishes'], $dish);
                }
            }
            array_push($menu,$category);
        }
        return $menu;
    }

}

?>