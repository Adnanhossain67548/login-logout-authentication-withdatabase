<?php
$error="";
if(isset($_POST['check-email'])){
    $mail=$_POST['email'];

   $connection=mysqli_connect('localhost','root','','user');
if(!$connection)
{
    die("database is not working".mysqli_error());
}
$query="SELECT* FROM sendmail WHERE email='$mail' ";
$finalquery=mysqli_query($connection,$query);
$count=mysqli_num_rows($finalquery); 

if($count>0)
{
    while ($row=mysqli_fetch_assoc($finalquery)) {
        $pass=$row['passward'];
        $subject = "Simple Email Test via PHP";
        $body = "your passward is: $pass";
        $headers = "From: ismailhossain9693@gmail.com";

if (mail($mail, $subject, $body, $headers)) {
    echo "Email successfully sent to ".$mail;
    echo "<br>";
} else {
    echo "Email sending failed...";
}
        
    }
}else{
    $error= "your email not match";
}
}
?>

<!DOCTYPE html> 
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Forgot Password</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="forgot_pass.css">
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col-md-4 offset-md-4 form">
                <form action="forgot-password.php" method="POST" autocomplete="">
                    <h2 class="text-center">Forgot Password</h2>
                    <p class="text-center">Enter your email address</p>
                    <div class="form-group">
                        <input class="form-control" type="email" name="email" placeholder="Enter email address">
                        <center><?php echo $error; ?></center>
                    </div>
                    <div class="form-group">
                        <input class="form-control button" type="submit" name="check-email" value="Continue">
                    </div>
                </form> 
            </div>
        </div>
    </div>
    
</body>
</html>