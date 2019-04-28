 <?php
session_start();
?>
<!DOCTYPE html>
<html>
<body>

<?php
// remove all session variables
unset($_SESSION["password"]);

// destroy the session
session_destroy();
?>

<a href="display_session.php">display</a>
<br>
<a href="create_session.php">Create</a>

</body>
</html> 