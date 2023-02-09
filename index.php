<!DOCTYPE html>
<html lang="en">



<body>
    <?php

    require_once "header.php";
    $message = "Just message!";
    echo "<script>console.log('$message')</script>";


    /*
function name($fname="first", $lname="last") {
    return "$fname $lname <br>";
}

function sum($a, $b) {
    $the__sum =  $a+$b;
    return $the__sum;
}

echo name("hassan", "khan");
echo name();
echo name();
echo sum(5,3);



function wow(&$a) {
    return $a = "hey";
}

$str = "hello";

wow($str);

echo $str;

function string($string) {
    return $string .= "This is demmy text<br>";
}

var_dump( string("<br>This will add text means before add<br>"));


function display($number) {
    if($number < 5) {
        echo "$number <br>";
    }
    display(10);
}
*/
    include "globals.php";
    include_once "constants.php";
    include "loops.php";
    include "conditions.php";
    include "arrays.php";
    include "extrafun.php";
    ?>
    <a href="./globals/globals.php">Global Form</a>
</body>

</html>