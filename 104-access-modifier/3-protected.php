<?php


// Protected access modifier
class protectedClass{
    // outside of this class this variable is not accessible
    // but in derived class this variable is accessible
    protected $name2; 

    public function __construct($n){
        $this->name2 = $n;
    }

    public function show(){
        echo "Your name:" . $this->name2 . "<br>";
    }
}

class protectDerived extends protectedClass{
    public function derivedShow(){
        echo "Your new name:" . $this->name2 . "<br>";
    }
}


$name2 = new protectedClass("Mahmudul");
$name2->show();


// derived class
$name2 = new protectDerived('Mahmudul Hasan');
$name2->derivedShow();