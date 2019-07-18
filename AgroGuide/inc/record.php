<?php 
include_once 'conn.php';

 	$report.="<h5 style='color:green;'>You Reported Sucessfully, we will get back to you </h5>";

 header("LOCATION: ../report.php?report=$report");
 ?>