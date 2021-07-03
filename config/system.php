<?php

function loadController($controllerName, $functionName){
    $controllerPath = ucfirst($controllerName).'Controller.php';
    loadFile('./controllers/'.$controllerPath);

    if(function_exists($functionName))
        $functionName();
    else
        die('No action found in '.$controllerPath .' action '. $functionName);
}


function loadModel($modelName){
    loadFile('./models/'.ucfirst($modelName).'Model.php');
}

function loadView($viewName){
    loadFile('./views/'.$viewName.'.php');
}

function loadFile($fileName){
    global $page, $app;
    include_once $fileName;
}