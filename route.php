<?php

require_once "ConfigApp.php";


function parceURL($url){
    
    $partesURL = explode("/", $url);

    $arrayReturn[ConfigApp::$ACTION] = $partesURL[0];
    $arrayReturn[ConfigApp::$PARAMS] = isset($partesURL[1]) ? array_slice($partesURL,1) : null;

    return $arrayReturn;
}

//arreglo de 2 posiciones
$urlData = parceURL($_GET[ConfigApp::$ACTION]);

$actionName = $urlData[ConfigApp::$ACTION];

if(array_key_exists($actionName, ConfigApp::$ACTIONS)){
    
    $params = $urlData[ConfigApp::$PARAMS];
    
    if(array_key_exists($actionName . "/" . $params[0], ConfigApp::$ACTIONS)){
        $accion = ConfigApp::$ACTIONS[$actionName . "/" . $params[0]];
        $params = array_slice($params,1);
    } else {
        $accion = ConfigApp::$ACTIONS[$actionName];
    }

    $controllerMetodo = explode('#', $accion);
    include_once "src/controllers/" . $controllerMetodo[0] . ".php";
    $controller = new $controllerMetodo[0];
    
    $methodName = $controllerMetodo[1];
    
    if(isset($params) && $params != null){
        echo $controllerMetodo[0] . " " . $methodName . " "; 
        var_dump($params);
        echo $controller->$methodName($params);
    }else{
        echo $controller->$methodName();
    }
}else{
    // echo $controller->tasks();
    echo "controller no definido";
}

?>