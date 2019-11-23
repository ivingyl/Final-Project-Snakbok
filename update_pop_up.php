<?php 
include('dbcon.php');
include('updateini.php');
if(!isset($_SESSION['user'])){
header('location:index.php');	
}
?>
<!doctype>
<html>
<head>
<title>Update</title>
<link href="update_pop_up.css" rel="stylesheet" type="text/css">
<body>
    <div class="updatebox">
        <span onclick=window.open("admin.php","_self") class="close" title="Close Modal">&times;</span>
        <img src="images/faculty1.png" class="avatar">
        <h1>Update User Information</h1>
        <form action="updateuserinfobyadmin.php" method="post">
            
            <p>University Roll No.</p>
            <input type="text" name="univroll" value="<?php echo $_SESSION['vin1']; ?>">
            <p>Name</p>
            <input type="text" name="uname" value="<?php echo $_SESSION['vin2']; ?>">
            <p>Mobile No.</p>
            <input type="text" name="mobno" value="<?php echo $_SESSION['vin3']; ?>">
            <p>Gender</p>
            <input type="text" name="gender" value="<?php echo $_SESSION['vin4']; ?>">
            <p>Email</p>
            <input type="text" name="email" value="<?php echo $_SESSION['vin5']; ?>">
            <p>Password</p>
            <input type="text" name="psw" value="<?php echo $_SESSION['vin6']; ?>">
            <p>Course</p>
            <input type="text" name="course" value="<?php echo $_SESSION['vin7']; ?>">
            <p>Branch</p>
            <input type="text" name="branch" value="<?php echo $_SESSION['vin8']; ?>">
            <p>Year</p>
            <input type="text" name="year" value="<?php echo $_SESSION['vin9']; ?>">
            <input type="submit" name="submit" value="Update">
        </form>
    </div>
</body>
</head>
</html>