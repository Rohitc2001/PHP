<?php

// Global and local variable

$fruit = 'Orange';

function fruitcalc()
{
    global $fruit; // calling global variable
    $quantity = 25;
    $unitprice = 22;

    $totalPrice = $quantity * $unitprice;
    echo 'The price of '.$fruit.' is '.$totalPrice.'Rupees'."<br>";
}
fruitcalc();

function myTest()
{
    $fruit = 'Apple';

    $quantity = 25;
    $unitprice = 10;

    $totalPrice = $quantity * $unitprice;
    echo 'The price of '.$fruit.' is '.$totalPrice.'Rupees'."<br>";
}
myTest();
?>