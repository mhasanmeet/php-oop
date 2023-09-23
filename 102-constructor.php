<?php

class person{
    public $name, $age;

    public function __construct($name = " ", $age = " "){
        $this->name = $name;
        $this->age = $age;
    }

    function show(){
        echo "My Name:" . $this->name . "And my age is:" . $this->age . "\n";
    }
}

$person = new person();
$kazi = new person("Kazi Sakib", 28);

$person->show();
$kazi->show();



