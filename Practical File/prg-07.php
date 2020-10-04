<?php 
 
$count = 0;

$f1 = 0;
$f2 = 1;

echo $f1." , ".$f2." ";

while($count < 15)
{
    $sum = $f1 + $f2;

    echo " , ".$sum;

    $f1 = $f2;
    $f2 = $sum;

    $count++; 
}
?>
