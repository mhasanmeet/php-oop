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