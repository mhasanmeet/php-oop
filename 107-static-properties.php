<?php

class Main{

    /* 
        1. Shared Across Instances: Static properties are shared by all instances of a class. 
        There is only one copy of a static property, no matter how many objects of the class are created.
        
        2. Class-Level Access: Static properties can be accessed without creating an instance of the class.
        
        3. Self or Class Name Access: Within the class, you can access static properties using 
        self:: (or static:: in some inheritance cases). Outside the class, they can be accessed 
        using the class name, like ClassName::$property.
    */
    // Define a static property
    public static $counter = 0;

    // Method to increment the static property
    public static function incrementCounter() {
        self::$counter++; // Accessing the static property with self::
    }
}

// Accessing and modifying the static property without creating an instance
echo Main::$counter; // Outputs: 0
Main::incrementCounter();
echo Main::$counter; // Outputs: 1




// another example
class InstanceCounter {
    public static $instanceCount = 0;

    public function __construct() {
        self::$instanceCount++; // Increment the counter on each instance creation
    }
}

// Create multiple instances
new InstanceCounter();
new InstanceCounter();
new InstanceCounter();

echo InstanceCounter::$instanceCount; // Outputs: 3




// 
class name{

    // static properties
    public static $name = " Mahmudul";

    // static method
    public static function show(){
        echo self::$name;
    }
}

name::show(); //Mahmudul



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