<?php

$colors = array("red", "green", "blue", "yellow");

foreach($colors as $color) {
    echo $color."<br>";
}

foreach($colors as $key => $value) {
    echo "<br>".$key. " : " .$value;
}
?>