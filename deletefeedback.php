<?php
include('dbcon.php');

if(!isset($_SESSION['user'])){
	header("location:index.html");
	}

$fid = $_REQUEST["f_id"];



$userQuery =  "SELECT  *  FROM `experience` WHERE `id` = $fid";

$getFileResult = mysqli_query($con,$userQuery );


if($getFileResult){
		$feQuery = "DELETE FROM `experience` WHERE `id` ='$fid'";
		
		
  
  mysqli_query($con,$feQuery);
	
header("location: newcustomer.php");
	
	
}
 else {

    die("ERROR: Only the user who created the file can delete it.");

}?>