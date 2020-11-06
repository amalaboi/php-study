<?php 
  //Start the Session:
  session_start();
    
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>response php form</title>

  <style>

  html,body,h1,form,input,label{
    margin: 0px;
    padding: 0px;
    box-sizing: border-box;
    /* color: white; */
  }

  body{
    width: 100%;
    height: 100vh;
    background-color: blue;
    border: 2px solid white;
    display:flex;
    /* flex-flow: column nowrap; */
    justify-content: center;
    align-items: center;
  }
  

  h1{
    margin-bottom: 2rem;
  }

  .container{
    min-width: 40%;
    /* height:60vh; */
    height: auto;
    padding: 2rem;
    background-color: white;
    border: 2px solid blue;
    border-radius: 20px;
    display:flex;
    flex-flow: column nowrap;
    justify-content: center;
    align-items: center;
  }
  </style>

</head>
<body>
  
  <div class="container">
  <h1>PhP Response Form Processing...</h1>

  <!-- php code below -->
  <?php 

  //Echo session variables that were set on previous page
    echo "Favorite color is ".$_SESSION["favcolor"].".<br>";
    // echo "Favorite animal is ".$_SESSION["favanimal"].".<br>";
    echo "Favorite animal is {$_SESSION['favanimal']} <br>";

  ?>

  <h2>View session with print_r</h2>
  <?php 
    print_r($_SESSION);
  ?>
  <br>
  <h2>Reset Session Variables</h2>
  <?php
    $_SESSION["favcolor"] = "blue";
    $_SESSION["favanimal"] = "lizards";
    echo "New session variable value:";
    print_r($_SESSION);
  ?>

  <h2>Destroy session variables</h2>
  <?php
    //remove all session variables
    session_unset();

    // destroy the session
    session_destroy();
    //print_r
    print_r($_SESSION);
  ?>

  <h2>Use sessions in a variable in a conditional statement</h2>
  <?php
    //create a new session variable
    $_SESSION["favcar"] = "audi";
    // unset($_SESSION["favcar"]);

    if(isset($_SESSION["favcar"])){
      echo "It has been set! It is : {$_SESSION['favcar']}";
    } else{
      echo "It has NOT been set!";
      $_SESSION["isAnswered"] = "No";
    }
  ?>

  <h2>Finally, let's check what is in session with print_r</h2>
  <?php
    // Display what is in session.. 
    print_r($_SESSION);
  ?>

  </div>

</body>
</html>