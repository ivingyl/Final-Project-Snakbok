<?php
include('dbcon.php');
session_unset('user');
session_destroy();
header('location:index.php');
?>