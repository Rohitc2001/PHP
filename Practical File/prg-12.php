<?php

echo str_replace("l","*","Hello World !",$count)."<br>";
echo "Total number of replacement = $count"."<br>";

$arr = array("blur","red","yellow");

print_r(str_replace("red","pink",$arr,$count))."<br>";

echo "Total number of replacement = $count"."<br>";
echo strrev("Hello World !"); 
?>