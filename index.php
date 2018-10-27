<?php
mb_internal_encoding("UTF-8");

// funkcia, ktorá mi podľa požiadavky sama naloaduje buď controller alebo model
function autoLoadFunction($class){
    //ked sa konci na controller loadne Controller
    if(preg_match('/Controller$/', $class)){
        require ("Controller/" . $class . ".php");
    } else {
        require("Model/" . $class . ".php");
    }
}
//php ju bude vykonavat ako autoloader
spl_autoload_register("autoloadFunction");

$smerovac = new RouterController();
$smerovac->process(array($_SERVER['REQUEST_URI']));
$smerovac->showView();