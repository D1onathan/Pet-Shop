<?php     /* Simples Aplicação MVC com PHP */

if (isset($_GET['controller'])) {
  $controller = $_GET['controller'] . 'Controller';
} 
else {
  $controller = 'ClienteController';
}

if (isset($_GET['metodo'])) {
  $metodo = $_GET['metodo'];
}
else {
  $metodo = 'listar';
}

//Model
require_once 'system/Model.php';

// Carrega o controlador
require_once 'controller/' . $controller . '.php';

// instancia um novo objeto
$site = new $controller();  // carrega o escopo atual
$site->$metodo();


