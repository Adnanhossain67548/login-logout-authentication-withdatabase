<?php
$connection=mysqli_connect('localhost','root','','user');
if(!$connection)
{
	die("database is not working".mysqli_error());
}
?>