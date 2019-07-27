<?php

$username = "";
$password = "";

if(isset($_POST['username'])){
  $username = $_POST['username'];
}
if(isset($_POST['password'])){
  $password = $_POST['password'];
}

if (login($username,$password)){
  header('Location:dashboard.php');
}




function login($username,$password){
  if($username!=null && $password != null){
    return true;
  }else{
    return false;
  }
}


?>


<form action="login.php" method="post">
Username:<br>
<input type="text" name="username">
<br>
Password:<br>
<input type="password" name="password">
<br>

<input type="submit" value="Log In">


</form>