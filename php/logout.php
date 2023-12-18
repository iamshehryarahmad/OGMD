<?php

// Function to start session 
session_start();
// Use session_unset() function 
session_unset();
// Finally, destroy the session.
session_destroy();
header("location: ../index.php");
?>
