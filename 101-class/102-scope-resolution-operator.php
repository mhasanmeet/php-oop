<?php 

// access constant and static property
class myClass{

    // a constant
    const myConst = "Hello from constant </br>";

    // a static property
    public static $static_property = "Hello from Static Property </br>";
}

// we use scope resolution operator to access the constant and static property from class
echo myClass::myConst;
echo myClass::$static_property;



// accessing static method
class methodClass{
    public static function myStatFunc(){
        // echo "Hello from static method";
        return "Hello from static method";
    }
}

echo methodClass::myStatFunc();



// parent class constructor and methods
class parentClass{
    public function __construct(){
        echo "Parent construct </br>";
    }

    public function parentMethod(){
        echo "Parent Method </br>";
    }
}


class childClass extends parentClass{
    public function __construct(){
        parentClass::__construct();
        echo "Child constructor </br>";
    }

    public function childMethod(){
        parentClass::parentMethod();
        echo "Child Method";
    }
}

$obj = new childClass;
$obj->__construct();
$obj->childMethod();