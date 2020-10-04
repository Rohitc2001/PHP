<?php
// WAP Comparison Operators
$a = 10 ;
$b = '10';
$c = 10;
$d = 5;

// Equal example
var_dump($a == $b );
echo"<br>";
var_dump($a == $c);
echo"<br><br>";

//Identical  
var_dump($a === $b );
echo"<br>";
var_dump($a === $c);
echo"<br><br>";

//Not equal example
var_dump($a != $b );
echo"<br>";
var_dump($a == $c);
echo"<br><br>";

//Not identical example
var_dump($a !== $b );
echo"<br>";
var_dump($a == $c);
echo"<br><br>";

//Concatentoion assignment
$str1 = "Svvv";
$str2 = "Indore";

echo $str1 .= $str2;
?>