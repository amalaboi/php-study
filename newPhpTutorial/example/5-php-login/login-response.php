<?php 
//Start the session
session_start();

/* Check to see if they put in the right usernamee.
In the real world, we would be checking both username and password and
we would also be talking to a database that would be storing the usernames
and passwords.
.. But alas, we are just noob nerds, so we are doing something simple.

*/

$userName = $_POST["userName"];
if(trim($userName)== "Jimmy"){

  $_SESSION['isLoggedIn'] = true;
  header('Location: protected-page.php');

}else{
  header('Location: index.php?badUserCrendtials=true');
}


?>