<?php

/*
In PHP, an exception is an object that represents an error or an unexpected condition that 
disrupts the normal flow of program execution. When an error occurs, an exception can be 
thrown to signal that something has gone wrong. This allows the program to handle the error in a 
structured and controlled way, rather than using traditional error-handling mechanisms like 
error codes or die statements.
*/

if($condition){
    throw new Exception("an error occurred");
}