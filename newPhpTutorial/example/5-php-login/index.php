<?php 
  //Start php_session
  session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://fonts.googleapis.com/css2?family=Pacifico&family=Roboto:wght@500&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="./css/styles.css">
  <title>WheatBook | Welcome to WheatBook</title>
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

    <?php 

      if(isset($_SESSION['isLoggedIn'])) {
        // The user logged in -  don't show form and confuse the poor guy!
        echo "<h1>You are already logged in buddy!</h1>";

      }else {

        //Using Heredoc, to echo out the form.
        $theForm = <<<THEFORM
    
    <div class="header__logo">
      <img src="./images/img1.jpg" alt="logo" class="header__logo--bclr">
      <h1>Wheat Book</h1>
    </div>
    <!-- form inputs -->
    <form action="login-response.php" method="POST">
      <input type="text" name="userName" id="username" placeholder="Enter Name" class="form__input"> <br>
      <input type="password" name="password" id="username" placeholder="Enter Password" class="form__input"> <br>
      <input type="submit" class="form__submit">
    </form>

    THEFORM;
    echo $theForm;
    }

    ?>

    <?php 
      //using the querystring to send messages back to this login page.

      error_reporting(0);
      // if(isset($_GET["isBlock"]) || isset($_GET["badUserCrendtials"])){
      //   $isBlock = $_GET["isBlock"];
      //   $badUserCrendtials = $_GET["badUserCrendtials"];
      // }
      $isBlock = $_GET["isBlock"];
      $badUserCrendtials = $_GET["badUserCrendtials"];

      
      if(isset($isBlock)){
        echo "<h2>Ah, ah, aaaaah ... you need to log in buddy!</h2>";
        echo "<script>document.getElementById('username').focus();</script>";
      } else if($badUserCrendtials) {
        echo "<h2>User name OR password is wrong buddy!</h2>";
        echo "<script>document.getElementById('username').focus();</script>";
      }
    
    ?>


  </section>
  
</body>
</html>