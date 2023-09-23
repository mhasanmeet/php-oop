<?php

class product{
    public $name, $price, $quantity;

    function __construct($n, $p, $q){
        $this->name = $n;
        $this->price = $p;
        $this->quantity = $q;
    }

    function show(){
        echo "<h1>Products Info</h1>";
        echo "Product Name:" . $this->name . "<br>";
        echo "Product Price:" . $this->price . "<br>";
        echo "Product Quantity:" . $this->quantity . "<br>";
    }
}

$product1 = new product("Apple", "14.90", "300");
$product1->show();


// Inheritance class
class discountedProduct extends product{
    public $discount = 5;
    public $salePrice;

    function show(){
        $this->salePrice = $this->price - $this->discount;

        echo "<h1>Discounted Apple Price!</h1>";
        echo "Product Name:" . $this->name . "<br>";
        echo "Product Price:" . $this->salePrice . "<br>";
        echo "Product Quantity:" . $this->quantity . "<br>";
    }
}

$saleApple1 = new discountedProduct("Apple", "14.90", "300");
$saleApple1->show();