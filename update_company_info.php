<?php 
include('dbcon.php');
if(!isset($_SESSION['user'])){
header('location:index.php');	
}
?>
<!doctype>
<html>
<head>
<title>Update Company info</title>
<link href="update_company_info.css" rel="stylesheet" type="text/css">
<body>
    <div class="updatebox" >
        <span onclick=window.open("admin_compinfo.php","_self") class="close" title="Close Modal">&times;</span>
        <img src="images/faculty1.png" class="avatar">
        <h1>Update Company Information</h1>
        <form action="finalupdate.php" method="post">
              <p>Company ID</p>
            <input type="text" name="cid" placeholder="Enter Company Id" value="<?php echo $_SESSION['shri1']; ?>">
            <p>Company Name</p>
            <input type="text" name="cname" placeholder="Enter Company Name" value="<?php echo $_SESSION['shri2']; ?>">
            <p>Company Website</p>
            <input type="text" name="cemail" placeholder="Enter Company Website" value="<?php echo $_SESSION['shri3']; ?>">
            <p>Package</p>
            <input type="text" name="cpackage" placeholder="Enter package" value="<?php echo $_SESSION['shri4']; ?>">
            <p>Address</p>
            <textarea rows="8" cols="60" name="caddress" placeholder="Enter Address" class="tbox"><?php echo $_SESSION['shri5']; ?></textarea> 
            <p>Technology</p>
            <input type="text" name="ctech" placeholder="Enter Company Name" value="<?php echo $_SESSION['shri6']; ?>">
            <p>Procedure</p>
            <textarea rows="8" cols="60" name="cprocedure" placeholder="Enter Procedure" class="tbox"><?php echo $_SESSION['shri7']; ?></textarea> 
            <p>Description</p>
            <textarea rows="8" cols="60" name="cdescription" placeholder="Enter Description" class="tbox"><?php echo $_SESSION['shri8']; ?></textarea>
            <input type="submit" name="submit" value="Add">
        </form>
    </div>

</body>
</head>
</html>