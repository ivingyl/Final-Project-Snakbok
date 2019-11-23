<?php 
include('dbcon.php');

if(!isset($_SESSION['user'])){
header('location:index.php');	
}


?>

<!doctype>
<html>

<head>
  <link href="admin.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Kalam|Righteous&display=swap" rel="stylesheet">
</head>

<body>
  <header>
    <div class="row">
      <div class="logo">
        <img src="images/logo.png" style="margin:20px; border-radius: auto; width: auto;">
      </div>
      <div class="a1">
        <ul>
            <li><strong><?php echo $_SESSION['user1'];?></strong></li>
          <li><a href="logout.php"><button type="button" id="btn1" class="cancelbtn">Logout</button></a></li>
        </ul>
        </div>
      </div>
    </header>
    <div class="split left">
              <div class="centered">
                <img src="images/faculty1.png" alt="user">
               
                <h2 style="font-family: 'Kalam', cursive;">Welcome <?php echo $_SESSION['user2'];?></h2>
                
                <br>
                <br>
                <ul class="side-nav">
                  <div class="hov">
                    <li><a href="">HOME</a></li>
                  </div>
                  <div class="hov">
                    <li><a href="admin_chatbox.php">QUIZ</a></li>
                  </div>
                  <div class="hov">
                    <li><a href="admin_compinfo.php">COMPANY INFORMATION</a></li>
                  </div>
                  <div class="hov">
                    <li><a href="admin_feedbackpanel.php">EXPERIENCE</a></li>
                  </div>
                  <div class="hov">
                    <li><a href="admin_messages.php<?php echo "?id=1"; ?>">MESSAGES</a></li>
                  </div>
                  </ul>
                    </div>
      </div>
      <br>
      <div class="" style="margin-left:850px; font-size:150%;">
        <h3 style="font-family: 'Righteous', cursive;">HOME</h3>
      </div>

      <table>
        <tr>
          <td><button class="button" style="margin-left:570px" onclick=window.open("admin_sign_up.php","_self")>ADD USER</button></td>
          <td><button class="button" onclick=window.open("delete_pop_up.php","_self")>DELETE USER</button></td>
          <td><button class="button" onclick=window.open("updateinitialpopup.php","_self")>UPDATE USER INFO</button></td>
        </tr>
      </table>
      <br>
      <table style="width:50%; margin-left:390px;">
        <tr>
          <td style="font-size: 30px;"><strong>List Of Users</strong></td>
          <td></td>
          </tr>
      </table>
      <form action="admin.php" method="post">   
        <table id="z1" style= "width:40%; margin-left: 480px; margin-top: 20px;">
        <tr>
            <td><input type="text" id="" name="uniroll" placeholder="Enter University roll no."></td>
            <td><input type="text" id="" name="uname" placeholder="Enter Name"></td>
            <td><input type="text" id="" name="course" placeholder="Enter Course"></td>
            <td><button type="submit" name="submit">Search</button></td>
        </tr>
    </table>
        </form>
        
      <table id="customers" style="width:70%; margin-left:390px; font-family:Tahoma">
       <thead> 
           <tr>
            <th scope="col">S.NO.</th>
          <th scope="col">UNIV. ROLL NO</th>
          <th scope="col">USERNAME</th>
          <th scope="col">MOB.NO.</th>
            <th scope="col">GENDER</th>
          <th scope="col">EMAIL</th>
          <th scope="col">PASSWORD</th>
          <th scope="col">COURSE</th>
          <th scope="col">BRANCH</th>
          <th scope="col">YEAR</th>
        </tr>        
          </thead>
          <tbody>
          <?php $count=0;?>
          <?php
              if(!isset($_POST['submit'])){
          
            
          $qr="SELECT * FROM `signup`";
          $gres=mysqli_query($con,$qr);
          while($row=mysqli_fetch_array($gres))
          {
           ?>
          <?php
              $count++;
              ?>
          
           <tr>
            <td scope="row"><?php echo $count; ?></td>
          <td><?php echo $row['uniroll']; ?></td>
          <td><?php echo $row['username']; ?></td>
          <td><?php echo $row['mobile']; ?></td>
            <td><?php echo $row['gender']; ?></td>
          <td><?php echo $row['email']; ?></td>
          <td><?php echo $row['password']; ?></td>
          <td><?php echo $row['course']; ?></td>
          <td><?php echo $row['branch']; ?></td>
          <td><?php echo $row['year']; ?></td>
        </tr>
              <?php
          }
                     ?>
          
    <?php 
              }
              if(isset($_POST['submit'])){
          
          
                  
                                    $uniroll=$_POST['uniroll'];
								   $sname=$_POST['uname'];
								  $course=$_POST['course'];
            $qr="SELECT * FROM `signup`";
          if($uniroll!=""||$sname!=""|| $course!=""):
                  $qr ="select * from `signup` where `username`='$sname' or `course`='$course' or `uniroll`='$uniroll'";
								
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
            <td scope="row"><?php echo $count; ?></td>
          <td><?php echo $row['uniroll']; ?></td>
          <td><?php echo $row['username']; ?></td>
          <td><?php echo $row['mobile']; ?></td>
            <td><?php echo $row['gender']; ?></td>
          <td><?php echo $row['email']; ?></td>
          <td><?php echo $row['password']; ?></td>
          <td><?php echo $row['course']; ?></td>
          <td><?php echo $row['branch']; ?></td>
          <td><?php echo $row['year']; ?></td>
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
        
      
        
        

    
</body>
    
</html>
