<?php
require ('../autoload.php');

$config = require '../config/config.php';
$router = Util\src\Model\Router::Route($_SERVER['REQUEST_URI'], $config);

$user = new User();
$user->indexAction();

function __autoload($classname)
{
    $filename=$classname[0].'/src/'.classname[0].'/'.
        classname[1].'/'.
        classname[2].'.php';
        echo $filename;
        $classname = explode("\\",$classname);
        if (file_exists($classname[0]))
            echo $url;
}