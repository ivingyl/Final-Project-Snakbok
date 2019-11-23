<?php 
include('dbcon.php');
if(!isset($_SESSION['user'])){
header('location:index.php');	
}
?>
<!doctype>
<html>
<head>
  <link href="admin_compinfo.css" rel="stylesheet" type="text/css">
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
                    <div class="hov"><li><a href="">COMPANY INFORMATION</a></li></div>
                    <div class="hov"><li><a href="admin_feedbackpanel.php">EXPERIENCE</a></li></div>
                    <div class="hov"><li><a href="admin_messages.php">MESSAGES</a></li></div>
                </div>
                </div>
                <br>
                <div class="" style="margin-left:800px; font-size:150%;">
                  <h3 style="font-family: 'Righteous', cursive;">COMAPNY INFO.</h3>
                </div>
              <table>
                <tr>
                  <td><button class="button" type="button" name="new" style="margin-left:600px;" onclick=window.open("add_company_info.php","_self")>Add New Company</button></td>
                  <td><button class="button" type="button" name="update"  onclick=window.open("updatecomppopup1.php","_self")>Update Company Info</button></td>
                  <td><button class="button" type="button" name="delete_comp" onclick=window.open("company_delete_popup.php","_self")>Delete Company Info</button></td>
                  </tr>
              </table>


          
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
               <a  href="compmodal1.php?f_id=<?php echo $row['id']; ?>" target="_self"><button id="desk">view</button></a>
                    </td>
          
        </tr>
              <?php
          }
              ?>
          </tbody>
                      
                         

                                    </table>




</body>
</html>
