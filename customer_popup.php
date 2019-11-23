<?php
include('login.php');
if(!isset($_SESSION['user'])){
header('location:index.php');	
}
?>

<!doctype>
<html>
<head>
<title>customer</title>
<link href="customer_popup.css" rel="stylesheet" type="text/css">
<link href="https://fonts.googleapis.com/css?family=Mountains+of+Christmas&display=swap" rel="stylesheet">
    
</head>
<body>
    <div class="r1" id="id01">
        <h1 class="s1">WELCOME TO</h1>
        <img src="images/logo.png" class="avatar">
        <button type="button" onclick=window.open("services_popup.php","_self")>START</button>
    </div>
    <script>
// Get the modal
var modal = document.getElementById('id01');

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
    if (event.target == modal) {
        modal.style.display = "none";
    }
}
</script>
</body>
</html>