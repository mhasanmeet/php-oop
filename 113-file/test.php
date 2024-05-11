<?php

// create a function for operation
function createFile(){
    // 
    //$fileName = "example.txt";

    // if fileName "example.txt" is exit then show echo text otherwise create that file
    if(is_file("example.txt")){
        echo "the file is exist";
    }else{
        fopen("example.txt", "w");
    }
}

createFile();