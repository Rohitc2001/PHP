<?php
// WAP Logical operators.
$a = 10 ;
$b = '10';
$c = 10;
$d = 5;

//'And' operator. '&' Symbol can also be used.
if($a > $b and $a > $d){
    echo "True";
}
else{
    echo "False";
}
echo "<br><br>";

//'or' operator. '||' symbol can also be used.
if($a > $b or $a > $d){
    echo "True";
}
else{
    echo "False";
}
echo "<br><br>";

// 'xor' operator
if($a == $b xor $a == $d)
{
    echo "True";
}
else
{
    echo "False";
}

echo "<br><br>";


// Ternary opetator.
$user = null;
echo $status = (empty($user)) ? "anonymous"  : "logged in";

echo"<br>";

$user = "John";
echo $status = (empty($user)) ? "anonymous"  : "logged in";


?>