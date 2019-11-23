<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://fonts.googleapis.com/css?family=Pacifico&display=swap" rel="stylesheet">
<style>
    
.close {
  position: absolute;
  right: 25px;
  top: 0;
  color: blue;
  font-size: 35px;
  font-weight: bold;
}

.close:hover,
.close:focus {
  color: red;
  cursor: pointer;
}
.modal
    {
        display:block;
        position: absolute;
        z-index:1;
        left:0;
        top:0;
        width:100%;
        height:100%
        overflow:auto;
        background-color:rgb(0,0,0);
        background-color:rgba(0,0,0,0.4);
        padding-top:60px;
    }
span.psw {
  float: right;
  padding-top: 16px;
}

.imgcontainer {
  text-align: center;
  margin: 24px 325px 12px 12px;
  position: relative;
}

body {
  font-family: Arial, Helvetica, sans-serif;
  background-color: black;
    

}

input[type="radio"]:checked + label{
  background-color: #58BA83;
}

* {
  box-sizing: border-box;
}

/* Add padding to containers */
.container {
  padding: 16px;
  background-color: white;
    width: 50%;
    position: absolute;
    left: 28%;
}

/* Full-width input fields */
input[type=text], input[type=password] {
  width: 100%;
  padding: 15px;
  margin: 5px 0 22px 0;
  display: inline-block;
  border: none;
  background: #f1f1f1;
}

input[type=text]:focus, input[type=password]:focus {
  background-color: #ddd;
  outline: none;
}


/* Overwrite default styles of hr */
hr {
  border: 1px solid #f1f1f1;
  margin-bottom: 25px;
}

/* Set a style for the submit button */
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

.registerbtn:hover {
  opacity: 1;
}

/* Add a blue text color to links */
a {
  color: dodgerblue;
}

/* Set a grey background color and center the text of the "sign in" section */
.signin {
  background-color: #f1f1f1;
  text-align: center;
}
    select { 
                appearance: none; 
                outline: 0; 
                background: black; 
                /*background-image: none; */
                /*width: 100%;*/ 
                height: 100%; 
                color: white; 
                cursor: pointer; 
                border:1px solid white; 
                border-radius:3px; 
            } 
            .select { 
                /*position: relative; */
                display: block; 
                width: 15em; 
                height: 2em; 
                line-height: 3; 
                overflow: hidden; 
                border-radius: .25em; 
                padding-bottom:10px; 
                  
            } 
    
</style>
</head>
<body>

<form action="register.php" method="post">
  <div id="id05" class="modal">
  <div class="imgcontainer">
    <span onclick=window.open("index.php","_self") class="close" title="Close Modal">&times;</span>
  </div>
     
         <font color="white"><center><h1 style="font-family: 'Pacifico', cursive; margin-left:100px;">Register</h1></center></font>
      
  <div class="container">
    
    <p>Please fill in this form to create an account.</p>
    <hr>

    <label for="univroll"><b>University Roll No.</b></label>
    <input type="text" placeholder="University Roll No." name="univroll" required>
    <br>
    <br>
    <label for="uname"><b>Name</b></label>
    <input type="text" placeholder="Name" name="uname" required>
    <br>
    <br>
    <label for="mobno"><b>Mobile Number</b></label>
    <input type="text" placeholder="Mobile Number" name="mobno" required>
    <br>
    <br>
    <label for="gender"><b>Gender</b></label>
    <table>
    
      <tr>
        <td><input type="radio" name="gender" id="male" value="male"></td>
        <td><label for="male">Male</label></td>
        <td><input type="radio" name="gender" id="female" value="female"></td>
         <td><label for="female">Female</label></td>
         <td><input type="radio" name="gender" id="other" value="other"></td>
        <td><label for="other">Other</label></td></tr>
    
  </table>
  <br>
  <br>
    <label for="email"><b>Email</b></label>
    <input type="text" placeholder="Enter Email" name="email" required>

    <label for="psw"><b>Password</b></label>
    <input type="password" placeholder="Enter Password" name="psw" required>




  <p>
               <strong><label>Choose Course</label></strong>
               <select id = "myList" name="course">
                 <option value = "B.TECH">B.Tech</option>
                 <option value = "BBA">BBA</option>
                 <option value = "BCA">BCA</option>
                 <option value = "B.Sc">B.Sc</option>
                   <option value = "DIPLOMA ENGINEERING">Diploma Engineering</option>
                   <option value = "BIOTECH">Biotech</option>
                   <option value = "M.TECH">M.Tech</option>
                   <option value = "MBA">MBA</option>
                   <option value = "MCA">MCA</option>
                  </select>
            </p>
        <br>     <p>
                 <strong><label>Choose Branch</label></strong>
                 <select id = "mylist" name="branch">
                   <option value = "CS">CS</option>
                     <option value = "EC">EC</option>
                      <option value = "EE">EE</option>
                       <option value = "EN">EN</option>
                          <option value ="ME">ME</option>
                          <option value = "ES">ES</option>
                          <option value = "Civil">Civil</option>

                 </select>
             </p>
          <br>   <p>
                 <strong><label> Choose Year</label></strong>
             <select id="mylist" name="year">
                   <option value = "1">1</option>
                      <option value = "2">2</option>
                             <option value = "3">3</option>
                         <option value = "4">4</option>




                 </select>
             </p>




    <button type="submit" class="registerbtn" name="submit">Register</button>
  </div>

  <div class="container signin">
    <p>Already have an account? <a href=index.php>Sign in</a>.</p>
  </div>
</div>
</form>
<script>
var modal=document.getElementById('id05');
window.onclick=function(event){
  if (event.target==modal){
    modal.style.display="none";
  }
}
</script>
</body>
</html>
