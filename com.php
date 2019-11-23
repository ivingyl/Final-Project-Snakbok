<?php 
include('dbcon.php');

if(!isset($_SESSION['user'])){
header('location:index.php');	
}


?>

<!doctype>
<html>
<head>
<title>Company Information</title>
<link href="com.css" rel="stylesheet" type="text/css">
<body>
    <div class="loginbox" >
        <span onclick=window.open("newcustomer.php","_self")  class="close" title="Close Modal">&times;</span>
        <img src="images/faculty1.png" class="avatar">
        <h1>Company Information</h1>
        <form action="expins.php" method="post">
            <p>Subject</p>
            <input type="text" name="sub" placeholder="Enter subject"><br>
            <br>
            <p>Company Name</p>
            <input type="text" name="info" placeholder="Enter Company  name"><br>
            <br><p>Experience</p>
           <br><textarea class="d1" rows="8" cols="50" type="text" name="exp" placeholder="Enter message"></textarea>
            <br><input type="submit" name="submit" value="Submit">
        </form>
    </div>
</body>
</head>
</html>