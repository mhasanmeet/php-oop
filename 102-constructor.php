<?php

/* constructor is a special method within a class that gets called automatically,
when an instance of the class is created using the "new" keyword
*/
class person{

    // class properties
    public $name;

    // constructor method defined with special method name, __constructor. It's a magic method. 
    public function __construct($name = ""){
        $this->name = $name;
        echo "My name is: " . $this->name;
    }
}

// When we create an object using "new" keyword, PHP automatically calls the "__constructor" method
$kazi = new person("Kazi Sakib");



