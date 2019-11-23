<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width" , initial-scale="1">
<link href="https://fonts.googleapis.com/css?family=Neuton|Ma+Shan+Zheng|Permanent+Marker|Sacramento&display=swap" rel="stylesheet">
  <link rel="icon" href="images/scholarship.png" >
  <title>SnakBok</title>
  <style media="screen">

    html {
      box-sizing: border-box;
    }

    .container22 {
      padding: 0 16px;
    }



    .container33 {
  border-radius: 5px;
  width:50%;
  right: 25%;

  position: absolute;
  padding: 20px;
  background-color: powderblue;
}


    .container22::after, .row::after {
      content: "";
      clear: both;
      display: table;
    }

    *, *:before, *:after {
      box-sizing: inherit;
    }

    .column {
      float: left;
      width: 25%;
      margin-bottom: 16px;
      padding: 0 20px;
      margin-left:350px;
      margin-right: -250px;
    }

    @media screen and (max-width: 650px) {
      .column {
        width: 100%;
        display: block;
      }
    }

    .card {
      box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
    }

    .container12 {
      padding: 0 16px;
    }

    .column22 {
      float: left;
      width: 25%;
      margin-bottom: 16px;
      padding: 0 8px;
    }

    .container12::after, .row::after {
      content: "";
      clear: both;
      display: table;
    }

    .title {
      color: grey;
    }

    .button {
      border: none;
      outline: 0;
      display: inline-block;
      padding: 8px;
      color: white;
      background-color: #000;
      text-align: center;
      cursor: pointer;
      width: 100%;
    }

    .button:hover {
      background-color: #555;
    }


    . {
      margin-top: -40px;
    }

    .signin {
      background-color: #F1F1F1;
      text-align: center;
    }

    * {
      box-sizing: border-box;
    }

    .search input[type=text] {
      width: 400px;
      height: 35px;
      margin-left: 500px;
      border-radius: 4px;
      border-color: black;
      margin-top: -40px;
    }

    .search button[type=submit] {
      width: 40px;
      height: 35px;
      border-radius: 4px;
      margin-top: -40px;
    }

    input[type=text],
    input[type=password] {
      width: 100%;
      padding: 12px 20px;
      margin: 8px 0;
      display: inline-block;
      border: 1px solid #CCC;
      box-sizing: border-box;
    }

    .cancelbtn {
      width: auto;
      padding: 10px 18px;
      background-color: #F44336;
    }

    .res {

      border: none;
      outline: 0;
      display: inline-block;

      color: red;
      background-color: #F44336;
      text-align: center;
      cursor: pointer;
      width: auto;
    }

    input[type=text]:focus,
    input[type=password]:focus {
      background-color: #DDD;
      outline: none;
    }

    hr {
      border: 1px solid #F1F1F1;
      margin-bottom: 25px;
    }


    .registerbtn:hover {
      opacity: 1;
    }

    .registerbtn {
      background-color: #4CAF50;
      color: white;
      padding: 16px 20px;
      margin: 8px 0;
      border: none;
      cursor: pointer;
      width: 100%;
      opacity: 0.9;
    }

    input[type=text], input[type=email], select, textarea {
      width: 100%;
      padding: 12px;
      border: 1px solid #ccc;
      border-radius: 4px;
      box-sizing: border-box;
      margin-top: 6px;
      margin-bottom: 16px;
      resize: vertical;
    }

    input[type=submit] {
      background-color: #4CAF50;
      color: white;
      padding: 12px 20px;
      border: none;
      border-radius: 4px;
      cursor: pointer;
    }

    input[type=submit]:hover {
      background-color: #45a049;
    }


    .imgcontainer {
      text-align: center;
      margin: 24px 0 12px 0;
      position: relative;
      z-index: 20;
    }

    img.avatar {
      width: 30%;
      border-radius: 50%;
    }

    .container {
      padding: 16px;
      background-color: white;
    }

    span.psw {
      float: right;
      padding-top: 16px;
    }

    .modal {
      display: none;
      position: fixed;
      z-index: 1;
      left: 0;
      top: 0;
      width: 100%;
      height: 100%;
      overflow: auto;
      background-color: rgb(0, 0, 0, .2);
      background-color: rgba(0, 0, 0, 0.4);
      padding-top: 60px;
    }




    .modal-content {
      background-color: #FEFEFE;
      margin: 5% auto 15% auto;
      border: 1px solid #888;
      width: 40%;
      height: 50%;
    }

    .two-third {
      float:left;
      width:50%;
      margin-top:0px;
        
    }

  .p1 {
      font-family: 'Neuton', serif;
      font-size:28px;
      text-align:justify;
      margin-left:370px;
      margin-top:0px;
    }

    a {
      color: dodgerblue;
    }

    .close {
      position: absolute;
      right: 25px;
      top: 0;
      color: #000;
      font-size: 35px;
      font-weight: bold;
    }

    .close:hover,
    .close:focus {
      color: red;
      cursor: pointer;
    }

    .animate {
      -webkit-animation: animatezoom 0.6s;
      animation: animatezoom 0.6s
    }
.v1
                 {
                 font-family: 'Permanent Marker', cursive;
                font-size:20px;
                 }
    .h {
      text-decoration: none;
      color: black;
      margin-left: 3px;
      font-family: "Sacramento";
      font-size: 70px;
      /* text-shadow: 3px 2px black; */
    }

    body {
      margin: 0;
      height: 800px;
      margin-left: 0;
      margin-right: 0;
      background-position: center;
      background-repeat: no-repeat;
      background-size: center;
      /*background-color: lightblue;*/
      /*background-image: url("glahomepage.png");*/
      font-family: Arial, Helvetica, sans-serif;
    }

    #btn1 {
      border-radius: 0;
      margin-left: 10px;
      margin-top: -200px;
      font-size: 20px;
      width: 100px;
      font-style: normal;
      color: white;
      padding-left: 17px;
      padding-right: 30px;
      padding-top: 10px;
      padding-bottom: 9px;
      background-color: red;
      text-align: center;
      cursor: pointer;
    }



    #btn2 {
      border-radius: 0;
      margin-left: 920px;
      margin-top: -50px;
      font-size: 20px;
      width: 90px;
      font-style: normal;
      color: black;
      padding-left: 17px;
      padding-right: 30px;
      padding-top: 10px;
      padding-bottom: 9px;
      background-color: white;
      text-align: center;
      cursor: pointer;
    }

    .main {
      text-decoration: none;
      color: black;
      margin: 0 0 0 0;
      font-family: Times New Roman, Helvetica, sans-serif;
      font-size: 20px;
      text-shadow: 3px 2px red;
    }

    .text {
      font-family: "Gabriola";
    font-weight:"bold";
        font-size:20px;
               
    }
 

    ul {
      list-style-type: none;
      margin: 0;
      padding: 0;
      overflow: hidden;
      background-color: green;
    }

    li a {
      display: block;
      color: white;
      text-align: center;
      padding: 14px 16px;
      text-decoration: none;
    }

    li {
      float: left;
    }

    li a:hover {
      background-color: #111;
    }

hr {
  border-style: none;
  border-top-style:dotted;
  border-color:black;
  border-width:5px;
  width:15%;

}
.pic{
  background-image: url("images/vinn.jpg");
  background-repeat:no-repeat;
    background-size: cover;
  font-size: 22px;
}

.div1{
  background-color: powderblue;
}
  </style>
</head>

<body>

  <div class="pic">
  <div class="main">
    <table>
      <tr>
        <td><img src="images/logo.png" alt="Snakbok"></td>
        <td><button type="button" id="btn2" onclick="document.getElementById('id01').style.display='block'">Login</button></td>
        <td><button type="button" id="btn1" onclick=window.open("signup.php","_self")>SignUp</button></td>
      </tr>
    </table>
  </div>



  <div class="text">
    <ul>
      <li><a class="active" href="#home">HOME</a></li>
      <li><a href="#about">ABOUT</a></li>
      <li><a href="#services">SERVICES </a></li>
      <li><a href="#team">TEAM</a></li>
      <li><a href="#contactus">CONTACT US</a></li>
    </ul>
  </div>

  <br>

      
      
  <center class="v1"><h1>Join With Snakbok</h1></center>
 <center class="v1"><h1>For Better Future.</h1></center>
 <center class="v1"><h1>Practice Your Skills, Get Personalized Experience.</h1></center>
 <center class="v1"><h1>Hurry!!! Sign Up Now.</h1></center>
 <br>

<br>
 <br>
 </div></div>
 <div class="abtedit" id="about">
  <div class="hiv">
    <center><u><h1 class="h" style="margin-left: 13px";>About</h1></u></center>
  </div>
   <p class="two-third , p1" >Snakbok aims to provide the experience of those students who have faced the company interview and it also aims to provide a platform where they can chat with the senior person according to their interest. In addition, they will also get some more information which will help them to face interview with confidence.
  <p class="two-third , p1" >Students will get to know the answer of their queries regarding their field of interest and also get to know information about company.</p>
  <p class="two-third , p1" >Placed Senior and Faculty will give the answers to the questions asked by the students.</p>
  <br>
  <br><br><br><br><br><br>
  <br><br><br><br><br><br><br><br><br>
  <br><br><br><br><br><br><br>
</div>
<hr>
  <div id="id01" class="modal">

    <form class="modal-content animate" action="login.php" method="post">
      <div class="imgcontainer">
        <span onclick="document.getElementById('id01').style.display='none'" class="close" title="Close Modal">&times;</span>
        <img src="images/user.png" alt="Avatar" class="avatar">
      </div>
      <table>
      <tr>
          <td><input type="radio" name="who" value="admin" checked>Admin</td>

          <td><input type="radio" name="who" value="student">Student/Faculty</td>
      </tr>
    
  </table>
      <div class="container">
        <label for="username"><b>Username</b></label>
        <input type="text" placeholder="Enter Username" name="username" required>
        <br>
        <label for="password"><b>Password</b></label>
        <input type="password" placeholder="Enter Password" name="password" required>

        <button type="submit" class="registerbtn" name="submit">Login</button>

        <br>

      </div>

      <div class="container" style="background-color:#F1F1F1">
    
        <button type="reset" value="Reset" class="cancelbtn">Reset</button>

        <span class="psw"><a href="forgot.php" target="_self">Forgot password?</a></span>
      </div>
    </form>
  </div>
  <script>
    var modal = document.getElementById('id01');
    window.onclick = function(event) {
      if (event.target == modal) {
        modal.style.display = "none";
      }
    }
  </script>
  <!--Sign Up Button-->


<div class="hiv" id="services">
  <center><u><h1 class="h" style="margin-left: 13px";>Services</h1></u></center>
</div>


<div class="row">
  <table cellspacing="50">
  <tr>
<center>

  <div class="column">
    <div class="card">
      <img src="images/group.png" alt="chatbox" style="width:30%" height="30%">
      <div class="container">
        <h2>Chat-Box</h2>

        <p><button class="button"  onclick="document.getElementById('id01').style.display='block'">Click Here</button></p>
      </div>
    </div>
  </div>
  <div class="column">
    <div class="card">
      <img src="images/feedback.png" alt="experience of placement" style="width:30%" height="30%">
      <div class="container">
        <h2>Experience</h2>

        <p><button class="button"  onclick="document.getElementById('id01').style.display='block'">Click Here</button></p>
      </div>
    </div>
  </div>
<br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
  <div class="column">
    <div class="card">

      <img src="images/conference.png" alt="company info" style="width:30%" height="30%" >
      <div class="container">
        <h2>Company-Info</h2>

        <p><button class="button"  onclick="document.getElementById('id01').style.display='block'">Click Here</button></p>
      </div>
    </div>
  </div>
  <div class="column">
    <div class="card">
      <img src="images/quiz.png" alt="Quiz" style="width:30%" height="30%">
      <div class="container">
        <h2>Quiz</h2>

        <p><button class="button" onclick="document.getElementById('id01').style.display='block'">Click Here</button></p>
      </div>
    </div>
  </div>

    </tr>
  </table>
</div>
</center>
<br>
<br>
<hr>
<br>
<div class="hiv" id="team">
  <center><u><h1 class="h" style="margin-left: 13px";>Team</h1></u></center>
</div>

<div class="row">
  <div class="column22">
    <div class="card">
      <img src="images/shrey.jpg" alt="Sriyansh" style="width:100%">
      <div class="container22">
        <h2>Sriyansh Jain</h2>
        <p class="title">Founder</p>

        <p>sriyansh.jain_cs17@gla.ac.in</p>

      </div>
    </div>
  </div>

  <div class="column22">
    <div class="card">
      <img src="images/riya.jpg" alt="Riya" style="width:100%">
      <div class="container22">
        <h2>Riya Agrawal</h2>
        <p class="title">Frontend-Developer</p>

        <p>riya.agrawal_cs17@gla.ac.in</p>

      </div>
    </div>
  </div>
  <div class="column22">
    <div class="card">
      <img src="images/himanshi.jpg" alt="Himanshi" style="width:100%">
      <div class="container22">
        <h2>Himanshi Garg</h2>
        <p class="title">Designer</p>

        <p>himanshi.garg_cs17@gla.ac.in</p>

      </div>
    </div>
  </div>
  <div class="column22">
    <div class="card">
      <img src="images/vinayak.jpg" alt="Vinayak" style="width:100%">
      <div class="container22">
        <h2>Vinayak Goyal</h2>
        <p class="title">Database Manager</p>

        <p>vinayak.goyal_cs17@gla.ac.in</p>

      </div>
    </div>
  </div>
</div>
<br><br>
<hr>
<br>
<div class="hiv" id="contactus">
  <center><u><h1 class="h" style="margin-left: 13px";>Contact Us</h1></u></center>
</div>

     <div class="container33">
  <form action="contactus.php" method="post">
    <label for="uname">Name</label>
    <input type="text" id="fname" name="uname" placeholder="Your name..">
    <label for="email">E-mail</label>
    <input type="email" id="email" name="email" placeholder="E-mail">
    <label for="phone">Phone no.</label>
    <input type="text" id="phone" name="phone" placeholder="Phone no.">
    <label for="message">Message</label>
    <textarea id="message" name="message" placeholder="Write something.." style="height:200px"></textarea>

    <input type="submit" value="Submit" name="sett">
  </form>
 </div>
    
    

</body>

</html>
