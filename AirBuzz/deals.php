<!DOCTYPE html>
<html>
<head>

<meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>AIR Wings</title>
    <link rel="shortcut icon" href="#" />
    <!-- BOOTSTRAP CORE STYLE CSS -->
    <link href="assets/css/bootstrap.css" rel="stylesheet" />
    <!-- FONT AWESOME CSS -->
<link href="assets/css/font-awesome.min.css" rel="stylesheet" />
     <!-- FLEXSLIDER CSS -->
<link href="assets/css/flexslider.css" rel="stylesheet" />
    <!-- CUSTOM STYLE CSS -->
    <link href="css/css/style.css" rel="stylesheet" />
    <link href="css/style2.css" rel="stylesheet" />
    <link href="deals.css" rel="stylesheet" />
  <!-- Google	Fonts -->
	<link href='http://fonts.googleapis.com/css?family=Open+Sans:400,700,300' rel='stylesheet' type='text/css' />

<title>Air wings</title>
<link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
<link href="css/style.css" rel="stylesheet" type="text/css" media="all" />
<link href="css/styles.css?v=1.6" rel="stylesheet">
<!-- js -->
<script src="js/jquery-1.11.1.min.js"></script>
<script src="js/scripts.js?v=1.7"></script>
<!-- //js -->
<!--FlexSlider-->
		<link rel="stylesheet" href="css/flexslider.css" type="text/css" media="screen" />
		<script defer src="js/jquery.flexslider.js"></script>
		<script type="text/javascript">
		$(window).load(function(){
		  $('.flexslider').flexslider({
			animation: "slide",
			start: function(slider){
			  $('body').removeClass('loading');
			}
		  });
		});
	  </script>
<!--End-slider-script-->
<!-- pop-up-script -->
<script src="js/jquery.chocolat.js"></script>
		<link rel="stylesheet" href="css/chocolat.css" type="text/css" media="screen" charset="utf-8">
		<!--light-box-files -->
		<script type="text/javascript" charset="utf-8">
		$(function() {
			$('.view-seventh a').Chocolat();
		});
		</script>
<!-- //pop-up-script -->
<script src="js/easyResponsiveTabs.js" type="text/javascript"></script>
<!-- start-smoth-scrolling -->
<script type="text/javascript" src="js/move-top.js"></script>
<script type="text/javascript" src="js/easing.js"></script>
<script type="text/javascript">
	jQuery(document).ready(function($) {
		$(".scroll").click(function(event){
			event.preventDefault();
			$('html,body').animate({scrollTop:$(this.hash).offset().top},1000);
		});
	});
</script>
<!-- start-smoth-scrolling -->
<link href='//fonts.googleapis.com/css?family=Open+Sans:400,300,300italic,400italic,600,600italic,700,700italic,800,800italic' rel='stylesheet' type='text/css'>
<link href='//fonts.googleapis.com/css?family=Comfortaa:400,300,700' rel='stylesheet' type='text/css'>
</head>

</head>
<body>
    <div class="main body">
        <div class="firstpage">
            <nav class="navbar navbar-inverse .navbar-static-top">
                <div class="container-fluid">
                    <!-- Brand and toggle get grouped for better mobile display -->
                    <div class="navbar-header">
                        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                            <span class="sr-only">Toggle navigation</span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>
                        <a class="navbar-brand">
                            AirBuzz
                        </a>
                    </div>

                    <!-- Collect the nav links, forms, and other content for toggling -->
                    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                        <ul class="nav navbar-nav">
                            <li ><a href="index.php">Home <span class="sr-only">(current)</span></a></li>
                            <li class="active"><a href="#">Deals</a></li>
                            
								<li><a href="index.php #about">About Us</a></li>
							<li><a href="index.php #subscribed">Subscribe</a></li>
							<li><a href="index.php #contact_us">Contact Us</a></li>
								
			
                            
                        </ul>
                        <!--<form class="navbar-form navbar-left">
                    <div class="form-group">
                        <input type="text" class="form-control" placeholder="Search">
                    </div>
                    <button type="submit" class="btn btn-default">Submit</button>
                </form>-->
                        <ul class="nav navbar-nav navbar-right">
                            <li>
                                <img src="loginpic.png" width="45" height="45" style="padding-top: 5px" />
                            </li>
                            <li><a href="index_back.php">Login</a>
							</li>
							
                            <!--<li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Support <span class="caret"></span></a>
                                <ul class="dropdown-menu">
                                    <li><a href="#">Contact Us</a></li>
                                    <li><a href="#">Feedback</a></li>
                                    <li><a href="#">About Us</a></li>
                                    <!--<li role="separator" class="divider"></li>
                            <li><a href="#">Separated link</a></li>
                                </ul>
                            </li>-->
                        </ul>
                    </div>
                    <!-- /.navbar-collapse -->
                </div>
                <!-- /.container-fluid -->
            </nav>

            <div class="firstpage_remaning">
                <br>
                <div class="tagline">
                    <h2 class="lead"><center>Your destination for best flight experience...</center></h2>
                </div>
                
            </div>
        </div>
	<!-- portfolio -->
	<div id="portfolio" class="portfolio">
		<div class="container">	
			<h3>Deals to Lust Upon:</h3>
			
			<div class="main">
			
                <div class="view view-seventh">
					
						<img width="100%" height="100%" src="images/mumbai.jpg" />
						<div class="mask">
							<h2>NEW DELHI TO MUMBAI</h2><br><form action="new.php" method="POST">
							<?php
							require 'connect.inc.php';
							$query="SELECT `f_dates`.Price, `flights`.fname FROM `flights` RIGHT JOIN `f_dates` ON `f_dates`.`fid` = `flights`.`fid` WHERE ((`flights`. Source='NEW DELHI') AND (`flights`. Destination='MUMBAI'))";
							$query_run=mysql_query($query);
							$query_num_rows=mysql_num_rows($query_run);
							while($query_num_rows){
								$row = mysql_fetch_array($query_run);
								echo  'Actual Price of '.$row['fname'].' is '. $row['Price'];
								echo'<br>';
							$query_num_rows=$query_num_rows-1;
							}
							?>
							<p>Discount Offer : 3999/-
							<input type="submit" value="Book" onclick="Location='new.php'"></p>
						</div>
					
                </div>
                <div class="view view-seventh">
					
						<img width="100%" height="100%" src="images/13.jpg" />
						<div class="mask">
							<h2>NEW DELHI TO GOA</h2><br>
							<?php
							require 'connect.inc.php';
							$query="SELECT `f_dates`.Price, `flights`.fname FROM `flights` RIGHT JOIN `f_dates` ON `f_dates`.`fid` = `flights`.`fid` WHERE ((`flights`. Source='NEW DELHI') AND (`flights`. Destination='GOA'))";
							$query_run=mysql_query($query);
							$query_num_rows=mysql_num_rows($query_run);
							while($query_num_rows){
								$row = mysql_fetch_array($query_run);
								echo  'Actual Price of '.$row['fname'].' is '. $row['Price'];
								echo'<br>';
							$query_num_rows=$query_num_rows-1;
							}
							?>
							<p>Discount Offer : 7999/-<input type="submit" value="Book" onclick="Location='new.php'"></p>
						</div>
					
                </div>
                <div class="view view-seventh">
					
						<img width="100%" height="100%" src="images/15-.jpg" />
						<div class="mask">
							<h2>BANGALORE TO NEW DELHI</h2><br>
							<?php
							require 'connect.inc.php';
							$query="SELECT `f_dates`.Price, `flights`.fname FROM `flights` RIGHT JOIN `f_dates` ON `f_dates`.`fid` = `flights`.`fid` WHERE ((`flights`. Source='BANGALORE') AND (`flights`. Destination='NEW DELHI'))";
							$query_run=mysql_query($query);
							$query_num_rows=mysql_num_rows($query_run);
							while($query_num_rows){
								$row = mysql_fetch_array($query_run);
								echo  'Actual Price of '.$row['fname'].' is '. $row['Price'];
								echo'<br>';
							$query_num_rows=$query_num_rows-1;
							}
							?>
							<p>Discount Offer : 2499/-<input type="submit" value="Book" onclick="Location='new.php'"></p>
						</div>
					
                </div>
                <div class="view view-seventh">
					
						<img width="100%" height="100%" src="images/10.jpg" />
						<div class="mask">
							<h2>CHENNAI TO NEW DELHI</h2><br>
							<?php
							require 'connect.inc.php';
							$query="SELECT `f_dates`.Price, `flights`.fname FROM `flights` RIGHT JOIN `f_dates` ON `f_dates`.`fid` = `flights`.`fid` WHERE ((`flights`. Source='CHENNAI') AND (`flights`. Destination='NEW DELHI'))";
							$query_run=mysql_query($query);
							$query_num_rows=mysql_num_rows($query_run);
							while($query_num_rows){
								$row = mysql_fetch_array($query_run);
								echo  'Actual Price of '.$row['fname'].' is '. $row['Price'];
								echo'<br>';
							$query_num_rows=$query_num_rows-1;
							}
							?>
							<p>Discount Offer : 2499/-<input type="submit" value="Book" onclick="Location='new.php'"></p>
						</div>
					
                </div>
            </div>
			
            </div>
		</div>
	</div>
<!-- //portfolio -->