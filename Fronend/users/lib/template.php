<?php
function get_header(){
    $path = "sections/header.php";
    if(file_exists($path)){
        require $path;
    }
}
function get_footer(){
    $path = "sections/footer.php";
    if(file_exists($path)){
        require $path;
    }
}
function get($project,$file){
    $path = "{$project}/{$file}.php";
    if(file_exists($path)){
        require $path;
    }
}
function redirect_to($file){
    if(!empty($file)){
        header("location: {$file}");
    }
}
function show_array($array){
    if(is_array($array)){
        echo "<pre>";
        print_r($array);
        echo "</pre>";
    }
}