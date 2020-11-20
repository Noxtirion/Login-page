<?php 
require_once './includes/header.php';
require_once './includes/register-inc.php';
?>

<div class="register">
   <h1 class="register__title">Register</h1>
   <p class="register__text">Already have an account? <a href="login.php">Login!</a></p>
   <form class="register__form" action="./includes/register-inc.php" method="post">
      <input class="register__input" type="text" name="username" placeholder="Username">
      <input class="register__input" type="text" name="password" placeholder="Password">
      <input class="register__input" type="text" name="confirmPassword" placeholder="Confirm password">
      <button class="register__button" type="submit" name="submit">REGISTER</button>
   </form>
</div>

<?php 
require_once './includes/footer.php'
?>