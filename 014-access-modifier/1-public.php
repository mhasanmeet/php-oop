<?php

// public access modifier
class publicClass{
    public $name;

    public function __construct($n){
        $this->name = $n;
    }

    public function show(){
        echo "Your Name:" . $this->name . "<br>";
    }
}

$name = new publicClass('Mahmudul Hasan');
$name->show();