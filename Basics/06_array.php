<?php

    //index array
    //declaration
    $colors = array("red", "green", "blue", "yellow");

    //accesing array via index
    echo "<br>".$colors[0];

    //changing value
    $colors[0] = "ABC";
    echo "<br>";
    print_r($colors);

    //Assosiative arrays
    // this array contains key value pairs

    echo "<br>";

    $bioData = array("name" => "faizan", "Age" => 20, "isLogin" => "true");
    print_r($bioData);


    //accesing value
    echo "<br>".$bioData['name'];

    //changing value
    $bioData['name']  = "Farhan";
    echo "<br>";
    print_r($bioData);

    //loop through assosiative and index array

    //assoisative array
    foreach($bioData as $key => $value) {
        echo "<br>";
        echo "$key : $value";
    }


    // array functions

    $arr  = array(1, 2, 3, 4, 5);
    print_r($arr);

    //1 : array_push(arr, value);
    // push element into array at last
    echo "<br>";
    array_push($arr, 6);
    print_r($arr);

    // 2 : array_pop(array) 
    // used to pop last element
    echo "<br>";
    array_pop($arr);
    print_r($arr);  

    // 3: array_unshift(arr, value);
    // used to insert element at first
    echo "<br>";
    array_unshift($arr, 6);
    print_r($arr);

    // 4 : array_shift()
    echo "<br>";
    array_shift($arr);
    print_r($arr);

    //checking and searchimg array
    $arr = ["apple", "banana", "cherry"];

    // 1: in_array
    // is element exist in array
    echo "<br>";
    echo in_array("banana", $arr) ? "true" : "false";

    // 2 : array_search(value,array)
    // Returns the index/key of the value if found.
    echo "<br>";
    echo array_search("apple", $arr);


    // 3: isset($arr[$key])
    //  Checks if a key exists in an array
    echo "<br>";
    echo isset($arr[1]) ? "true" : "False";
    echo "<br> ".isset($bioData["name"])  ? "true" : "False";

    
    // sorting functions
    $arr = [1,2,3,4,5];

    // 1: sort(arr)
    // stort array in asc
    echo "<br>";
    sort($arr);
    print_r($arr);

    // 2 : rsort(arr);
    // sort in dsc
    echo "<br>";
   rsort($arr);
   print_r($arr);


   //3 : array_reverse(arr)
   echo "<br> reverse : ";
    array_reverse($arr);
    print_r($arr);


    // array filtering functions
    echo "<br>";
    $value = array_filter($arr, function($n) {
        return $n % 2 === 0;
    });

    print_r($value);

    //mapping
    $newValue = array_map(function($val){
        return $val * 2;
    },$value);

    print_r($newValue);


    //  . Merging & Slicing Arrays
    $arr1 = [1,2,3];
    $arr2 = [4,5];

    // 1: array_merge(arr1,arr2);
    $merged = array_merge($arr1, $arr2);
    print_r($merged);
    

    // 2 : array_slice($arr, $start, $length)
    //   Extracts a portion of an array.
    $sliceArr = array_slice($arr, 0,2);
    echo "<br>";
    print_r($sliceArr);
    echo "<br>";
    print_r($arr);

echo $_SERVER['PHP_SELF'];
echo "<br>";
echo $_SERVER['SERVER_NAME'];
echo "<br>";

echo $_SERVER['HTTP_HOST'];
echo "<br>";

echo $_SERVER['HTTP_REFERER'];
echo "<br>";

echo $_SERVER['HTTP_USER_AGENT'];
echo "<br>";
echo $_SERVER['SCRIPT_NAME'];
    
?>