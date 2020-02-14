<?php
class MyStaticChild extends MyStatic
{
    public static $name ="Child";
    public static function printName()
    {
        echo MyStatic::$name;
        echo parent::$name;
    }

}