<?php 
	$servername = "localhost";
	$username = "root";
	$password = "";
	$dbname = "agro";
	$conn = mysqli_connect($servername,$username,$password,$dbname);

	 ?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    
    <title>AgroGuide</title>
    <link href="https://fonts.googleapis.com/css?family=Gabriela&display=swap" rel="stylesheet">
    <!-- fav icons -->
    <style type="text/css">
    	body,h1,h2,h3,p,div{
    		font-family: 'Gabriela',serif !important;
    	}
    	input,select{
    		height: 50px !important;
    	}
    	.btn {
    		border-radius: 5px !important;
    		height: 50px !important;
    	}
    	h2{
    		font-size: 40px !important;
    	}
    	#top_menu,#logo {
    		font-size: 12px;
    	}
    </style>
    <link rel="icon" href="images/favicon.ico">
	<link rel="shortcut icon" href="images/favicon.ico">

    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
	<link rel="stylesheet" href="css/font-awesome.min.css">
	<link rel="stylesheet" href="css/jquery.bxslider.css">
	<link rel="stylesheet" type="text/css" href="css/isotope.css" media="screen" />	
	<link rel="stylesheet" href="css/animate.css">
	<link rel="stylesheet" href="js/fancybox/jquery.fancybox.css" type="text/css" media="screen" />
	<link href="css/prettyPhoto.css" rel="stylesheet" />
	<link href="css/style.css" rel="stylesheet" />	
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <body>
	<header>		
		<nav class="navbar navbar-default navbar-static-top" role="navigation">
			<div class="navigation">
				<div class="container">					
					<div class="navbar-header">
						<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target=".navbar-collapse.collapse">
							<span class="sr-only">Toggle navigation</span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
						</button>
						<div class="navbar-brand">
							<a href="/index.php" id="logo"><h1><span>A</span>groGuide</h1></a>
						</div>
					</div>
					
					<div class="navbar-collapse collapse">							
						<div class="menu">
							<ul class="nav nav-tabs" role="tablist" id="top_menu">
								<li role="presentation"><a href="index.php" class="<?php echo ($check == 1)?'active':'';?>">Home</a></li>
								<li role="presentation"><a href="evaluate.php" class="<?php echo ($check == 2)?'active':'';?>">Evaluate Your Farm</a></li>
								<li role="presentation"><a href="report.php" class="<?php echo ($check == 3)?'active':'';?>">Report A Diseases</a></li>
								<li role="presentation"><a href="discover.php" class="<?php echo ($check == 4)?'active':'';?>">Live Weather</a></li>
								<li role="presentation"><a href="contact.php" class="<?php echo ($check == 5)?'active':'';?>">Meet A Professional</a></li>						
							</ul>
						</div>
					</div>						
				</div>
			</div>	
		</nav>		
	</header>