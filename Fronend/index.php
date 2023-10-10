<?php
    require "./lib/template.php";
    require "./lib/user.php";
    require "./api/render.php";
    $mod=!empty($_GET['mod'])?$_GET['mod']:'home';
    $act=!empty($_GET['act'])?$_GET['act']:'main';
    $path = "layout/modules/{$mod}/{$act}.php";
    if(file_exists($path)){
        require $path;
    }
    // require "./config/config.php";
    // db_connect("https://localhost:44332/api/stars/get_by-count/2");
?>