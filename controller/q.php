<?php

if (isset($_GET['fw']) && isset($_GET['q'])){
    if($_GET['fw'] == "ico"){$target = "icon";}
    if($_GET['fw'] == "vec"){$target = "vector";}
    if($_GET['fw'] == "img"){$target = "image";}
    if($_GET['fw'] == "vid"){$target = "video";}
    $url = "/$target/" . $_GET['q'];
    header("Location: $url");
} else {
    if (isset($_GET['q'])){
        $url = "/q/" . $_GET['q'];
        header("Location: $url");
    }

}