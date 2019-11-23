<?php
    include('dbcon.php');
    $_SESSION['ino']=1;
     $abc=$_SESSION['ino'];
    if(isset($_POST['prev'])){
        echo "shr";

        if($abc>0)
        {    echo "shr1";
            $abc=$abc-1;
            header('location:admin_messages.php');
        }
        else
        {
            echo "shr2";
             ?>
                <script type="text/javascript">
					   alert('Initial Record');
                        window.open('admin_messages.php','_self');
                </script>
<?php
        }
       
        }
else{
     
echo "shr4";
                if($abc<10)
        {   
                    echo "shr5";
            $abc=$abc+1;
            header('location:admin_messages.php');
        }
        else
        {
            echo "shr6";
             ?>
                <script type="text/javascript">
					   alert('Last Record');
                        window.open('admin_messages.php','_self');
                </script>
<?php
        }
       
        }
    ?>