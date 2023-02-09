<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>View Session</title>
</head>

<body>
    <?php
    if (isset($_SESSION['fav_color'])) {
        echo "The Color is: " .  $_SESSION['fav_color'];
        echo '<br><a href="destroy-session.php">Destroy Session</a>';
    } else {
        echo "<h4>There is no session created!</h4>";
        echo '<a href="create-session.php">Create a new Session</a>';
    }
    ?>
</body>

</html>