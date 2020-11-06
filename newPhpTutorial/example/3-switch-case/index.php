<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>switch case</title>

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
  <h1>Php Form Processing...</h1>
  
  <form action="response.php" method="POST">
    Name: <input type="text" name="name">
    
    Favorite car:
    <select name="fav-car">
      <option value="volvo">Volvo</option>
      <option value="saab">Saab</option>
      <option value="mercedes">Mercedes</option>
      <option value="Audi">Audi</option>
      <option value="Ford">Ford</option>
      <option value="Jeep">Jeep</option>
      <option value="Some crappy card brand">Some crappy card brand</option>
    </select>
    <input type="submit">
  </form>
</body>

</div>
</html>