<?php 
session_start();
if(!isset($_SESSION['userid'])){
  ?><script>window.location="../../../movies/theatre admin/pages-login.php";</script><?php
}
?>