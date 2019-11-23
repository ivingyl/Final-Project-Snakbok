<?php 
include('dbcon.php');
if(!isset($_SESSION['user'])){
header('location:index.php');	
}
?>
<!doctype>
<html>
<head>
<title>delete company</title>
<link href="company_delete_popup.css" rel="stylesheet" type="text/css">
<body>
    <div class="deletebox">
        <span onclick=onclick=window.open("admin_compinfo.php","_self") class="close" title="Close Modal">&times;</span>
        <img src="images/faculty1.png" class="avatar">
        <h1>Delete Company Information</h1>
        <form action="deletecomp.php" method="post">
            <p>Company Name</p>
            <input type="text" name="compname" placeholder="Enter Company Name">
            <input type="submit" name="submit" value="Delete">
        </form>
    </div>

</body>
</head>
</html>