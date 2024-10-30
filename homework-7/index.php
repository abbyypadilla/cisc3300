<?php
require_once 'controllers/UserController.php';

$controller = new UserController();

// part d
$requestMethod = $_SERVER['REQUEST_METHOD'];
$requestUri = $_SERVER['REQUEST_URI'];

if ($requestMethod === 'GET' && strpos($requestUri, 'action=json') == true) 
{
    $controller->serveJsonData();
} else 
{
    $controller->serveHtmlPage();
}
?>
