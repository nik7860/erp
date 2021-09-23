<?php
 session_start();
 $username =$_POST['branch'];
 $password =$_POST['password'];
 include 'conn.php';

 $q="SELECT * from branch where branch='$username' && password='$password'";
 $status=mysqli_query($con,$q);
 $num=mysqli_num_rows($status);
if($num==1)
{
$_SESSION['id']=$username;
header("Location:http://google.com");
}
else
{
    header("Location:hodlogin.php");
}

?>
