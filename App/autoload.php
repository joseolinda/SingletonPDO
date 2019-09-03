<?php


namespace App;

spl_autoload_register(function ($class){
    require_once str_replace( '\\', '/', $class . ".php");
});

// require_once 'Routes/web.php';
//require_once 'Bootstrap.php';
//
//new Bootstrap("ClienteController", "Listar");