<?php 

class chaining{
    public function first(){
        echo "This is first function \n";
        return $this;
    }

    public function second(){
        echo "This is second function \n";
        return $this;
    }

    public function third(){
        echo "This is third function \n";
        return $this;
    }
}

$chainingObj = new chaining();

// method chaining
$chainingObj->first()->second()->third();