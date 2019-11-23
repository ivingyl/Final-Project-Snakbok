<?php
    include('dbcon.php');
    
    
    if(isset($_POST['submit'])){
		$login = $_POST['who'];
		$username = $_POST['username'];
		$password = $_POST['password'];
        if($login=='admin')
        {    
        $qry = "SELECT * FROM `loginadmin` WHERE `username`= '$username' AND `password`='$password'";
		$run = mysqli_query($con, $qry);
		$row=mysqli_fetch_array($run);
        $ro = mysqli_num_rows($run);
            if($ro == 1){
        $userid=$row['id'];
		$_SESSION['user']=$userid;
       $_SESSION['user1']=$row['username'];
       $_SESSION['user2']=$row['name'];
       
       header('location:admin.php');
            }
            else{
                ?>
                    <script type="text/javascript">
					   alert('Account not found.');
                        window.open('index.php','_self');
                    </script>
<?php
            }
        }
        
        else
        {
           $qry = "SELECT * FROM `signup` WHERE `username`= '$username' AND `password`='$password'";
		$run = mysqli_query($con, $qry);
		$row=mysqli_fetch_array($run);
            $ro = mysqli_num_rows($run);
            if($ro == 1){

        $userid=$row['uniroll'];
		$_SESSION['user']=$userid;
        $_SESSION['user3']=$row['username'];
            
       header('location:customer_popup.php');
        }
            else{
                ?>
                <script type="text/javascript">
					   alert('Account not found.');
                        window.open('index.php','_self');
                    </script>
<?php
            }
            
    }
    }
?>