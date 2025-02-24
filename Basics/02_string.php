
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

    //2 : str_word_count($str)
    //gives the total words in a strings not characters
    echo "<br>".str_word_count($str);

    // 3 : strrev($str)
    //reverse a string
    echo "<br>".strrev($str);

    // 4: strpos($str, searchVal)
    // gives the occurence of a string
    echo "<br>".strpos($str, "php");

    //5 : str_replace(search, replaceVal, string)
    // replace a value from the string
    // also it return the string
    echo "<br>".str_replace("php", "javascript", $str);

    // 6 : strtoupper($str)
    echo "<br>".strtoupper($str);

    // 7 : strtolower($str)
    echo "<br>".strtolower($str);

    //8 : ucfirst($str)
    // Convert First Letter to Uppercase
    // only convert first latter to uppercase not each word of string
    echo "<br>".ucfirst($str);

    // 9 : ucwords($str)
    // Convert First Letter of Each Word to Uppercase
    echo "<br>".ucwords($str);

    // 10 : trim($str)
    // ltrim($string) → Removes whitespace from the left.
    // rtrim($string) → Removes whitespace from the right
    $str2 = "   hello     ";
    echo "<br>".strlen($str2);
    $str2 = trim($str2);
    echo "<br>".strlen($str2);

    // 11 : exploade(delemeter, string)
    // Split a String into an Array
    $str = "hello,faizan,how,are,you";
    $strArr = explode(",", $str);
    print_r($strArr);

    // 12: imploade($delimeter, $array)
    $arr = ["apple", "banana", "orange"];
    echo "<br>".implode(",", $arr);

    // 13 : substr(string, start, length);
    // get substring -> extract a string
    echo "<br>".substr($str,5, 7);

    // 14 : str_contains(string,searchVal);
    echo "<br>".str_contains($str, "faizan") ? "<br>Yes" : "<br>No";


?>
