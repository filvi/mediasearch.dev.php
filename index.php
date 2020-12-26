<?php
// https://steampixel.de/en/simple-and-elegant-url-routing-with-php/


// Include router class
require __DIR__ . '/models/Route.php';

// Add base route (startpage)
Route::add('/',function(){
    include __DIR__ . "/views/home.php";
});

// // Simple test route that simulates static html file
// Route::add('/test.html',function(){
//     echo 'Hello from test.html';
// });

// // Post route example
// Route::add('/contact-form',function(){
//     echo '<form method="post"><input type="text" name="test" /><input type="submit" value="send" /></form>';
// },'get');

// // Post route example
// Route::add('/contact-form',function(){
//     echo 'Hey! The form has been sent:<br/>';
//     print_r($_POST);
// },'post');



// =============================================================================
// =======================      QUERY ROUTE       ==============================
// =============================================================================

Route::add('/q/([a-zA-Z%20+]*)',function($q){
    $q = str_replace("%20", " ", $q);
    $q = str_replace("+", " ", $q);
    include_once __DIR__ . "/views/query.php";
});

Route::add('/q',function(){
    include_once __DIR__ . "/views/query.php";
});
Route::add('/q/',function(){
    include_once __DIR__ . "/views/query.php";
});



// =============================================================================
// =======================      ICONS ROUTE       ==============================
// =============================================================================

Route::add('/ico/([a-zA-Z%20+]*)',function($q){
    $q = str_replace("%20", " ", $q);
    $q = str_replace("+", " ", $q);
    include_once __DIR__ . "/views/ico.php";
});

Route::add('/ico',function(){
    include_once __DIR__ . "/views/ico.php";
});

// =============================================================================
// =======================      IMAGES ROUTE       =============================
// =============================================================================

Route::add('/img/([a-zA-Z%20+]*)',function($q){
    $q = str_replace("%20", " ", $q);
    $q = str_replace("+", " ", $q);
    include_once __DIR__ . "/views/img.php";
});

Route::add('/img',function(){
    include_once __DIR__ . "/views/img.php";
});


// =============================================================================
// =======================      VIDEO ROUTE       ==============================
// =============================================================================

Route::add('/vid/([a-zA-Z%20+]*)',function($q){
    $q = str_replace("%20", " ", $q);
    $q = str_replace("+", " ", $q);
    include_once __DIR__ . "/views/vid.php";
});

Route::add('/vid',function(){
    include_once __DIR__ . "/views/vid.php";
});


// =============================================================================
// =======================      VECTORS ROUTE       ============================
// =============================================================================



// Accept only numbers as parameter. Other characters will result in a 404 error
Route::pathNotFound(function(){
    include __DIR__ . "/views/404.php";
});

Route::run('/');

