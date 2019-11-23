<?php
include('dbcon.php');
if(isset($_POST['submit'])){
    $ab=$_SESSION['user1'];
    $name=$_POST['sub'];
    $subject=$_POST['exp'];
    $message=$_POST['info'];
    $qry="INSERT INTO `userinbox`(`userid`, `username`, `subject`, `message`) VALUES ('$name','$ab','$message','$subject')";
    $run = mysqli_query($con, $qry);
                ?>
                    <script type="text/javascript">
					   alert('Message sent.');
                        window.open('admin_messages.php','_self');
                    </script>
                <?php
		
            }
else{
    ?>

                    <script type="text/javascript">
					   alert('Message failed.');
                        window.open('admin_messages.php','_self');
                    </script>
<?php

}


?>