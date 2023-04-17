<!-- ERROR Handling in PHP -->

<?php

$conn = mysqli_connect("localhost", "root", "", "db_school") or die("Connection failed: " . mysqli_connect_error());
$sql = "SELECT * FROMs students";
$result = mysqli_query($conn, $sql) or die("Query failed: " . mysqli_error($conn));
if (mysqli_num_rows($result) > 0) {
    foreach ($result as $keys) {
        echo "<pre>";
        print_r($keys);
        echo "</pre>";
    }
}
