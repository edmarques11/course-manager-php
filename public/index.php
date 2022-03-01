<?php

require __DIR__ . '/../vendor/autoload.php';

use Alura\Cursos\Controller\InterfaceControladorRequisicao;

$caminho = $_SERVER['PATH_INFO'];
$routes = require __DIR__ . '/../config/routes.php';

if (!array_key_exists($caminho, $routes)) {
    http_response_code(404);
    exit();
}

session_start();

$rotasPublicas = ['/login', '/realiza-login'];

if (!isset($_SESSION['logado']) && !in_array($caminho, $rotasPublicas, true)) {
    header('Location: /login');
    exit();
}

$classeControladora = $routes[$caminho];
/** @var InterfaceControladorRequisicao $controlador */
$controlador = new $classeControladora();
$controlador->processaRequisicao();
