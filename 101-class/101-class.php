<?php

// Create a class in PHP
class calculation {
    public $a, $b, $output;

    function sum(){
        $this->output = $this->a+$this->b;
        return $this->output;
    }

    function sub(){
        $this->output = $this->a - $this->b;
        return $this->output;
    }
}

// Create a new object based on class
$newObj = new calculation;

// insert value into variable 
$newObj->a = 10; $newObj->b = 20;

//Call the function 
echo "Value of Sum " . $newObj->sum();




// Create another object 
$obj2 = new calculation;

// insert value into variable 
$obj2->a = 30; $obj2->b = 30;

//Call the function 
echo " Value of Sub " . $obj2->sum();

