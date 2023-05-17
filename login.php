<?php
//start a session to store user data
session_start();

//check if login form is submitted
if(isset($_POST['login'])) {
  //get user input from login form
  $username = $_POST['username'];
  $password = $_POST['password'];

  //validate username and password with database
  //if they are correct, set session variables and redirect to homepage
  //otherwise, display error message
}
?>

<!-- create login form -->
<form method="post" action="">
  <input type="text" name="username" placeholder="Username">
  <input type="password" name="password" placeholder="Password">
  <button type="submit" name="login">Login</button>
</form>
