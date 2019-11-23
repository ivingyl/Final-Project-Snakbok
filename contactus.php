<?php
include('dbcon.php');
	
	  if(isset($_POST['sett'])){
		  
           $username = $_POST['uname'];
	       $email = $_POST['email']; 
           $phone = $_POST['phone'];
	       $message = $_POST['message'];
           $qry = "INSERT INTO `contactus`(`name`, `email`, `phnno`, `message`) VALUES ('$username','$email','$phone','$message')";
	
		      $run = mysqli_query($con, $qry);
                ?>
                    <script type="text/javascript">
					   alert('Submitted');
                        window.open('index.php','_self');
</script>
                <?php
		
            }
        ?>
          