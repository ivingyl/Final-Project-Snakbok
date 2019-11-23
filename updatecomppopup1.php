<?php 
include('dbcon.php');
if(!isset($_SESSION['user'])){
header('location:index.php');	
}
?>
<!doctype>
<html>
<head>
<title>update</title>
<link href="delete_pop_up.css" rel="stylesheet" type="text/css">
<body>
    <div class="loginbox">
        <span onclick=window.open("admin_compinfo.php","_self")  class="close" title="Close Modal">&times;</span>
        <img src="images/faculty1.png" class="avatar">
        <h1>Update</h1>
        <form action="updatecomp2.php" method="post">
            <p>Enter Company Name</p>
            <input type="text" name="ucname" placeholder="Enter Comp Name" required>
            <input type="submit" name="submit" value="Submit">
        </form>
    </div>
</body>
</head>
</html>