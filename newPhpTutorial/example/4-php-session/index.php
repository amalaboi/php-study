<?php 
  //Start the Session:
  session_start();
    
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>php session</title>

  <style>

  html,body,h1,form,input,label{
    margin: 0px;
    padding: 0px;
    box-sizing: border-box;
  }

  body{
    width: 100%;
    height: 100vh;
    background-color: red;
    border: 2px solid white;
    display:flex;
    /* flex-flow: column nowrap; */
    justify-content: center;
    align-items: center;
  }
  
  label{
    /* margin-left: 10px;
    margin-right: 50px; */
    margin: 20px;
  }
  input{
    margin: 1rem;
    padding: 10px;
  }

  h1{
    margin-bottom: 2rem;
  }

  .container{
    min-width: 40%;
    height:60vh;
    background-color: white;
    border: 2px solid red;
    border-radius: 20px;
    display:flex;
    flex-flow: column wrap;
    justify-content: center;
    align-items: center;
  }
  form{
    display:flex;
    flex-flow: column nowrap;
    justify-content: center;
    align-items: center;

  }
  </style>
</head>
<body>

<div class="container">
  <h1>Php Session...</h1>
  <?php
  $_SESSION["favcolor"]="green";
  $_SESSION["favanimal"]="cat";
  echo "Session Variables are Set...";
  ?>
  <h2>PHP Sessions allow you to track people</h2>
  
  <a href="http://localhost:81/newPhpTutorial/example/4-php-session/response.php">View Sessions</a>
</div>
</body>
</html>