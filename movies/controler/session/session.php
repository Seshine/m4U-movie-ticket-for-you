<?php 
session_start();
if(!isset($_SESSION['userid'])){
  ?><script>window.location="../../movies/main admin/pages-login.php";</script><?php
}
?>