<?php

class main{

    // static property acts as global variable
    public static $name = "Kazi";

    public function show(){
        echo self::$name;
    }
}

// $output = new main;
// $output->show();

// we can show the output without declaring an object, here it is
echo main::$name; // Kazi

// so let's change the class property value
echo main::$name = "Hasan"; //Hasan

// let print original value, but it will print changed value, because static property acts as global variable
echo main::$name; // Hasan





class name{

    // static properties
    public static $name = " Mahmudul";

    // static method
    public static function show(){
        echo self::$name;
    }
}

name::show();

// There is also late static binding





/*
    Static Property and Method is useful when we need to allow an user to change their username 
    or email in future. Here is an example 
*/

class SignUpForm{
    public static $rules = [
        "username" => "required",
        "email" => "required|email",
        "password" => "required|min:8|max:16"
    ];
}

// User validation
$validator->validate($request, SignUpForm::$rules);

// Admin Validation
$validator->validate($request, SignUpForm::$rules);