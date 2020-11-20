<?php
session_start();
require_once 'database.php';

?>

<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Login System</title>
   <link rel="stylesheet" href="./style.css">
</head>
<body>

<header class="header">
   <nav class="header__navigation">
      <ul class="header__list">
         <li class="header__list-item"><a href="index.php">HOME</a></li>
         <li class="header__list-item"><a href="login.php">LOGIN</a></li>
         <li class="header__list-item"><a href="register.php">REGISTER</a></li>
      </ul>
   </nav>
</header>