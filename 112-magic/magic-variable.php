
<!-- it will print the line number -->
<h1><?= __LINE__ ?> </h1>

<!-- It will print the file path -->
<h2><?= __FILE__ ?></h2>

<!-- It will print the directory path -->
<h2><?= __DIR__ ?></h2>



<?php
function myFunc(){
    // It will print the function name
    echo "<h2>" . __FUNCTION__ . "</h2>";
}
myFunc();



class myClass{
    
    public function myFunc(){
        // It will print the current class name
        echo "<h2>" . __CLASS__ . "</h2>";
    }
}

$obj = new myClass;
$obj->myFunc();




trait myTrait{
    public function myTrait(){
        // it will show the current trait
        echo "<h2>" . __TRAIT__ . "</h2>";
    }
}

class useMyTrait{
    use myTrait;
}

$obj = new useMyTrait;
$obj->myTrait();
?>


<!-- 
    There are also two more magic variables, they are 
        * __METHOD__
        * __NAMESPACE__
-->

