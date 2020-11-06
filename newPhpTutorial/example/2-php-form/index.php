<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Form!!</title>

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
    flex-flow: column nowrap;
    justify-content: center;
    align-items: center;
  }
  </style>
</head>
<body>

<div class="container">
  <h1>Php Form Processing...</h1>
  
  <form action="response.php" method="POST">
    <label for="name">Name :</label>
    <br>
    <input type="text" name="name">
    <br>
    <label for="password">Password :</label>
    <br>
    <input type="password" name="password">
    <br>
    <input type="submit">
  </form>
</body>

</div>
</html>