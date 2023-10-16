<?php
function show_error($field){
    global $error;
    if(!empty($error[$field])){
        return "<p>{$error[$field]}</p>";
    }
}
?>