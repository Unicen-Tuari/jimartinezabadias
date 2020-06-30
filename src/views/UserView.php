<?php

require_once('libs/smarty/Smarty.class.php');


class UserView{

    private $smarty;

    public function __construct(){
        $this->smarty = new Smarty;
    }

    function Login(){
        $this->smarty->display("src/views/templates/login.tpl");
    }

    function formNewUser(){
        return $this->smarty->display('src/views/templates/formNewUser.tpl');
    }

}

?>