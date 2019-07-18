<?php 
	$check = 2;
		include_once "inc/header.php";
	 ?>   
	<div class="services" style="color:#797979">
		<div class="container">
			<div class="text-center">
				<div class="services-box">
					<div class="wow bounceInDown" data-wow-offset="0" data-wow-delay="0.3s">
						<h2>Evaluate Your Farm Produce</h2>					
					</div>
					<div class="wow bounceInDown" data-wow-offset="0" data-wow-delay="0.6s">	
						<p style="font-size: 25px;">See how well your farm produce will do and things to look out for</p>
					</div>
				</div>	
			</div>
		</div>
		
		<div class="container">
			<div class="text-center">
				<div class="col-md-2"></div>
				<div class="wow fadeInRight" data-wow-offset="0" data-wow-delay="0.8s">
						<div class="col-md-8">
			          <!-- general form elements -->
			          <div class="box box-success">
			            <div class="box-header with-border">
			              <h3 class="box-title">Form</h3>
			            </div>
			            <!-- /.box-header -->
			            <!-- form start -->
			            <form role="form" method="post" action="inc/evaluate.php">
			              <div class="box-body">
			              	<div class="row">
			              		<label for="Location" style="padding: 10px;">Farm's Location</label><br>
				                <div class="col-xs-6">
				                  <select required class="form-control mybutt" name="state" id="state" >
				                  	<option value="" >Select State</option>
				                  	<?php 
				                  	$sql="SELECT * FROM state";
				                  	$result= mysqli_query($conn,$sql);
				                  	if(mysqli_num_rows($result)>0){
				                  		while($rows = mysqli_fetch_assoc($result)){
				                  			echo "<option value='".$rows['id']."'>".$rows['name']."</option>";
				                  		}
									}
				                  	 ?>
				                  </select>
				                </div>
				                <div class="col-xs-6">
				                  <select required class="form-control mybutt" name="lga" id="lga">
				           			<option value="">select L.G.A</option>
				                  </select>
				                </div>
				            </div>
				            <div class="row">
			              		<label for="" style="padding: 10px;">Farm Produce</label><br>
				                <div class="col-xs-6">
				                  <select  required class="form-control mybutt" id="producetype" name="producetype">
				                  	<option value="">Select Type</option>
				                  	<?php 
					                  	$sql="SELECT * FROM produce_type";
					                  	$result= mysqli_query($conn,$sql);
					                  	if(mysqli_num_rows($result)>0){
					                  		while($rows = mysqli_fetch_assoc($result)){
					                  			echo "<option value='".$rows['id']."'>".$rows['name']."</option>";
					                  		}
										}
				                  	 ?>
				                  </select>
				               
				                </div>
				                <div class="col-xs-6">
				                  <select required class="form-control mybutt" name="produce" id="produce">
				                  	<option value="">Select Produce</option>
				                  </select>
				                </div>
				            </div>
			              </div>
			              <!-- /.box-body -->

			              <div class="box-footer">
			                <button  class="btn btn-primary mybutt " type="submit" name="submit">Generate Report</button>
			              </div>
			            </form>
			          </div>
					</div>
				</div>
				<div class="col-md-2"></div>
			</div>	
		</div>
<!-- report -->
		<div class="container hidden" id="report">
			<div class="">
				<div class="row">
					<div class="col-md-2"></div>
					<div class="col-md-8">
			          <div class="box box-solid">
			            <div class="box-header with-border">
			              <h3 class="box-title">Farm Produce Report</h3>
			            </div>
			            <div class="box-body">
			            <div class="row">
			            	<div class="col-md-2">
			            		<h4>Produce</h4>
			            	</div>
			            	<div class="col-md-1">
			            	</div>
			            	<div class="col-md-9" >
			            		<dl class=""id="produce">
				                
				              </dl>
			            	</div>
			            	
			            </div>
			            <div class="row">
			            	<div class="col-md-2">
			            		<h4>Factors</h4>
			            	</div>
			            	<div class="col-md-1">
			            	</div>
			            	<div class="col-md-9"  >
			            		<dl class=""id="factors">
				            
				              </dl>
			            	</div>
			            	
			            </div>
			              <hr>
			              <div class="row">
			            	<div class="col-md-2">
			            		<h4>Diseases</h4>
			            	</div>
			            	<div class="col-md-1">
			            	</div>
			            	<div class="col-md-9" >
			            		<dl class=""id="farm-diseases">
				            
				              </dl>
			            	</div>
			            	
			            </div>
			            </div>
			            <!-- /.box-body -->
			          </div>
			          <!-- /.box -->
			        </div>
			        <!-- ./col -->
				</div>
				
			</div>
		</div>
	</div>
	<?php 

		include_once "inc/footer.php";
	 ?>