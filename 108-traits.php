<?php

// php trait, initiate Trait
trait main{
    public function hello(){
        echo "Hello";
    }
}

// Use trait in class
class A{
    use main;
}

// Use that trait in another class
class B{
    use main;
}

// Create a new Object
$obj = new A;
// And use the trait function
$obj->hello();

$obj2 = new B;
$obj2->hello();





// Example of trait in user authenticate system

interface AuthenticatableInterface{
    public function getPassword();
    public function setPassword();
}

trait Authenticatable{
    public function getPassword(){
        // Implement get Password method
    }

    public function setPassword(){
        // implement set Password method
    }
}

class User implements AuthenticatableInterface{
    use Authenticatable;
}

class Admin implements AuthenticatableInterface{
    use Authenticatable;
}