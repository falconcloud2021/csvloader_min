<?php

    spl_autoload_register(function (string $className) {
        require_once __DIR__ . '/core/' . str_replace('\\', '/', $className) . '.php';
    });

    $url = strtolower($_GET['route']);

    $urlSegments = explode('/', $url);

    $controllerName = (empty($urlSegments[0])) ? 'mainController' : $urlSegments[0];
    $actionControllerName = (empty($urlSegments[1])) ? 'index' : $urlSegments[1];

    if(file_exists('core/controllers/'.$controllerName.'.php')){
        require_once 'core/controllers/'.$controllerName.'.php';
        if(function_exists($actionControllerName)){
            $actionControllerName();
        } else{
        echo '404 Page not found!';
        }
    } else{
        echo '404 Page not found!';
    }
