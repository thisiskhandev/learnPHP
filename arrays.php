<?php

$cars = Array("BMW", "Mercedes", "Tesla", "Toyota");
$cars_2 = ["BMW", "Mercedes", "Tesla", "Toyota"];
$fruits = array("apple", "banana", "orange");

/*
$recursive_array = array(
    "chemistry", "Hassan" => 20, "Sarim" => 90
); 

echo "<h2>VAR DUMP</h2><pre>";
var_dump($cars);
echo "</pre><br>";
echo "<h2>PRINT_R</h2><pre>";
print_r($cars);
echo "</pre><h2>PRINT_R with Array Reverse</h2><br><pre>";

print_r(array_reverse($cars_2));
echo "<br><pre>";

echo "<h2>Default</h2>";
print_r($fruits);

array_push($fruits, "malta", "tomato");
echo "<h2>Updated array</h2>";
print_r($fruits);
echo "<h2>Updated array</h2>";
unset($fruits);
if($fruits == null) {
    echo "the value can't be print";
} else {
    print_r($fruits);
}
echo "<br> <h2>Count function</h2>";

// echo print_r($recursive_array);
// echo print_r($recursive_array, 1);
echo count($recursive_array);

echo sizeof($recursive_array);


# Multi dimensional arrays
$food = array(
    "fruits" => array("orange","banana", "apple"),
    "veggie" => array("carrot", "collard", "pea")
);
echo "<pre><h2>Food Array</h2>";
print_r($food);
echo "<h3>Simple count the array</h3>";
echo count($food); // It will count keys only
echo "<br>Recursive Array: " . count($food, 1); // It will count all including keys and arrays
echo "<br>";
$encodeJson = json_encode($food);
echo "<h2>Encoding Array into JSON format</h2> ". $encodeJson;
echo "<br><h2>Decoded JSON</h2>";
$decodedJson = json_decode(($encodeJson));
print_r($decodedJson);
echo "How many Arrays in food => fruits: " . "<b>" . count($food["fruits"],1) . "<b>";
*/





?>