<?php 
    $check = 3;
        include_once "inc/header.php";
     ?>
   
	<section id="blog" class="container" style="color:#797979">
        <div class="text-center">
          <?php if(isset($_GET['report'])) echo $_GET['report'] ?>
			<div class="wow bounceInDown" data-wow-offset="0" data-wow-delay="0.3s">
				<h2>Report A Disease</h2>					
			</div>
			<div class="wow bounceInDown" data-wow-offset="0" data-wow-delay="0.6s">
				<p style="font-size: 25px;">Report diseases to the approrpriate agency</p>
			</div>
		</div>

        <div class="blog">
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
                        <form role="form" method="post" action="inc/record.php">
                          <div class="box-body">
                            <div class="row">
                                <label for="">Farmer's Contact</label><br>
                                <div class="col-xs-6">
                                  <input required type="email" name="email" class="form-control" placeholder="Enter Your Emails">
                                </div>
                                <div class="col-xs-6">
                                  <input required type="telephone" name="phone" class="form-control" placeholder="Enter Your phone">
                                </div>
                            </div>
                            <div class="row">
                        <label for="Location">Farm's Location</label><br>
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
                        <label for="">Farm Produce</label><br>
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
                            <div class="form-group">
                                <label>Symptoms</label>
                                <textarea required class="form-control" rows="6" name="symptom"></textarea>
                            </div>
                          </div>
                          <!-- /.box-body -->

                          <div class="box-footer">
                            <button type="submit"href="#report" class="btn btn-primary" >Submit</a>
                          </div>
                        </form>
                      </div>
                    </div>
                </div>
                <div class="col-md-2"></div>
            </div>  
        </div>
</section>
	
	<?php 
        include_once "inc/footer.php";
     ?>