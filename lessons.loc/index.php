<?php

include_once "autoload.php";

echo "<!DOCTYPE html>";
$html=Tag::html();
$head=Tag::head()->appendTo($html);
$body=Tag::body()->appendTo($html);

$container= Tag::div()->appendTo($body);
$container->setAttributes('class','container');

$link=new Link();
$link
    ->appendBody('Hello')
    //->setAttributes('href','http://google.com');
        //��� ���������� �������� �-�� href  �������
    ->href('http://google.com');
$container->appendBody($link);

echo $html;












