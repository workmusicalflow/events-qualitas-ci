<?php

require __DIR__ . '/../vendor/autoload.php';

use Twig\Environment;
use Twig\Loader\FilesystemLoader;

// Configuration de Twig
$loader = new FilesystemLoader(__DIR__ . '/../templates');
$twig = new Environment($loader, [
    'cache' => __DIR__ . '/../var/cache',
    'auto_reload' => true,
]);

// Exemple de routeur basique
$requestUri = $_SERVER['REQUEST_URI'];
$controllerName = 'HomeController';
$action = 'index';

if ($requestUri !== '/') {
    $uriParts = explode('/', trim($requestUri, '/'));
    $controllerName = ucfirst($uriParts[0]) . 'Controller';
    $action = $uriParts[1] ?? 'index';
}

$controllerClass = "Qualitas\\AfricaQsheForum\\Controllers\\$controllerName";

if (class_exists($controllerClass)) {
    $controller = new $controllerClass($twig);
    $controller->$action();
} else {
    http_response_code(404);
    echo $twig->render('404.html.twig');
}
