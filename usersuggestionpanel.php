<?php 
include('dbcon.php');

if(!isset($_SESSION['user'])){
header('location:index.php');	
}
?>
<!doctype>
<html>
<head>
    <link href="usersuggestionpanel.css" rel="stylesheet" type="text/css">
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
                  <div class="hov"><li><a href="userchatbox.php">QUIZ</a></li></div>
                  <div class="hov"><li><a href="usercompinfopanel.php">COMPANY INFORMATION</a></li></div>
                  <div class="hov"><li><a href="userinbox.php">INBOX</a></li></div>
                  <div class="hov active"><li><a href="">SUGGESTIONS</a></li></div>
                </div>
                </div>
                <br>
                <div class="" style="margin-left:800px; font-size:200%; margin-top: 130px; font-family: 'Fredoka One', cursive;">
                  <h3>REFERENCES</h3>
                </div>
              <br>
                <div class="container" methord="post" enctype="text/plain" style="overflow:scroll;">
                    
                  <form action="usersuggestionpanel.php" method="post">
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
                <td><button id="button" type="submit" name="submit">Search</button></td>
                        </tr></table>

                </form>
                    <br><br><br>
                      <table id="customers" style="width:70%; margin-left:130px; border:2px;">
       <thead> <tr>
            <th scope="col">S.NO.</th>
          <th scope="col">SUBJECT</th>
          <th scope="col">BOOKS</th>
          <th scope="col">WEBSITES</th>
          <th scope="col">YOUTUBE CHANNELS </th>
          <th scope="col">FACULTY</th>
        </tr>        
        </thead>
        <tbody>
        <?php $count=0;?>
        <?php
              if(!isset($_POST['submit'])){
          
            
          $qr="SELECT * FROM `usersuggestion`";
          $gres=mysqli_query($con,$qr);
          while($row=mysqli_fetch_array($gres))
          {
           ?>
          <?php
              $count++;
              ?>
          
           <tr>
            <td scope="row"><?php echo $count; ?></td>
          <td><?php echo $row['sub']; ?></td>
          <td><?php echo $row['book']; ?></td>
          <td><?php echo $row['website']; ?></td>
            <td><?php echo $row['utube']; ?></td>
          <td><?php echo $row['faculty']; ?></td>
          </tr>
              <?php
          }
                     ?>
          
    <?php 
              }
                          
               if(isset($_POST['submit'])){
                            $sub=$_POST['subject'];
                            $qr="SELECT * FROM `usersuggestion`";
          if($sub!=""):
                $qr ="select * from `usersuggestion` where `sub`='$sub'";
								
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
          <td><?php echo $row['sub']; ?></td>
          <td><?php echo $row['book']; ?></td>
          <td><?php echo $row['website']; ?></td>
            <td><?php echo $row['utube']; ?></td>
          <td><?php echo $row['faculty']; ?></td>
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
