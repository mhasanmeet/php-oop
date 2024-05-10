<?php

class main{
    public static $name = "Kazi";

    public function show(){
        echo self::$name;
    }
}

// $output = new main;
// $output->show();

// we can show the output without declaring an object, here it is
echo main::$name;


class name{
    public static $name = " Mahmudul";

    public static function show(){
        echo self::$name;
    }
}

name::show();


// There is also late static binding