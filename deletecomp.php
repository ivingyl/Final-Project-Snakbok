<?php
include('dbcon.php');
	
	  if(isset($_POST['submit'])){
		   $uroll = $_POST['compname'];
           $qry1="DELETE FROM `compinfo` WHERE `name` = '$uroll'";
           $result=mysqli_query($con,$qry1);
           $row = mysqli_num_rows($result);
           if($row == 0){

                ?>
                    <script type="text/javascript">
					   alert('Company Deleted Successfully');
                        window.open('admin_compinfo.php','_self');
</script>
                <?php
		
            }
        
            else{
                ?>
                     <script type="text/javascript">
					   alert('Company Not Found');
                        window.open('admin_compinfo.php','_self');
				      </script>
                <?php
                }
   	
	}
?>