   <?php

    echo "<pre>";   

    echo " Hello world "."\n";
    
    echo strlen("  Hello World  ")."<br>";
    
    echo strlen(trim(" \nHello World\t "))."<br>";
    
    echo trim(" \nHello World\t ")."<br>";
    
    echo trim("Hello World","drlHe").".<br>";
    
    echo strlen(ltrim( "  Hello World  "))."<br>";
    
    echo ltrim("  Hello  World  ")."<br>";
    
    echo strlen(rtrim("  Hello world  "))."<br>";
    
    echo rtrim("  Hello World  ")."<br>";

    ?>