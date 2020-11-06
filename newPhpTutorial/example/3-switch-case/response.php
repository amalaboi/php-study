<?php 

    $name = $_POST['name'];
    $favCar = $_POST['fav-car'];
    
    switch($favCar){

      case "Audi":
        $message = "{$name}: Your favorite care is Audi!";
      break;
      case "Ford":
        $message = "{$name}: Your favorite care is Ford!";
      break;
      case "Jeep":
        $message = "{$name}: Your favorite care is Jeep!";
      break;
      default:
        $message = "We are to lazy to list all the options!";


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