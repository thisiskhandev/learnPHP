<?php
echo "<h2>FORM</h2>";
?>
<!-- <form action="./form-view.php" method="get"> -->
<form action='<?php echo $_SERVER["PHP_SELF"] ?>' method="get">

    <input type="text" name="fname" id=""><br><br>
    <input type="number" name="age" id=""><br><br>
    <input type="text" name="lname" id=""><br><br>
    <input type="submit" value="Submit" name="save">

</form>

<?php

if (isset($_GET['save'])) {
    echo $_GET['fname'] . "<br>";
    echo $_GET['age'] . "<br>";
    echo $_GET['lname'] . "<br><br><br><pre>";
    print_r($_GET);
}

?>