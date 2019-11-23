<?php 
include('updateuserpop.php');
if(!isset($_SESSION['user'])){
header('location:index.php');	
}
?>
<!doctype>
<html>
<head>
<title>myaccount</title>
<link href="myaccount.css" rel="stylesheet" type="text/css">
<body>
    <div class="myaccountbox" id="id02">
        <span onclick=onclick=window.open("newcustomer.php","_self") class="close" title="Close Modal">&times;</span>
        <img src="images/faculty1.png" class="avatar">
        <h1>MY ACCOUNT</h1>
        <form action="updateinfobyuser.php" method="post">
            <p>University Roll no.</p>
            <input type="text" name="univroll" placeholder="Enter University Roll no." value="<?php echo $_SESSION['vin1']; ?>">
            <p>Name</p>
            <input type="text" name="uname" placeholder="Enter Name" value="<?php echo $_SESSION['vin2']; ?>">
            <p>Mobile Number</p>
            <input type="text" name="mobno" placeholder="Enter Mobile Number" value="<?php echo $_SESSION['vin3']; ?>">
            <p class="z1">Gender <input type="radio" name="gender" value="Male" checked> Male <input type="radio" name="gender" value="Female"> Female <input type="radio" name="gender" value="Other"> Other
            </p>
            <p>Email</p>
            <input type="text" name="email" placeholder="Enter Email" value="<?php echo $_SESSION['vin5']; ?>">
            <p>Password</p>
            <input type="text" name="psw" placeholder="Enter Password" value="<?php echo $_SESSION['vin6']; ?>">
            <p> Choose course  <select name="course">
                
                <option>B.tech</option>
                <option>BBA</option>
                <option>BCA</option>
                <option>B.Sc</option>
                <option>MCA</option>
                <option>MBA</option>
                <option>M.tech</option>
                <option>Diploma Engineering</option>
                </select> </p>
            <p> Choose Branch  <select name="branch">
                <option>CS</option>
                <option>EE</option>
                <option>EC</option>
                <option>EN</option>
                <option>ME</option>
                <option>ES</option>
                <option>Civil</option>
                <option>Biotech</option>
                </select> </p>
            <p> Choose Year  <select name="year">
                <option>1st Year</option>
                <option>2nd Year</option>
                <option>3rd Year</option>
                <option>4th Year</option>
                </select> </p>
            <input type="submit" name="submit" value="UPDATE">
            <input type="submit" name="submit1" value="CANCEL">

        </form>
    </div>
    <script>

var modal1 = document.getElementById('id02');

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
    if (event.target == modal1) {
        modal1.style.display = "none";
    }
}
</script>
</body>
</head>
</html>
