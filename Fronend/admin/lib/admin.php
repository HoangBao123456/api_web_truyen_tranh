<?php
function get_layout_admin($project,$file)
{
    $path = "{$project}/{$file}.php";
    if (file_exists($path)) {
        require $path;
    }
}
