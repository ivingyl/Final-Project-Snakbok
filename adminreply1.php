<?php 
include('dbcon.php');

if(!isset($_SESSION['user'])){
header('location:index.php');	
}


?>

<!doctype>
<html>
<head>
<title>REPLY</title>
<link href="com.css" rel="stylesheet" type="text/css">
<body>
    <div class="loginbox" >
        <span onclick=window.open("admin_messages.php","_self")  class="close" title="Close Modal">&times;</span>
        <img src="images/faculty1.png" class="avatar">
        <h1>Reply</h1>
        <form action="adminreply2.php" method="post">
            <p>USER ROLL NO.</p>
            <input type="text" name="sub" placeholder="Enter roll no."><br>
            <br>
            <p>Subject</p>
            <input type="text" name="info" placeholder="Enter Subject"><br>
            <br><p>Message</p>
           <br><textarea class="d1" rows="8" cols="50" type="text" name="exp" placeholder="Enter message"></textarea>
            <br><input type="submit" name="submit" value="Submit">
        </form>
    </div>
</body>
</head>
</html>