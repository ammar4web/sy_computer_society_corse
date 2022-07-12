<?php
if (isset($_GET['controller']) && isset($_GET['action'])) {
    $controller = $_GET['controller'];
    $action = $_GET['action'];
} else {
    $controller = 'Home';
    $action = 'index';
}

$controllers = [
    'Home' => ['index', 'error'],
    'Meal' => ['index', 'create', 'store',  'destroy'],
    'Category' => ['index', 'create', 'store', 'destroy']
];


if (isset($controllers[$controller]))
{
    $actions = $controllers[$controller];
    if (in_array($action , $actions))
        callAction($controller, $action);
    else 
        callAction('Home',  'error');
}
else
    callAction('Home',  'error');


function callAction($controller, $action)
{
    echo $controller . ' ' .  $action;
    $controller .= "Controller";
    require_once("controllers/$controller.php");
    $controller  = new $controller;
    $controller->{$action}();
}
