<?php
/*
$fruits = array("apple", "banana", "orange");
$age = ["Peter" => 34, "Parker" => 22, "Batman" => 55];
$multiArray = [
    "cars" => ["BMW", "Tesla"],
    "ownership" => ["Elon", "Gates"]
];
$len = count($fruits);

// echo "Length is: " .  $len;
// for($i = 0; $i <br $len; $i++) {
//     print_r("<li>" . strtoupper($fruits[$i]));
// }
// echo "</li>";

echo "<ol>";
foreach ($fruits as $value) {
    // print_r($fruits);
    echo "<li>$value</li>";
};
echo "</ol>";

foreach ($age as $x => $value) {
    echo "$x = $value<br>";
}

echo "<pre>";
foreach ($multiArray as $key => $val) {
    echo "$key";
    // print_r($val);
    foreach ($val as $newVal) {
        echo ("<li>$newVal</li>");
    }
}
echo "</pre>";
// Tabular data
for ($row = 1; $row <= 10; $row++) {
    echo $row . "<br>";
    for ($col = $row; $col <= 10; $col++) {
        echo $col;
    }
}
echo "<br>";

# Multidimenionals Associative Array
$marks = [
    "Hassan" => ["physics" => 50, "chemistry" => 30, "maths" => 88],
    "Jibran" => ["physics" => 45, "chemistry" => 33, "maths" => 33],
    "Ebad" => ["physics" => 76, "chemistry" => 36, "maths" => 24],
    "Ali" => ["physics" => 90, "chemistry" => 80, "maths" => 77],
];

echo "<pre>";
print_r($marks);
echo "</pre>";
// echo count($marks, 1);

echo "<table><thead><tr><th>Names</th><th>Physics</th><th>Chemistry</th><th>Maths</th></tr></thead>";
// where $marks is the Array and $names is the key of values

foreach ($marks as $names => $val) {
    echo "<tr><td>";
    echo $names;
    foreach ($val as $subjects => $numbers) {
        echo "<td>" . $numbers . "</td>";
    }
    echo "</td></tr>";
}
echo "</table>";

$objMarks = json_encode($marks);
echo "<pre>" . $objMarks . "</pre>";
echo "<script>console.log('$objMarks')</script>";

var_dump($marks);


$marks = [
    "Hassan" => ["physics" => 50, "chemistry" => 30, "maths" => 88],
    "Jibran" => ["physics" => 45, "chemistry" => 33, "maths" => 33],
    "Ebad" => ["physics" => 76, "chemistry" => 36, "maths" => 24],
    "Ali" => ["physics" => 90, "chemistry" => 80, "maths" => 77],
];
echo "<pre>";
var_dump($marks); // will display below output in the screen.
echo "<br><br><br><br><br><br><br><br>";
print_r($marks); // will display below output in the screen.
echo "</pre>";
*/