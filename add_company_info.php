<?php 
include('dbcon.php');
if(!isset($_SESSION['user'])){
header('location:index.php');	
}
?>
<!doctype>
<html>
<head>
<title>Add Company info</title>
<link href="add_company_info.css" rel="stylesheet" type="text/css">
<body>
    <div class="updatebox" >
        <span onclick=window.open("admin_compinfo.php","_self") class="close" title="Close Modal">&times;</span>
        <img src="images/faculty1.png" class="avatar">
        <h1>Add Company Information</h1>
        <form action="insertcomp.php" method="post">
            <p>Company ID</p>
            <input type="text" name="cid" placeholder="Enter Company Id">
            <p>Company Name</p>
            <input type="text" name="cname" placeholder="Enter Company Name">
            <p>Company Website</p>
            <input type="text" name="cemail" placeholder="Enter Company Website">
            <p>Package</p>
            <input type="text" name="cpackage" placeholder="Enter package">
            <p>Address</p>
            <textarea rows="8" cols="60" name="caddress" placeholder="Enter Address" class="tbox"></textarea> 
            <p>Technology</p>
            <input type="text" name="ctech" placeholder="Enter Company Name">
            <p>Procedure</p>
            <textarea rows="8" cols="60" name="cprocedure" placeholder="Enter Procedure" class="tbox"></textarea> 
            <p>Description</p>
            <textarea rows="8" cols="60" name="cdescription" placeholder="Enter Description" class="tbox"></textarea>
            <input type="submit" name="submit" value="Add">
        </form>
    </div>
    
</body>
</head>
</html>