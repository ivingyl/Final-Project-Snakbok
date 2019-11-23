<?php
    include('dbcon.php');
    
    
    if(isset($_POST['submit'])){
		$username = $_POST['uname'];
		$email = $_POST['email'];
            
        $qry = "SELECT * FROM `signup` WHERE `username`= '$username' AND `email`='$email'";
		$run = mysqli_query($con, $qry);
		$row=mysqli_fetch_array($run);
        $ab=$row['password'];
        $ro = mysqli_num_rows($run);
           if($ro == 1){
         ?>

                    <script type="text/javascript">
					   alert('Your Password is: <?php echo $ab ?>');
                        window.open('index.php','_self');
</script>
                <?php
		
        
    
    }
else
{
         ?>
                    <script type="text/javascript">
					   alert('Account Not Found');
                        window.open('index.php','_self');
</script>
                <?php
		
}
    }
?>