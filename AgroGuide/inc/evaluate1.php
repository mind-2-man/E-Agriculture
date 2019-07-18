<?php 
include_once 'conn.php';
$report ="<table class='table-responsive'>";
$name ="";
$description ="";
 if(isset($_POST['submit'])){
 	$produce = $_POST['produce'];
 	$state = $_POST['state'];
 	$sql = "SELECT * FROM state WHERE id = $state";
 	$result = mysqli_query($conn,$sql);
 	$stateData = mysqli_fetch_assoc($result);
 	$sql = "SELECT * FROM produce WHERE id = $produce";
 	$result = mysqli_query($conn,$sql);
 	$produceData = mysqli_fetch_assoc($result);
 	$name = $produceData['name'];
 	$description = $produceData["description"];
 
 	}
 	$report.="</table>";

 header("LOCATION: ../evaluation.php?report=$report&name=$name&description=$description");
 ?>