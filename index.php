<?php
// https://steampixel.de/en/simple-and-elegant-url-routing-with-php/


// Include router class
require __DIR__ . '/models/Route.php';
Route::add('/',function(){
    include __DIR__ . "/view/home.php";
});

// Add base route (startpage)
Route::add('/welcome',function(){
    include __DIR__ . "/view/home.php";
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
    include_once __DIR__ . "/view/query.php";
});

Route::add('/q',function(){
    include_once __DIR__ . "/view/query.php";
});
Route::add('/q/',function(){
    include_once __DIR__ . "/view/query.php";
});



// =============================================================================
// =======================      ICONS ROUTE       ==============================
// =============================================================================

Route::add('/icon/([a-zA-Z%20+]*)',function($q){
    $q = str_replace("%20", " ", $q);
    $q = str_replace("+", " ", $q);
    include_once __DIR__ . "/view/ico.php";
});

Route::add('/icon',function(){
    include_once __DIR__ . "/view/ico.php";
});

// =============================================================================
// =======================      IMAGES ROUTE       =============================
// =============================================================================

Route::add('/image/([a-zA-Z%20+]*)',function($q){
    $q = str_replace("%20", " ", $q);
    $q = str_replace("+", " ", $q);
    include_once __DIR__ . "/view/img.php";
});

Route::add('/image',function(){
    include_once __DIR__ . "/view/img.php";
});


// =============================================================================
// =======================      VIDEO ROUTE       ==============================
// =============================================================================

Route::add('/video/([a-zA-Z%20+]*)',function($q){
    $q = str_replace("%20", " ", $q);
    $q = str_replace("+", " ", $q);
    include_once __DIR__ . "/view/vid.php";
});

Route::add('/video',function(){
    include_once __DIR__ . "/view/vid.php";
});


// =============================================================================
// =======================      VECTORS ROUTE       ============================
// =============================================================================

Route::add('/vector/([a-zA-Z%20+]*)',function($q){
    $q = str_replace("%20", " ", $q);
    $q = str_replace("+", " ", $q);
    include_once __DIR__ . "/view/vec.php";
});

Route::add('/vector',function(){
    include_once __DIR__ . "/view/vec.php";
});


// Accept only numbers as parameter. Other characters will result in a 404 error
Route::pathNotFound(function(){
    include __DIR__ . "/view/404.php";
});

Route::run('/');

