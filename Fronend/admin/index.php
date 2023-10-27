<?php
    ob_start();
    require "./api/render.php";
    require "./api/account.php";
    require "./api/author.php";
    require "./api/category.php";
    require "./api/story.php";
    require "../users/lib/template.php";
    require "./lib/admin.php";
    $mod=!empty($_GET['mod'])?$_GET['mod']:'login';
    $act=!empty($_GET['act'])?$_GET['act']:'main';
    $path = "modules/{$mod}/{$act}.php";
    if(file_exists($path)){
        require $path;
    }
