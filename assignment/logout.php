
<?php
session_start();


if (isset($_SESSION['users'])) {
    // Unset all of the session variables
    unset($_SESSION['users']);

    // Set message
    // Redirect to login page
    redirect('login.php', "You have been logged out successfully.");
}

// Redirect to the login page without message
header("Location: login.php");
exit;
?>
