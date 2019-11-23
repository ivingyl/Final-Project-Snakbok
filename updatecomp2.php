
<?php
   
include('dbcon.php');
	
	  if(isset($_POST['submit'])){
		   $uroll = $_POST['ucname'];
           $qry1="SELECT * FROM `compinfo` WHERE `name` = '$uroll'";
           $result=mysqli_query($con,$qry1);
           $a=mysqli_fetch_array($result);
		   $_SESSION['shri1']=$a['compid'];
              
          $_SESSION['shri2']=$a['name'];
          $_SESSION['shri3']=$a['website'];
          $_SESSION['shri4']=$a['package'];
          $_SESSION['shri5']=$a['address'];
          $_SESSION['shri6']=$a['technology'];
          $_SESSION['shri7']=$a['procedure'];
          $_SESSION['shri8']=$a['description'];
           $row = mysqli_num_rows($result);
           if($row == 1){

                ?>
                    <script type="text/javascript">
                        window.open('update_company_info.php','_self');
</script>
                <?php
		
            }
        
            else{
                ?>
                     <script type="text/javascript">
					   alert('Company not Found');
                        window.open('admin_compinfo.php','_self');
				      </script>
                <?php
                }
   	
	}
?>