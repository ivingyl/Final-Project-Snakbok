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
            <li><?php echo $_SESSION['user1'];?></li>
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
                    <div class="hov"><li><a href="">QUIZ</a></li></div>
                    <div class="hov"><li><a href="admin_compinfo.php">COMPANY INFORMATION</a></li></div>
                    <div class="hov"><li><a href="admin_feedbackpanel.php">EXPERIENCE</a></li></div>
                    <div class="hov"><li><a href="admin_messages.php">MESSAGES</a></li></div>
                </ul></div>
                </div>
                <br>
                <div class="" style="margin-left:800px; font-size:150%; margin-top: 150px;">
                  <h3 style="font-family: 'Righteous', cursive;">QUIZ PERFORMANCE</h3>
                </div>
              <br>
                <div class="container" methord="post" enctype="text/plain">
                  <table id="customers" style="width:70%; margin-left:180px; border:2px;">
       <thead> <tr>
            <th scope="col">S.NO.</th>
            <th scope="col">USER ROLL NO.</th>
           <th scope="col">USER NAME</th>
          <th scope="col">SCORE</th>
        </tr>        
</thead>
           <tbody>
          
          <?php
          $qr="SELECT * FROM `quizscore`";
          $gres=mysqli_query($con,$qr);
          while($row=mysqli_fetch_array($gres))
          {
           ?>
          
          
           <tr>
           
          <td><?php echo $row['id']; ?></td>
          <td><?php echo $row['rollno']; ?></td>
          <td><?php echo $row['name']; ?></td>
          <td><?php echo $row['score']; ?></td>
        </tr>
              <?php
          }
              ?>
          </tbody>           
                      
                      
                      
                      
                      
                      
                    </table>
                </div>


</body>
</html>
