<?php 
session_start();
if(!isset($_SESSION['useridu'])){
  ?><script>window.location="../../movies/users/pages-login.php";</script><?php
}
?>