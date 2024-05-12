<?php

class myClass{
    //code here 
}

// check if "myClass" class is exists by "class_exists()" method
if(class_exists('myClass')){
    echo "The class is exist </br>";
}else{
    echo "The class do not exists";
}



$obj = new myClass;

// check if "$obj" object is exists by "is_a()" method
if(is_a($obj, 'myClass')){
    echo "The object is exist </br>";
}else{
    echo "The object do not exists";
}



class childClass extends myClass{
    //code here 
}

$childObj = new childClass;

// check if "$childObj" object is subclass "is_subclass_of()" method
if(is_subclass_of($childObj, 'myClass')){
    echo "This object is a subclass of myClass";
}else{
    echo "The object is not a subclass of myClass";
}

/*
php conditional functions are,

    * class_exists()
    * interface_exists()
    * method_exists()
    * trait_exists()
    * property_exits()
    * is_a()
    * is_subclass_of()
*/