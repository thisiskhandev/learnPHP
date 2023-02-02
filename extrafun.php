<?php
/*
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

echo "<h2>PHP String: HTML Entities Function</h2>";
# HTML Entities function encodes the url to avoid hacking
$string = "A 'quote' is <b>bold</b>";
$url = '<a href="https://www.dofactory.com/sql/sample-database">SQL Site</a>';
// $encodedURL = htmlentities($url);
// $encodedURL = htmlentities($url, ENT_NOQUOTES);
$encodedURL = htmlspecialchars($url);
# CTRL+U to see the diff
echo "Encoded: ";
echo $encodedURL;
$decodedURL = html_entity_decode($encodedURL);
echo "<br><br>Decoded: ";
echo $decodedURL;

echo "<pre>";
# Function htmlspecialchars can encode these chars
print_r(get_html_translation_table(HTML_SPECIALCHARS));
# Function htmlentities can encode these chars
print_r(get_html_translation_table(HTML_ENTITIES));
echo "</pre>";
*/