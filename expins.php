<?php
include('dbcon.php');
$a=$_SESSION['user'];
$b=$_SESSION['user3'];
	
	  if(isset($_POST['submit'])){
		   $subject = $_POST['sub'];
           $name = $_POST['info'];
	       $exp = $_POST['exp'];
	      $qry="INSERT INTO `experience`(`name`, `rollno`, `compname`, `subject`, `feedback`) VALUES ('$b','$a','$name','$subject','$exp')";
          
	
		      $run = mysqli_query($con, $qry);
                ?>
                    <script type="text/javascript">
					   alert('Submitted');
                        window.open('newcustomer.php','_self');
</script>
                <?php
		
            }
        
            else{
                ?>
                     <script type="text/javascript">
					   alert('Not Submitted');
                        window.open('newcustomer.php','_self');
				      </script>
                <?php
                }
   	
	
?>