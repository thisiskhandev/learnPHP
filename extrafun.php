<?php
echo "<h2>Extra Functions</h2>";
echo "<h3>Slashes functions</h3>";

$str = "Hi there this is 'Hassan Khan";
$cstr = "Hi there this is Hassan Khan";

$str =  addslashes($str);
echo $str . "<br>";
echo stripslashes($str) . "<br>";
$cstr  = addcslashes($cstr, "H"); // Targets starting with letters
// $cstr  = addcslashes($cstr, "a...z"); // Targets all small letters
echo $cstr;
