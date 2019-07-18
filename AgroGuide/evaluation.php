<?php 
	include_once 'inc/header.php';
 ?>
 <div class="row" style="color:#797979">
 	<div class="col-md-3">	
 	</div>
 	<div class="col-md-6">
 		<div class="panel panel-default" style="color:#797979" style="height:0.6vh">
		  <!-- Default panel contents -->
		  <div class="panel-heading"><?php echo "{$_GET['name']}" ?></div>
		  <div class="panel-body" style="color:#797979">
		  	<?php echo "{$_GET['report']}";  ?> 

		  </div>

		  <!-- Table -->

		  

		</div>	
 	</div>
 	<div class="col-md-3">	
 	</div>
 </div>
 
 <?php 
	include_once 'inc/footer.php';
 ?>