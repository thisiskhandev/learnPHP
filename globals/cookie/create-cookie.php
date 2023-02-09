<!-- Cookie html k tag k uper use hoti ha -->
<?php
$cookie_name = "user";
$cookie_value = "Hassan Khan";
$cookie_time = time() + (60 * 5); # Delete after 5mins
$cookie_retrive = "/";

setcookie($cookie_name, $cookie_value, $cookie_time, $cookie_retrive);

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create Cookie</title>
</head>

<body>
    <h1>Accessing cookie</h1>
    <?php
    if (!isset($_COOKIE['user'])) {
        echo "<h3>Cookie not set!</h3>";
    } else {
        echo "<pre>";
        echo $_COOKIE['user'];
        echo "</pre>";
        echo '<a href="view-cookie.php">View Cookie page</a>';
    }
    ?>
</body>

</html>