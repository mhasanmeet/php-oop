<?php

class primary{
    public $name = "kazi";

    public function show(){
        echo "My name is: " . $this->name . "<br>";
    }
}

// here the the variable from primary class will be override
class secondary extends primary{
    public $name = "Mahmudul";

    public function show(){
        echo "My new name is: " . $this->name;
    }
}

$output = new primary;
$output->show();

$newOutput = new secondary;
$newOutput->show();
