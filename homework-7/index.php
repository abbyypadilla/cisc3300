<?php
require_once 'controllers/UserController.php';

$controller = new UserController();

// part d
$requestMethod = $_SERVER['REQUEST_METHOD'];
$requestUri = $_SERVER['REQUEST_URI'];

if ($requestMethod === 'GET' && $requestUri === '/views/users') 
{
    $controller->serveJsonData();
} else 
{
    $controller->serveHtmlPage();
}
?>

<!-- // originally for part a
// $action = $_GET['action'] ?? 'html';

// switch ($action) 
// {
//     case 'html':
//         $controller->serveHtmlPage();
//         break;
//     case 'json':
//         $controller->serveJsonData();
//         break;
//     default:
//         http_response_code(404);
//         echo 'Page not found';
//         break;
// } -->
