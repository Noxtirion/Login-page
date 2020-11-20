<?php 
require_once './includes/header.php'
?>

<div>
   <h1 class="login__title">Login</h1>
   <p class="login__text">Do not have an account? <a href="register.php">Register!</a></p>
   <form class="login__form" action="" method="post">
      <input class="login__input" type="text" name="username" placeholder="Username">
      <input class="login__input" type="text" name="password" placeholder="Password">
      <button class="login__button" type="submit" name="submit">LOGIN</button>
   </form>
</div>

<?php 
require_once './includes/footer.php'
?>