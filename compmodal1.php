<?php 
include('dbcon.php');
if(!isset($_SESSION['user'])){
header('location:index.php');	
}
?>
<!doctype>
<html>
<head>
    <link href="https://fonts.googleapis.com/css?family=Acme|Roboto+Mono&display=swap" rel="stylesheet">
<title>Company Description</title>
<style>
    span.psw {
  float: right;
  padding-top: 16px;
}
.close {
  position: absolute;
  right: 25px;
  top: 0;
  color: #fff;
  font-size: 35px;
  font-weight: bold;
}

.close:hover,
.close:focus {
  color: red;
  cursor: pointer;
}
@media screen and (max-width: 300px) {
  span.psw {
     display: block;
     float: none;
  }
}
    body
{
padding:0;
margin:0;
font-family: "Roboto",sans-serif;

}
.updatebox
{
    width:500px;
    height: 600px;
    background: #000;
    color: black;
    top:50%;
    left:50%;
    position:absolute;
    transform: translate(-50%,-50%);
    box-sizing: border-box;
    padding: 70px 30px;
}
h1
{
    margin:0;
    padding:0 0 10px;
    text-align:center;
    font-size:22px;
    font-family: 'Acme', sans-serif;
    color:white;
}
.avatar
{
    height:100px;
    width:100px;
    border-radius: 50%;
    position:absolute;
    top:-50px;
    left: 40%;
}
.updatebox p
{
    color:white;
    margin:1;
    padding:0;
    font-weight: bold;
    font-family: 'Roboto Mono', monospace;
}
    
</style>
<body>
    <div class="updatebox" >
        <span onclick=onclick=window.open("admin_compinfo.php","_self") class="close" title="Close Modal">&times;</span>
        <img src="images/faculty1.png" class="avatar">
        <h1>Description</h1>
       
                            <?php 
        $a=$_REQUEST["f_id"];
$displayQuery="SELECT * FROM `compinfo` WHERE `id`=$a";
$result=mysqli_query($con,$displayQuery);
if($result){
	while($row=mysqli_fetch_array($result)){
		?>
		<br>
        
        
        <p><strong>Company ID: </strong><?php echo $row['compid'];?></p>
		<br>
                    
		<p><strong>Company Name: </strong><?php echo $row['name'];?></p>
		<br>
        	<p><strong>Company Description: </strong><?php echo $row['description'];?></p>
		<br>
        <p><strong>Company Website: </strong><?php echo $row['website'];?></p>
	<br>
                    
		<p><strong>Technology Needed: </strong><?php echo $row['technology'];?></p>
		<br>
        <p><strong>Procedure: </strong><?php echo $row['procedure'];?></p>
<br>
                    
		<p><strong>Package: </strong><?php echo $row['package'];?></p>
		<br>
        <p><strong>Company Address: </strong><?php echo $row['address'];?></p>
	
                    
    		
    <?php    
    }
}?>
		
		
	 
    </div>
    
</body>
</head>
</html>