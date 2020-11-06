<?php 
// Start the session
session_start();

//remove all session variables
session_unset();

// destroy the session
session_destroy();

?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://fonts.googleapis.com/css2?family=Pacifico&family=Roboto:wght@500&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="./css/styles.css">
  <title>Template</title>
</head>
<body>

  <header class="header">
    <div class="header__logo">
      <img src="./images/img2.png" alt="logo">
      <h1>Wheat Book</h1>
    </div>
    <nav class="header__nav">
      <ul class="header__nav-ul">
        <li><a href="index.php"> Home</a></li>
        <li><a href="protected-page.php">Protected Page</a></li>
        <li><a href="#">Contact</a></li>
        <li><a href="logout.php">Log Out</a></li>
      </ul>
    </nav>
  </header>

  <section class="form__section">
    <div class="header__logo">
      <img src="./images/img1.jpg" alt="logo" class="header__logo--bclr">
      <h1>Wheat Book</h1>
    </div>
    <h1>You are Logged Out!</h1>
  </section>