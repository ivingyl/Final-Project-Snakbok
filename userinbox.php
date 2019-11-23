<?php 
include('login.php');

if(!isset($_SESSION['user'])){
header('location:index.php');	
}
?>
<!doctype>
<html>
<head>
  <link href="userinbox.css" rel="stylesheet" type="text/css">
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
                    <div class="hov"><li><a href="userchatbox.php">QUIZ</a></li></div>
                    <div class="hov"><li><a href="usercompinfopanel.php">COMPANY INFORMATION</a></li></div>
                    <div class="hov active"><li><a href="">INBOX</a></li></div>
                    <div class="hov"><li><a href="usersuggestionpanel.php">SUGGESTIONS</a></li></div>
                </ul>
                </div>
                </div>
                <br>
                <div class="" style="margin-left:850px; font-size:250%; font-family: 'Fredoka One', cursive;">
                  <h3>INBOX</h3>
                </div>
              <br>
                <table id="customers" style="width:70%; margin-left:390px; font-family:Tahoma; border:2px; ">
                <thead> 
                <tr>
            <th scope="col">S.NO.</th>
          <th scope="col">NAME</th>
          <th scope="col">SUBJECT</th>
          <th scope="col">MESSAGE</th>
        </tr>        
          </thead>
          <tbody>
          
          <?php
              $shriy=$_SESSION['user'];
          $qr="SELECT * FROM `userinbox` WHERE `userid` = '$shriy'";
          $gres=mysqli_query($con,$qr);
          while($row=mysqli_fetch_array($gres))
          {
           ?>
          
          
           <tr>
           
          <td><?php echo $row['id']; ?></td>
          <td><?php echo $row['username']; ?></td>
          <td><?php echo $row['subject']; ?></td>
          <td><?php echo $row['message']; ?></td>
        </tr>
              <?php
          }
              ?>
          </tbody>
    </table>
    <br>
    <br>
    <form action="userreplypopup.php" method="post">
    <table>
    <tr>
        <td><input type="submit" value="Reply" style="margin-left: 900px;"></td>
        </tr></table>
    </form>  
</body>
</html>
