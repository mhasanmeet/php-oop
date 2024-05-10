<?php

/* constructor is a special method within a class that gets called automatically,
when an instance of the class is created using the "new" keyword
*/
class person{
    public $name;

    public function __construct($name = ""){
        $this->name = $name;
        echo "My name is: " . $this->name;
    }
}


$kazi = new person("Kazi Sakib");



