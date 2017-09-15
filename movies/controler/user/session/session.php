<?php 
session_start();
if(!isset($_SESSION['userid'])){
  ?><script>window.location="../../movies/users/pages-login.php";</script><?php
}
?>