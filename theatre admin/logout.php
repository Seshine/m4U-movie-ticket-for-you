<?php
ob_start();
error_reporting(0); 
session_start();
session_destroy();
echo "<script language='javascript'>window.location='../theatre admin/pages-login.php'</script>";
?>