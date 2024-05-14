<?php

interface primary{
    public function calc($a, $b);
}

interface secondary{
    public function calc($c, $d);
}

// inherits variables from primary and secondary interface
class main implements primary, secondary{
    public function calc($a, $b){
        echo $a + $b;
    }

    public function sub($c, $d){
        echo $c - $d;
    }
}

$output = new main;
$output->calc(10, 20);
$output->sub(30, 20);