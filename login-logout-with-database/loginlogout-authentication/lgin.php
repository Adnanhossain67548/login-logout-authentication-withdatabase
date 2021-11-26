<?php
$error="";
if(isset($_POST['submit'])){
    $name=$_POST['Username'];
    $pass=$_POST['password'];
    
$connection=mysqli_connect('localhost','root','','user');
if(!$connection)
{
    die("database is not working".mysqli_error());
}

    $query= "SELECT * FROM user1 WHERE username='$name' && confirm_pass='$pass' ";
    $finalquary=mysqli_query($connection,$query);
    $count= mysqli_num_rows($finalquary);
    if($count>0){
        $row=mysqli_fetch_assoc($finalquary);
       if($row){
        header("location:personal_info.php");
       }
    }
   
   else{
    $error="Enter the correct information";
   }
   
}
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    
    <link rel="stylesheet" href="style.css">
  </head>

  <body>
    <div class="center">
      <h1>Login</h1>
      <form action="lgin.php" method="post">
        <div class="txt_field">
          <input type="text" name="Username">
          <span></span>
          <label>Username</label>
        </div>
        <div class="txt_field">
          <input type="password" name="password">
          <span></span>
          <label>Password</label>
        </div>
        <center><?php echo $error;?> </center>
        <div class="pass"><a href="forgot-password.php">Forgot Password?</div>
        <input type="submit" name="submit" value="Login">
        <div class="signup_link">
          Not a member? <a href="reg_form.php">Signup</a>
        </div>
      </form>
    </div>

  </body>
</html>
