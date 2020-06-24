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
    }

    function Dishes($dishes){
        $this->smarty->assign('dishes',$dishes);
        $this->smarty->display('src/views/templates/adminDishes.tpl');
    }

    function Dish($dish){
        $this->smarty->assign('dish',$dish);
        $this->smarty->display('src/views/templates/adminDish.tpl');
    }

    function formNewDish($categories){
        $this->smarty->assign('categories',$categories);
        $this->smarty->display('src/views/templates/formNewDish.tpl');
    }
    
    function formEditDish($dish,$categories){
        $this->smarty->assign('dish',$dish);
        $this->smarty->assign('categories',$categories);
        $this->smarty->display('src/views/templates/formEditDish.tpl');
    }


}

?>