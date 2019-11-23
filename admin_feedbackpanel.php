<?php 
include('dbcon.php');
if(!isset($_SESSION['user'])){
header('location:index.php');	
}
?>
<!doctype>
<html>
<head>
  <link href="admin_feedbackpanel.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Kalam|Righteous&display=swap" rel="stylesheet">
</head>
<body>
    <header>
        <div class="row">
            <div class="logo">
                <img src="images/logo.png" style="margin:20px; border-radius: 50%; width: auto;">
            </div>
        <div class="a1">
            <ul>
                <li><strong><?php echo $_SESSION['user1'];?></strong></li>
            <li><button type="button" id="btn1" onclick=window.open("index.php","_self") class="cancelbtn">Logout</button></li>
          </ul>
        </div>
    </header>
        <div class="split left">
            <div class="centered">
                <img src="images/faculty1.png" alt="user">
                <h2 style="font-family: 'Kalam', cursive;">Welcome <?php echo $_SESSION['user2'];?></h2>
                <br>
                <br>
                <ul class="side-nav">
                    <div class="hov"><li><a href="admin.php">HOME</a></li></div>
                    <div class="hov"><li><a href="admin_chatbox.php">QUIZ</a></li></div>
                    <div class="hov"><li><a href="admin_compinfo.php">COMPANY INFORMATION</a></li></div>
                    <div class="hov"><li><a href="">EXPERIENCE</a></li></div>
                    <div class="hov"><li><a href="admin_messages.php">MESSAGES</a></li></div>
                </div>
                </div>
                <br>
                <div class="" style="margin-left:850px; font-size:150%; margin-top: 150px;">
                  <h3 style="font-family: 'Righteous', cursive;">EXPERIENCE</h3>
                </div>
              <br>
              <form action="admin_feedbackpanel.php" method="post">   
        <table id="z1" style= "width:70%;  margin-top: 20px;">
        <tr>
            <td><input type="text" id="" name="uniroll" placeholder="Enter User Name" style="margin-left: 480px; width:40%;"></td>
            <td><input type="text" id="" name="uname" placeholder="Enter Company Name" style="margin-left: 110px; width:60%;"></td>
           
            <td><button type="submit" name="submit" style="margin-right: -190px; margin-top:-7px;">Search</button></td>
        </tr>
    </table>
        </form>
            <br>
                <div class="container" methord="post" enctype="text/plain">
                    <table id="customers" style="width:70%; margin-left:150px; border:2px;">
       <thead> <tr>
            <th scope="col">USER NAME</th>
          <th scope="col">USER ROLL NO</th>
          <th scope="col">COMPANY NAME</th>
           <th scope="col">SUBJECT</th>
          <th scope="col">FEEDBACK</th>
        </tr>        
</thead>
          <tbody>
              <?php $count=0;?>
          <?php
              if(!isset($_POST['submit'])){
          
            
          $qr="SELECT * FROM `experience`";
          $gres=mysqli_query($con,$qr);
          while($row=mysqli_fetch_array($gres))
          {
           ?>
          <?php
              $count++;
              ?>
          
           <tr>
            <td><?php echo $row['name']; ?></td>
          <td><?php echo $row['rollno']; ?></td>
          <td><?php echo $row['compname']; ?></td>
            <td><?php echo $row['subject']; ?></td>
          <td><?php echo $row['feedback']; ?></td>
          </tr>
              <?php
          }
                     ?>
          
    <?php 
              }
              if(isset($_POST['submit'])){
          
          
                  
                                    $uniroll=$_POST['uniroll'];
								   $sname=$_POST['uname'];
				  $qr="SELECT * FROM `experience`";
          if($uniroll!=""||$sname!=""):
                  $qr ="select * from `experience` where `name`='$uniroll' or `compname`='$sname'";
								
								endif;
          $gres=mysqli_query($con,$qr);
                  if(mysqli_num_rows($gres)>0){
									
          while($row=mysqli_fetch_array($gres))
          {
           ?>
          <?php
              $count++;
              ?>
          
           <tr>
            <td><?php echo $row['name']; ?></td>
          <td><?php echo $row['rollno']; ?></td>
          <td><?php echo $row['compname']; ?></td>
            <td><?php echo $row['subject']; ?></td>
          <td><?php echo $row['feedback']; ?></td>
              </tr>
              <?php
          }
                  }
                  else{
                       ?>
                      <tr><td> DATA NOT FOUND</td></tr>
                  <?php
                      }
                  ?>
                     
          
                  <?php
              }
          ?>
          
              
            </tbody>
        </table>
                </div>


</body>
</html>
