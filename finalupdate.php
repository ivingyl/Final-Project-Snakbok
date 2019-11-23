<?php
include('dbcon.php');
	
	  if(isset($_POST['submit'])){
		   $uroll = $_POST['cid'];
           $username = $_POST['cname'];
	       $mobile = $_POST['cemail'];
	       $gender = $_POST['cpackage'];
	       $email = $_POST['caddress'];
	       $password = $_POST['ctech'];
	       $course = $_POST['cprocedure'];
	       $branch = $_POST['cdescription'];
           $qry1="SELECT * FROM `compinfo` WHERE `compid` = '$uroll'";
           $result=mysqli_query($con,$qry1);
           $row = mysqli_num_rows($result);
           if($row == 1){

		     
            $qry = "UPDATE `compinfo` SET `name`='$username',`website`='$mobile',`package`='$gender',`address`='$email',`technology`='$password',`procedure`='$course',`description`='$branch' WHERE `compid` = '$uroll'";
		      $run = mysqli_query($con, $qry);
                ?>
                    <script type="text/javascript">
					   alert('Company Info Updated Successfully.');
                        window.open('admin_compinfo.php','_self');
</script>
                <?php
		
            }
        
            else{
                ?>
                     <script type="text/javascript">
					   alert('Company Already exist.');
                        window.open('admin_compinfo.php','_self');
				      </script>
                <?php
                }
   	
	}
?>