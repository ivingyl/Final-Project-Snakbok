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
	       $qry1="SELECT * FROM `compinfo` WHERE `compid` = $uroll";
           $result=mysqli_query($con,$qry1);
           $row = mysqli_num_rows($result);
           if($row == 0){
               $qry = "INSERT INTO `compinfo`(`compid`, `name`, `website`, `package`, `address`, `technology`, `procedure`, `description`) VALUES ('$uroll','$username','$mobile','$gender','$email','$password','$course','$branch')";
                $run = mysqli_query($con, $qry);
                ?>
                    <script type="text/javascript">
					   alert('Company Added');
                        window.open('admin_compinfo.php','_self');
</script>
                <?php
		
            }
        
            else{
                ?>
                     <script type="text/javascript">
					   alert('Already have a Company');
                        window.open('admin_compinfo.php','_self');
				      </script>
                <?php
                }
   	
	}
?>
