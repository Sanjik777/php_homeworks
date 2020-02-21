<?php
/**
 * @var Klein $router
 */
use Klein\Klein;
$router->get('/', function(){
    return 'Hello router!';
});