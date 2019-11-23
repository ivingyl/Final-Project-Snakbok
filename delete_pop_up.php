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
<link href="delete_pop_up.css" rel="stylesheet" type="text/css">
<body>
    <div class="loginbox">
        <span onclick=window.open("admin.php","_self")  class="close" title="Close Modal">&times;</span>
        <img src="images/faculty1.png" class="avatar">
        <h1>Delete User Information</h1>
        <form action="deleteuserbyadmin.php" method="post">
            <p>User ID</p>
            <input type="text" name="uid" placeholder="Enter UNIV ROLL NO">
            <input type="submit" name="submit" value="Delete">
        </form>
    </div>
</body>
</head>
</html>