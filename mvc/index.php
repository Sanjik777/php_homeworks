<?php
/**
 * Created by PhpStorm.
 * User: ��������
 * Date: 17.02.2020
 * Time: 17:26
 */
//echo __FILE__;
//echo $_SERVER['REQUEST_URI'];

/*$uri =  $_SERVER['REQUEST_URI'];
echo $uri . " ";
$uri =ltrim($uri,'/');
echo $uri . " ";
$uri =rtrim($uri,'/');

$uri = explode('?',$uri)[0];
$uri = explode('/',$uri);
echo $uri . " ";
echo "<pre>";
var_export($uri);
echo "</pre>";*/
//-------------������ ���� ��� �� ���� �� ������� ������-------------
//use Klein\Klein;
//include_once "vendor/autoload.php";

/*$router=new Klein();

$router->get("/",function(){
    return "Hello, Index";
});

$router->get("/say",function(){
    return "qwe";
});

$router->dispatch();*/
//--------------
use Klein\Klein;
include_once "vendor/autoload.php";
new App();
