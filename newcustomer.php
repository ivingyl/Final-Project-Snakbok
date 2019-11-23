<?php 
include('login.php');

if(!isset($_SESSION['user'])){
header('location:index.php');	
}
?>
<!doctype>
<html>
<head>
  <link href="newcustomer.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Fredoka+One|Pacifico&display=swap" rel="stylesheet">
</head>
<body>
    <header>
        <div class="row">
            <div class="logo">
                <img src="images/logo.png" style="margin:20px; border-radius: 50%; width: auto;">
            </div>
        <div class="a1">
            <ul>
            <li><button type="button" id="btn1" onclick=window.open("myaccount.php","_self") class="cancelbtn1">User Profile</li>
                <li><a href="logout.php"><button type="button" id="btn1" class="cancelbtn">Logout</button></a></li>
          </ul>
        </div>
    </header>
        <div class="split left">
            <div class="centered">
                <img src="images/faculty1.png" alt="user">
                <h2 style="font-family: 'Pacifico', cursive;">Welcome <?php echo $_SESSION['user3'];?>!</h2>
                <br>
                <br>
                <ul class="side-nav">
                    <div class="hov active"><li><a href="">EXPERIENCE</a></li></div>
                    <div class="hov"><li><a href="userchatbox.php">QUIZ</a></li></div>
                    <div class="hov"><li><a href="usercompinfopanel.php">COMPANY INFORMATION</a></li></div>
                    <div class="hov"><li><a href="userinbox.php">INBOX</a></li></div>
                    <div class="hov"><li><a href="usersuggestionpanel.php">SUGGESTIONS</a></li></div>
                </div>
                </div>
                <br>
                <div class="" style="margin-left:780px; font-size:230%; font-family: 'Fredoka One', cursive; ">
                  <h3>EXPERIENCE</h3>
                </div>
              <br>
                <div class="container" methord="post" enctype="text/plain" style="overflow:scroll;">
                    <?php 
$displayQuery="select * from `experience`;";
$result=mysqli_query($con,$displayQuery);
if($result){
	while($row=mysqli_fetch_array($result)){
		?>
		<br>
                    <p style="font-family: 'Fredoka One', cursive;">Roll No. <?php echo $row['rollno'];?><p>&nbsp;<p><strong>Name: </strong><?php echo $row['name'];?></p>
		<br>
                    
		<p><strong>Company Name: </strong><?php echo $row['compname'];?></p>
		<br>
        <p><strong>Subject: </strong><?php echo $row['subject'];?></p>
		
                    
                    <table><tr><td>   <p><strong>Experience: </strong><?php echo $row['feedback'];?></p> </td>
        <td>  <?php 
        if ($row['rollno'] == $_SESSION['user']): ?>
                    <a  href="deletefeedback.php?f_id=<?php echo $row['id']; ?>" ><button id="desk">Delete</button></a>
                    
            <?php endif ?>  </td></table>
		<hr>
		
    <?php    
    }
}?>
		
		
	                    
                    
                    
                    
                    

                  </div>
                  <table style="cellspacing=5;"><tr>
                    <td><button type="submit" class="cbtn" onclick=window.open("com.php","_self") style="margin-left: 850px;" name="create">Create</button></td>
                    
                      </tr></table>
</body>
</html>
