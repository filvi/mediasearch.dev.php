<?php

if (isset($_GET['q'])){
    $url = "/q/" . $_GET['q'];
    header("Location: $url");
}