<?php

session_start();

echo "Session Started!";

$_SESSION['fav_color'] = "yellow";

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create Session</title>
</head>

<body>
    <?php
    if (isset($_SESSION['fav_color'])) {
        echo "<br>Favorite color: " . $_SESSION['fav_color'];
    }
    ?>
    <br>
    <a href="view-session.php">View Session</a>
    <a href="destroy-session.php">Destroy Session</a>
</body>

</html>