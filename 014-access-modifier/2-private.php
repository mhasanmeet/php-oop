<?php

// Private access modifier
class privateClass{
    // outside of this class this variable is not accessible
    // not even in derived
    private $name2; 

    public function __construct($n){
        $this->name2 = $n;
    }

    public function show(){
        echo "Your name:" . $this->name2 . "<br>";
    }
}

class privateDerived extends privateClass{
    public function derivedShow(){

        // here we can not access private class variable
        echo "Your new name:" . $this->name2 . "<br>";
    }
}


$name2 = new privateClass("Mahmudu");
$name2->show();


// derived class
$name2 = new privateDerived('Mahmudul Hasan');
$name2->derivedShow();