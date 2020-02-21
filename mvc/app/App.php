<?php

/**
 * Created by PhpStorm.
 * User: бейсеевс
 * Date: 17.02.2020
 * Time: 17:54
 */
use Klein\Klein;
class App
{
    public function __construct(){
        $this->initRouter();
    }
    private function initRouter(){
        $router=new Klein();
        //include_once "../routes/web.php";
        //echo getcwd();

        /*include_once getcwd()
            . DIRECTORY_SEPARATOR
            . "routes"
            . DIRECTORY_SEPARATOR
            . "web.php";*/


        $dir= getcwd()
            . DIRECTORY_SEPARATOR
            . "routes";
        if(!file_exists($dir)){
            mkdir($dir);
        }
        $list =scandir($dir);
        $list =array_diff($list, ['.','..']);
        foreach($list as $file){
            $path= $dir . DIRECTORY_SEPARATOR . $file;
            $info =pathInfo($path);
            if($info['extension']='php')include_once $path;
        }

        $router->dispatch();
    }
}