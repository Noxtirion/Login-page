<?php 
require_once './includes/header.php'
?>

<?php
if (isset($_SESSION['sessionId'])) {
      echo "Welcome, " . $_SESSION['sessionUser'] . "." . "<br>" . " You are logged in!";
} else {
      echo "Home";
}
?>

<?php 
require_once './includes/footer.php'
?>

