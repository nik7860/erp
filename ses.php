<?php
session_start();
if(!isset($_SESSION['branch']))
header("Location:http://localhost/webdevelop/rvitm.php");
$a=$_SESSION['branch'];
?>