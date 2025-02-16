<?php
session_start();
ini_set('display_errors', true);
error_reporting(E_ALL);

// basic .env file parsing
if (file_exists("../.env")) {
  $variables = parse_ini_file("../.env", true);
  foreach ($variables as $key => $value) {
    putenv("$key=$value");
  }
}

$routes = array(
  'home' => array(
    'controller' => 'Webshops',
    'action' => 'index'
  ),
  'detail' => array(
    'controller' => 'Webshops',
    'action' => 'detail'
  ),
  'cart' => array(
    'controller' => 'Orders',
    'action' => 'cart'
  ),
  'information' => array(
    'controller' => 'Orders',
    'action' => 'information'
  ),
  'payment' => array(
    'controller' => 'Orders',
    'action' => 'payment'
  ),
  'confirmation' => array(
    'controller' => 'Orders',
    'action' => 'confirmation'
  )
);

if(empty($_GET['page'])) {
  $_GET['page'] = 'home';
}
if(empty($routes[$_GET['page']])) {
  header('Location: index.php');
  exit();
}

$route = $routes[$_GET['page']];
$controllerName = $route['controller'] . 'Controller';

require_once __DIR__ . '/controller/' . $controllerName . ".php";

$controllerObj = new $controllerName();
$controllerObj->route = $route;
$controllerObj->filter();
$controllerObj->render();
