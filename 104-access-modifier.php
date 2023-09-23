<?php

// public access modifier
class base{
    public $name;

    public function __construct($n){
        $this->name = $n;
    }

    public function show(){
        echo "Your Name:" . $this->name . "<br>";
    }
}

$name = new base('Mahmudul Hasan');
$name->show();