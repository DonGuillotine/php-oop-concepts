<?php

spl_autoload_register('myAutoLoader');

function myAutoLoader($className){
    $url = $_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI'];

    if(strpos($url, 'includes') !== false){
        $path = '../classes/';
    }
    else{
        $path = 'classes/';
    }
    $extension = '.class.php';

    require_once $path . $className . $extension;

}








/**
 * OLD WAY OF AUTO LOADING CLASSES
 * function loading($nameId){
    $path = 'classes/';
    $extension = '.class.php';

    $fullPath = $path . $nameId . $extension;

    if (!file_exists($fullPath)){
        return false;
    }

    include_once $fullPath;


}


spl_autoload_register('loading');
**/