<?php 
include('dbcon.php');

if(!isset($_SESSION['user'])){
header('location:index.php');	
}
?>
<!doctype>
<html>
<head>
  <link href="userchatbox.css" rel="stylesheet" type="text/css">
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
                <li><button type="button" id="btn1" onclick=window.open("myaccount.php","_self") class="cancelbtn1">User Profile</button></li>
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
                    <div class="hov"><li><a href="newcustomer.php">EXPERIENCE</a></li></div>
                    <div class="hov active"><li><a href="">QUIZ</a></li></div>
                    <div class="hov"><li><a href="usercompinfopanel.php">COMPANY INFORMATION</a></li></div>
                    <div class="hov"><li><a href="userinbox.php">INBOX</a></li></div>
                    <div class="hov"><li><a href="usersuggestionpanel.php">SUGGESTIONS</a></li></div>
                </div>
                </div>
                <br>
                <div class="" style="margin-left:850px; font-size:300%; font-family: 'Fredoka One', cursive; ">
                  <h3>QUIZ</h3>
                </div>
              <br>
                <div class="container" methord="post" enctype="text/plain">
                <form action="userchatbox.php" id="quiz" name="quiz" method="post">
                    <table style="cellspacing:auto;">
                    <tr>  <td>  <p>
                    <strong><label>Choose Subject</label></strong>
                    <select id = "mylist" name="subject" >
                    <option value = "">Please Select</option>
                    <option value = "APTITUDE">APTITUDE</option>
                    <option value = "JAVA">JAVA</option>
                    <option value = "CLOUD">CLOUD</option>
                    <option value = "MACHINE LEARNING">MACHINE LEARNING</option>
                    </select>
                        </p></td>
                        <td><button id="button" type="submit" name="submit" >Search</button></td>
                        </tr></table>

                </form>
                     </div>
<?php
            if(isset($_POST['submit'])){
                $_SESSION['quiz1']=$_POST['subject'];
                header('location:quiztry.php');
            }
            ?>
</body>
</html>
