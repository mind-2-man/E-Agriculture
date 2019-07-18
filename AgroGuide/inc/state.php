<?php 
include_once 'conn.php';
$state =$_POST['state'];
$sql="SELECT * FROM local_governments WHERE state_id= $state";
	$result= mysqli_query($conn,$sql);
	if(mysqli_num_rows($result)>0){
		while($rows = mysqli_fetch_assoc($result)){
			echo "<option value='".$rows['id']."'>".$rows['name']."</option>";
		}
}

 ?>