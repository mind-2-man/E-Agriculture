<?php 
include_once 'conn.php';
$produce =$_POST['product'];
$sql="SELECT * FROM produce WHERE produce_type_id= $produce";
	$result= mysqli_query($conn,$sql);
	if(mysqli_num_rows($result)>0){
		while($rows = mysqli_fetch_assoc($result)){
			echo "<option value='".$rows['id']."'>".$rows['name']."</option>";
		}
}

 ?>