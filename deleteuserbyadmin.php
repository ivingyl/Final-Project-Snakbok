<?php
include('dbcon.php');
	
	  if(isset($_POST['submit'])){
		   $uroll = $_POST['uid'];
           $qry1="DELETE FROM `signup` WHERE uniroll = $uroll";
           $result=mysqli_query($con,$qry1);
           $row = mysqli_num_rows($result);
           if($row == 0){

                ?>
                    <script type="text/javascript">
					   alert('Account Deleted Successfully');
                        window.open('admin.php','_self');
</script>
                <?php
		
            }
        
            else{
                ?>
                     <script type="text/javascript">
					   alert('Account Not Found');
                        window.open('admin.php','_self');
				      </script>
                <?php
                }
   	
	}
?>