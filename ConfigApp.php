<?php

class ConfigApp{
    public static $ACTION = "action";
    public static $PARAMS = "params";
    public static $ACTIONS = [
        '' => 'FrontController#showIndex',
        'menu' => 'FrontController#showMenu',
        'eventos' => 'FrontController#showEventos',
        'nosotros' => 'FrontController#showNosotros',
        'contacto' => 'FrontController#showContacto',
        'admin' => 'AdminController#showIndex'
    ];
}
?>