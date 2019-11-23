<?php 
include('dbcon.php');
if(!isset($_SESSION['user'])){
header('location:index.php');	
}
?>
<!doctype>
<html>
<head>
<title>delete</title>
<link href="userreplypopup.css" rel="stylesheet" type="text/css">
<body>
    <div class="loginbox">
        <span onclick=window.open("userinbox.php","_self")  class="close" title="Close Modal">&times;</span>
        <img src="images/faculty1.png" class="avatar">
        <h1>Reply</h1>
        <form action="replytoadmin.php" method="post">
            <p>Name</p>
            <input type="text" name="name" placeholder="Enter Name">
            <p>Message</p>
            <br>
            <textarea style="background:transparent; outline:none; font-family: sans-serif;" rows="4" cols="40" type="text" name="message" placeholder="Enter message"></textarea>
            <input type="submit" name="submit" value="Reply">
        </form>
    </div>
</body>
</head>
</html>