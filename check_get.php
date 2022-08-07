<?php

$testArray = ['One', 'Two', 'Three'];

if(isset($_GET['element_number']) && array_key_exists($_GET['element_number'], $testArray)) {
    echo $testArray[$_GET['element_number']];
} else {
    echo 'Parametr value is incoorect' . PHP_EOL;
}

if(isset($_GET['message'])) {
    echo '<br>' . $_GET['message'] . PHP_EOL;
}