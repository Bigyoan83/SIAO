<?php
session_start();
session_unset();
session_destroy();
header("Location: http://localhost/SIAO/home.php"); 
exit();
?>
