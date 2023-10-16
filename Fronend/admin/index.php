<?php
    require "./lib/admin.php";
    $mod=!empty($_GET['mod'])?$_GET['mod']:'admin';
    $act=!empty($_GET['act'])?$_GET['act']:'main';
    $path = "modules/{$mod}/{$act}.php";
    if(file_exists($path)){
        require $path;
    }
?>