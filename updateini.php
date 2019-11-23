
<?php
   
include('dbcon.php');
	
	  if(isset($_POST['submit'])){
		   $uroll = $_POST['uid'];
           $qry1="SELECT * FROM `signup` WHERE uniroll = $uroll";
           $result=mysqli_query($con,$qry1);
           $a=mysqli_fetch_array($result);
		  $b=$a['uniroll'];
          $_SESSION['vin1']=$b;
              
          $_SESSION['vin2']=$a['username'];
          $_SESSION['vin3']=$a['mobile'];
          $_SESSION['vin4']=$a['gender'];
          $_SESSION['vin5']=$a['email'];
          $_SESSION['vin6']=$a['password'];
          $_SESSION['vin7']=$a['course'];
          $_SESSION['vin8']=$a['branch'];
          $_SESSION['vin9']=$a['year'];
           $row = mysqli_num_rows($result);
           if($row == 1){

                ?>
                    <script type="text/javascript">
                        window.open('update_pop_up.php','_self');
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