<?php
include("../connection/config.php"); 
$qu="CREATE TABLE IF NOT EXISTS `mv_poster` (
  `id_` int(10) NOT NULL DEFAULT '0',
  `movie_id` int(10) NOT NULL,
  `poster_name` varchar(15) NOT NULL,
  `file` varchar(50) NOT NULL,
  `created_at` int(10) NOT NULL,
  PRIMARY KEY (`id_`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;";
$qu=mysqli_query($con,$qu);
?>
