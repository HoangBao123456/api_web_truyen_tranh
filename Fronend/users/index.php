<?php
    require "./lib/template.php";
    require "./lib/user.php";
    require "./api/render.php";
    require "./lib/item.php";
    $mod=!empty($_GET['mod'])?$_GET['mod']:'home';
    $act=!empty($_GET['act'])?$_GET['act']:'main';
    $path = "layout/modules/{$mod}/{$act}.php";
    if(file_exists($path)){
        require $path;
    }
?>