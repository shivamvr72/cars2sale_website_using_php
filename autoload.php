<?php 

function load_class($classname){
    $path = "classes/$classname.classes.php";
    if($path){
        require $path;
    } else {
        echo "Class not found!";
    }
}



spl_autoload_register("load_class");