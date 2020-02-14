<?php

class MyStatic
{
    public static $name = 'Parent';


    public static function printName()
    {
        echo self::$name;
    }
}