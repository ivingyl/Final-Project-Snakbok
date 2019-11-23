<?php 
include('dbcon.php');
if(!isset($_SESSION['user'])){
header('location:index.php');	
}
?>
<!doctype>
<html>
<head>
  <link href="admin_messages.css" rel="stylesheet" type="text/css">
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
                    <div class="hov"><li><a href="admin_chatbox.php">QUIZ</a></li></div>
                    <div class="hov"><li><a href="admin_compinfo.php">COMPANY INFORMATION</a></li></div>
                    <div class="hov"><li><a href="admin_feedbackpanel.php">EXPERIENCE</a></li></div>
                    <div class="hov"><li><a href="">MESSAGES</a></li></div>
                </div>
                </div>
                <br>
                <div class="" style="margin-left:850px; font-size:150%;">
                  <h3 style="font-family: 'Righteous', cursive;">Messages</h3>
                </div>
              <br>
            <strong><p style="margin-left:400px; font-size:120%;">From Conatct Us...</p></strong>
            <br>
             <table id="customers" style="width:70%; margin-left:390px; border:2px;" style="overflow:scroll;">
       <thead> <tr>
            <th scope="col">S.NO.</th>
          <th scope="col">NAME</th>
          <th scope="col">MOB.NO.</th>
          <th scope="col">EMAIL</th>
          <th scope="col">MESSAGE</th>
        </tr>        
</thead>
          <tbody>
          
          <?php
          $qr="SELECT * FROM `contactus`";
          $gres=mysqli_query($con,$qr);
          while($row=mysqli_fetch_array($gres))
          {
           ?>
          
          
           <tr>
           
          <td><?php echo $row['id']; ?></td>
          <td><?php echo $row['name']; ?></td>
          <td><?php echo $row['email']; ?></td>
            <td><?php echo $row['phnno']; ?></td>
          <td><?php echo $row['message']; ?></td>
        </tr>
              <?php
          }
              ?>
          </tbody>
        </table>
            <br><br>
                        <strong><p style="margin-left:400px; font-size:120%;">From User Inbox...</p></strong>
            <br>
             <table id="customers" style="width:70%; margin-left:390px; border:2px;">
       <thead> <tr>
            <th scope="col">S.NO.</th>
            <th scope="col">USER ROLL NO.</th>
           <th scope="col">ADMIN NAME</th>
          <th scope="col">MESSAGE</th>
        </tr>        
</thead>
          <tbody>
          
          <?php
          $qr="SELECT * FROM `usermessage`";
          $gres=mysqli_query($con,$qr);
          while($row=mysqli_fetch_array($gres))
          {
           ?>
          
          
           <tr>
           
          <td><?php echo $row['id']; ?></td>
          <td><?php echo $row['roll']; ?></td>
          <td><?php echo $row['name']; ?></td>
          <td><?php echo $row['message']; ?></td>
        </tr>
              <?php
          }
              ?>
          </tbody>
        </table>
            <br>
            <br>
        <button onclick=window.open("adminreply1.php","_self") style="margin-left: 800px;">reply</button>
        

</body>
</html>
