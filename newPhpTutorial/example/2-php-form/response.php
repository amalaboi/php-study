<?php 

    $name = $_POST['name'];
    $password = $_POST['password'];
    $message = "";
    // echo out..
    // echo "<h2>Name    : {$name} </h2>";
    // echo "<h2>Password: {$password} </h2>";
    if($password !== "kaka"){
      //echo "No access for you buddy!";
      $message = "No access for you buddy!";
    }else{
      // echo "<h2>Welcome {$name} !</h2>";
      // echo "<h2>The secret answer is : crackers</h2>";
      $message = "<h2>Welcome {$name} !</h2> \n 
                <h2>The secret answer is : crackers</h2>";
      
    }


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
    height:60vh;
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

    echo $message;

  ?>

  </div>

</body>
</html>