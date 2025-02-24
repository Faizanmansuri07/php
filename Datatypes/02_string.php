
<?php

    $str = "hello php";
    $str2 = "javascript";

    //diff btw " and "" 
    echo "hello $str";
    echo '<br>hello $str2';

    // in " quotes you cant add special characters 
    // in "" quotes you can add variables into it

    //strings methods

    // 1.strlen($str)
    echo "<br>".strlen($str);

    //2 : str_word)count($str)
    //gives the total words in a strings not characters
    echo "<br>".str_word_count($str);

    // 3 : strrev($str)
    //reverse a string
    echo "<br>".strrev($str);

    // 4: strpos($str, searchVal)
    // gives the occurence of a string
    echo "<br>".strpos($str, "php");

    

?>
