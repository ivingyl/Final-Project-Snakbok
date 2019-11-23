<?php 
include('login.php');

if(!isset($_SESSION['user'])){
header('location:index.php');	
}
?>
<!doctype>
<html>
<head>
  <link href="usercompinfopanel.css" rel="stylesheet" type="text/css">
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
                  <div class="hov active"><li><a href="">COMPANY INFORMATION</a></li></div>
                  <div class="hov"><li><a href="userinbox.php">INBOX</a></li></div>
                  <div class="hov"><li><a href="usersuggestionpanel.php">SUGGESTIONS</a></li></div>
                </div>
                </div>
                <br>
                <div class="" style="margin-left:700px; font-size:200%; margin-top: 150px; font-family: 'Fredoka One', cursive;">
                  <h3>COMPANIES INFORMATION </h3>
                </div>
              <br>


                  <table id="customers" style="width:70%; margin-left:390px; margin-top: 30px;">
                         <thead>             
                      <tr>
                                        <th>S.NO.</th>
                                          <th>COMPANY NAME</th>
                                        <th>TECHNOLOGY NEEDED</th>
                                        <th>CLICK FOR DESCRIPTION</th>
                                      </tr>
                      </thead>
                      <tbody>
                      <?php
          $qr="SELECT * FROM `compinfo`";
          $gres=mysqli_query($con,$qr);
          while($row=mysqli_fetch_array($gres))
          {
           ?>
          
          
           <tr>
           
          <td><?php echo $row['id']; ?></td>
          <td><?php echo $row['name']; ?></td>
                <td><?php echo $row['technology']; ?></td>
               <td style="padding-left:9em;">
               <a  href="compmodal.php?f_id=<?php echo $row['id']; ?>" target="_self"><button id="desk">view</button></a>
                    </td>
          
        </tr>
              <?php
          }
              ?>
          </tbody>
                      
                         

                                    </table>


</body>
</html>
