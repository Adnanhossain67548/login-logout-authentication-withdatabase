<?php
$error="";
if (isset($_POST["Register"])){
$username=$_POST['name'];
$email=$_POST['email'];
$password=$_POST['password'];
$confirm_password=$_POST['Confirm_pass'];
$connection=mysqli_connect('localhost','root','','user');
if(!$connection)
{
    die("database is not working".mysqli_error());
}

  if($password == $confirm_password){
$insert="INSERT INTO user1 (username, email, password,confirm_pass) VALUES ('$username', '$email', '$password', '$confirm_password')";
$finalquary=mysqli_query($connection,$insert);
}
else{
  $error="Enter the correct password";
}
}

?>


<!DOCTYPE html>
<!-- Coding by CodingLab | www.codinglabweb.com-->
<html lang="en" dir="ltr">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!--<title> Registration or Sign Up form in HTML CSS | CodingLab </title>-->
    <link rel="stylesheet" href="reg_style.css">
   </head>
<body>
  <div class="wrapper">
    <h2>Registration</h2>
    <form action="reg_form.php" method="post">
      <div class="input-box">
        <input type="text" name="name" placeholder="Enter your name" required>
      </div>
      <div class="input-box">
        <input type="text" name="email" placeholder="Enter your email" required>
      </div>
      <div class="input-box">
        <input type="password" name="password" placeholder="Create password" required>
      </div>
      <div class="input-box">
        <input type="password" name="Confirm_pass" placeholder="Confirm password" required>
      </div>
      <center><?php echo $error;?> </center>
      <div class="input-box button">
        <input type="Submit" name="Register" value="Register Now">
      </div>
      <div class="text">
        <h3>Already have an account? <a href="lgin.php">Login now</a></h3>
      </div>
    </form>
  </div>
</body>
</html>