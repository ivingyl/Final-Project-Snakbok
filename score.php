<?php
include('dbcon.php');
$a=$_SESSION['user'];
$b=$_SESSION['user3'];
$c=@$_SESSION['score']/2;
$qry="INSERT INTO `quizscore`(`rollno`, `name`, `score`) VALUES ('$a','$b','$c')";
$run = mysqli_query($con, $qry);
header('location:userchatbox.php');		

?>