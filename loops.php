<?php
$fruits = array("apple", "banana", "orange");
$len = count($fruits);
echo "Length is: " .  $len;
for($i = 0; $i < $len; $i++) {
    print_r("<li>" . strtoupper($fruits[$i]));
}
echo "</li>";
?>

