<?php 
include_once 'conn.php';
$report ="<table class='table table-responsive'>";
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
 	//$description = $produceData["description"];

 	if($stateData['temp']>=$produceData['temp_min']&&$stateData['temp']<=$produceData['temp_max']&&$stateData['temp']!=''){
 		$report.="<tr><th>TEMPREATURE</th><td>This Enviroment Temperature is perfect for your produce</td></tr>";

 	}
 	else if($stateData['temp']>$produceData['temp_max']){
 		$report.="<tr><th>TEMPREATURE</th><td>".ucfirst($name)." require temperature around {$produce['temp_max']} &#8457; to  {$produce['temp_max']} &#8457; but your Enviromnemt has a temperature of {$stateData['temp']} &#8457; so you would have to take measures to cool down the farm or try different Farm Products </td></tr>";
 	}
 	else if($stateData['temp']<$produceData['temp_min']){
 		$report.="<tr><th>TEMPREATURE</th><td>".ucfirst($name)." require temperature around {$produce['temp_max']} &#8457; to  {$produce['temp_max']} &#8457; but your Enviromnemt has a temperature of {$stateData['temp']} &#8457; so you would have to take measures to warm the farm or try different Farm Products </td></tr>";

 	}
 	if($stateData['ph']>=$produceData['ph_min']&&$stateData['ph']<=$produceData['ph_max']&&$stateData['ph']!=''){
 		$report.="<tr><th>PH</th><td>This Enviroment PH is perfect for your produce</td></tr>";
 		
 	}
 	else if($stateData['ph']>$produceData['ph_max']){
 		$report.="<tr><th>PH</th><td>".ucfirst($name)."require a PH around {$produce['ph_min']} to  {$produce['ph_max']} but your Enviromnemt has a PH of {$stateData['ph']} so you would have to take measures to reduce the farm's PH or try different Farm Products </td></tr>";
 	}
 	else if($stateData['ph']<$produceData['ph_min']){
 		$report.="<tr><th>PH</th><td>".ucfirst($name)." require a PH around {$produce['ph_min']} to  {$produce['ph_max']} but your Enviromnemt has a PH of {$stateData['ph']} so you would have to take measures to increase the farm's PH or try different Farm Products </td></tr>";
 	}
 	if($stateData['rainfall']>=$produceData['min_rainfall']&&$stateData['rainfall']<=$produceData['rainfall_max']&&$stateData['rainfall']!=''){
 		$report.="<tr><th>RAINFALL</th><td>This Enviroment Rainfall level is perfect for your produce</td></tr>";
 		
 	}
 	else if($stateData['rainfall']>$produceData['rainfall_max']){
 		$report.="<tr><th>RAINFALL</th><td>".ucfirst($name)." require rainfall around {$produce['min_rainfall']} mm to  {$produce['rainfall_max']}mm but your Enviromnemt has a rainfall level of {$stateData['rainfall']}mm so you would have to take measures to reduce rainfall intensity in contact with farm produce or try different Farm Products </td></tr>";

 	}
 	else if($stateData['rainfall']<$produceData['min_rainfall']){
 		$report.="<tr><th>RAINFALL</th><td>".ucfirst($name)." require rainfall around {$produce['rainfall_min']} mm to  {$produce['rainfall_max']}mm but your Enviromnemt has a rainfall level of {$stateData['rainfall']}mm so you would have to take measures to increase rainfall intensity in contact with Farm produce or try different Farm Produce </td></tr>";

 	}

 }
 $report.="</table>";
 echo $report;

 header("LOCATION: ../evaluation.php?report=$report&name=$name&description=$description");