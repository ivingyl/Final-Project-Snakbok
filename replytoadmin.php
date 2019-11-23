<?php
include('dbcon.php');
if(isset($_POST['submit'])){
    $ab=$_SESSION['user'];
    $name=$_POST['name'];
    $message=$_POST['message'];
    $qry="INSERT INTO `usermessage`(`roll`,`name`, `message`) VALUES ('$ab','$name','$message')";
    $run = mysqli_query($con, $qry);
                ?>
                    <script type="text/javascript">
					   alert('Message sent.');
                        window.open('userinbox.php','_self');
                    </script>
                <?php
		
            }
else{
    ?>

                    <script type="text/javascript">
					   alert('Message failed.');
                        window.open('userinbox.php','_self');
                    </script>
<?php

}


?>