<?php

echo "<h2>Retrieve cookie!</h2>";

if (!isset($_COOKIE['user'])) {
    echo "Create cookie first! <br>";
    echo '<a href="create-cookie.php">Create cookie page</a>';
} else {
    echo $_COOKIE['user'];
}
