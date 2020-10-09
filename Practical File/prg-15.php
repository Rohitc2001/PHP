<?php

// Static variable program.

function sayHello($name)
{
    static $user_count = 1;

    echo 'Hello and Welcome <b>'.$name.'</b> you are our user number <b>'.$user_count."</b><br>";
    $user_count++;
}

sayHello('Rohit');
sayHello('Ishika');
sayHello('Shavir');
?>