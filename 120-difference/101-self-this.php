<?php 

/**
 * "self::" : Refers to the class itself and is used for accessing static properties or methods. 
 *  It cannot access instance properties or non-static methods. 
 * 
 *  "$this->" : Refers to the current instance (object) and is used for accessing instance properties 
 *  and methods that are specific to that object.
 */

 class MyClass {
    public static $staticProperty = "I'm static";
    public $instanceProperty = "I'm an instance property";

    public function showProperties() {
        echo self::$staticProperty;    // Accesses the static property
        echo $this->instanceProperty;  // Accesses the instance property
    }
}
