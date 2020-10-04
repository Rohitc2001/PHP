<?php
    echo strcmp('svvv','Svvv')."<br>";

    echo strcasecmp('Svvv','svvv')."<br>";

    echo strcmp('Svvv Indore','svvv')."<br>";

    echo strncmp('Svvv Indore','Svvv',4)."<br>";

    echo strncasecmp('Svvv Indore','Svvv',4)."<br>";

    echo substr_compare('Svvv Indore','Svvv',5)."<br>";

    echo substr_compare('Svvv Indore','iNDore',5,3,TRUE)."<br>";

    echo substr_compare('Svvv Indore','Indore',5,4)."<br>";
?>

