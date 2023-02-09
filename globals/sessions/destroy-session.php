<?php
/* Destroy Sessions */
session_start();
session_unset();
session_destroy();
echo "Session destroyed!";
echo '<br><a href="view-session.php">View Session</a>';
echo '<br><a href="create-session.php">Create a new Session</a>';
