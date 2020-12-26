<?php

$request = $_SERVER['REQUEST_URI'];

switch ($request) {
    
    // homepage
    case '/' :
        require __DIR__ . '/views/home.php';
        break;
    case '' :
        require __DIR__ . '/views/home.php';
        break;

    // query
    case '/q' :
        require __DIR__ . '/views/query.php';
        break;
    case '/q/' :
        require __DIR__ . '/views/query.php';
        break;
    
    // pagina 404
    default:
        require __DIR__ . '/views/404.php';
        break;
}