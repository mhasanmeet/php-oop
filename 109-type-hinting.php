<?php

// Type Hinting
class main{

    /* in this function parameter we're initialize type hinting as "int" for integer value.
        Available type in PHP
        * int 
        * float
        * string 
        * Bool
        * Array
        * Object
        * Class / Interface Name
    */
    public function sum(int $value){
        echo $value + 10;
    }

    public function countries(array $names){
        foreach($names as $name){
            echo $name;
        }
    }
}

$countries = ["Bangladesh", "Nepal", "India"];

$obj = new main;
$obj->sum(9);
$obj->countries($countries);



// Type hinting as class
class school{
    public function getNames(student $names){
        echo "<ul>";
        foreach($names->Names() as $name){
            echo $name . "<br>";
        }
        echo "</ul>";
    }
}


class student{
    public function Names(){
        return ["Kazi", "Sakib", "Yeamini"];
    }
}

$obj3 = new school;
$obj4 = new student;
$obj3->getNames($obj4);