<?php
/*
$fruits = array("apple", "banana", "orange");

array_pop($fruits); // remove an item at last index
array_push($fruits, "payapa", "malta"); // add an item at last index

array_shift($fruits); // remove an item at 0 index
array_unshift($fruits, "love", "papayar"); // add an item from 0 index

echo "<pre>";
print_r($fruits);
echo "</pre>";


$cars = array("BMW", "Mercedes", "Tesla", "Toyota");
$cars_2 = ["BMW", "Mercedes", "Tesla", "Toyota"];

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

$a[] = "Anna";
$a[] = "Brittany";
$a[] = "Cinderella";
$a[] = "Diana";
$a[] = "Eva";
$a[] = "Fiona";
$a[] = "Gunda";
$a[] = "Hege";
$a[] = "Inga";
$a[] = "Johanna";
$a[] = "Kitty";
$a[] = "Linda";
$a[] = "Nina";
$a[] = "Ophelia";
$a[] = "Petunia";
$a[] = "Amanda";
$a[] = "Raquel";
$a[] = "Cindy";
$a[] = "Doris";
$a[] = "Eve";
$a[] = "Evita";
$a[] = "Sunniva";
$a[] = "Tove";
$a[] = "Unni";
$a[] = "Violet";
$a[] = "Liza";
$a[] = "Elizabeth";
$a[] = "Ellen";
$a[] = "Wenche";
$a[] = "Vicky";
echo print_r($a, 1);
*/

$sudents_1 = ["h" => "Hassan", "e" => "Elizabeth", "v" => "Vicy", "t" => "Toast"];
$sudents_1_1 = ["h" => "Hassan", "q" => "Ellie", "b" => "Vicy", "a" => "Mouse"];
$sudents_2 = ["h" => ["color" => ["red", "blue", "green"]], "Khizar", "John", null];
$names = array("Hassan", "Monica", "Sofia", "Vicky", "Arthur");
$age = array(25, 22, 30);

// $stu1 = array_merge($sudents_1, $sudents_2);
// $stu2 = array_merge_recursive($sudents_1, $sudents_2);
// $sumStu = $sudents_1 + $sudents_2;
// $combineArr = array_combine($names, $age);
// $removeSlice = array_slice($names, 1);
// $names2 = array("Johnatan", "Evita");
// array_splice($names, count($names), 0, $age);
// $keys = key_exists("v", $sudents_1); // true / false
$comapreValues = array_intersect($sudents_1, $sudents_1_1); // It matches values
$comapreKeys = array_intersect_key($sudents_1, $sudents_1_1); // It matches keys
$comapreKeyVal = array_intersect_assoc($sudents_1, $sudents_1_1); // It matches keys & Values
// $compareArry = array_uintersect_assoc($sudents_1, $sudents_1_1, "compareArrays"); // Custom compare array
// function compareArrays($arr1, $arr2)
// {
//     if ($arr1 === $arr2) {
//         echo "returning 0!";
//         return 0; // Value matches
//         // return 1; // Value a is bigger
//         // return -1; // Value a is smaller
//     }
//     return ($arr1 > $arr2) ? 1 + "returning 1!" : -1 + "returning -1!";
// }
$colors_1 = array("r" => "red", "b" => "blue", "g" => "green", "m" => "magenta", "b" => "black");
$colors_2 = array("r" => "red", "bl" => "blue", "g" => "green", "b" => "brown", "y" => "yellow");
$colors_ind = array("red", "blue", "green", "brown", "black");
$colors_ind2 = array("red", "blue", "green", "brown", "tomato");
$diffKeys = array_diff_key($colors_1, $colors_2);
$diffVals = array_diff($colors_ind, $colors_ind2);
$diffKeyVal = array_diff_assoc($colors_1, $colors_2);

$getValfromArr = array_values($colors_1);
$getKeyArr = array_unique($colors_1);

$studentData = array(
    [
        "id" => 1,
        "fname" => "Hassan",
        "lname" => "khan",
        "phone" => ["primary" => +13216546, "secondary" => +1648979432],
    ],
    [
        "id" => 2,
        "fname" => "Jibran",
        "lname" => "Ambani",
    ],
    [
        "id" => 33,
        "fname" => "John",
        "lname" => "Wick",
    ],
    [
        "id" => 4,
        "fname" => "Vicky",
        "lname" => "Donor",
    ],
);

$nameWithAge = array("Cindy" => 34, "Amanda" => 10, "Chengis" => 89, "Linda" => 33);

$arrColumn = array_column($studentData, "fname", "id");
$cars = array("BMW", "Tesla", "Toyota", "Ford", "Ferrari");
$chunkCars = array_chunk($cars, 3);

$chunkKeysVals = array_chunk($nameWithAge, 3, true);

$flipValsKeys = array_flip($nameWithAge);
$flipValsKeysUcase = array_change_key_case($nameWithAge, CASE_UPPER);

$nums = [10, 20, 30, 40, 50];
$sumNums = array_sum($nums);
$multiplyNums = array_product($nums);

$randomArr = array_rand($nameWithAge, 2);
echo "<pre>";
// print_r($randomArr);
// echo $colors_ind[$randomArr];
// echo $nameWithAge[$randomArr[0]] . "<br>" . $nameWithAge[$randomArr[1]];

array_walk($nameWithAge, "walkFun", "is a key of");
function walkFun($value, $key, $param)
{
    echo "$key : $value  $param<br>";
}

echo "</pre>";
