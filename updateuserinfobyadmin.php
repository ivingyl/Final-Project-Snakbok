<?php
include('dbcon.php');
	
	  if(isset($_POST['submit'])){
		   $uroll = $_POST['univroll'];
           $username = $_POST['uname'];
	       $mobile = $_POST['mobno'];
	       $gender = $_POST['gender'];
	       $email = $_POST['email'];
	       $password = $_POST['psw'];
	       $course = $_POST['course'];
	       $branch = $_POST['branch'];
	       $year = $_POST['year'];
           $qry1="SELECT * FROM `signup` WHERE uniroll = $uroll";
           $result=mysqli_query($con,$qry1);
           $row = mysqli_num_rows($result);
           if($row == 1){

		     
            $qry = "UPDATE `signup` SET `username`='$username',`mobile`='$mobile',`gender`='$gender',`email`='$email',`password`='$password',`course`='$course',`branch`='$branch',`year`='$year' WHERE uniroll=$uroll";
		      $run = mysqli_query($con, $qry);
                ?>
                    <script type="text/javascript">
					   alert('Account Updated Successfully.');
                        window.open('admin.php','_self');
</script>
                <?php
		
            }
        
            else{
                ?>
                     <script type="text/javascript">
					   alert('Already have a account');
                        window.open('admin.php','_self');
				      </script>
                <?php
                }
   	
	}
?>