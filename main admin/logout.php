<?php
ob_start();
error_reporting(0); 
session_start();
session_destroy();
echo "<script language='javascript'>window.location='../main admin/pages-login.php'</script>";
?>