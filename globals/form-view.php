<?php
echo "<h2>FORM VIEW PAGE</h2><pre>";
print_r($_REQUEST);
echo "</pre>";

echo "<ul>";
echo "<li>First name: " . $_REQUEST["fname"] . "</li>";
echo "<li>Age: " . $_REQUEST["age"] . "</li>";
echo "<li>Last name: " . $_REQUEST["lname"] . "</li>";
echo "</ul>";

echo "<pre>";
print_r($_SERVER);
echo "</pre>";

echo $_SERVER['HTTP_CONNECTION'];
