<!DOCTYPE html>
<html>
<head>
    <title></title>
    <!--<link href="login_page_layout.css" rel="stylesheet" />-->
    <!--<link href="go.css" rel="stylesheet" />-->
    <link href="Content/bootstrap.min.css" rel="stylesheet" />
    <meta charset="utf-8" />
</head>
<body>
    <div class="main_body">
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
                        <a class="navbar-brand">AirBuzz
                        </a>
                    </div>

                    <!-- Collect the nav links, forms, and other content for toggling -->
                    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                        <ul class="nav navbar-nav">
                            <li class="active"><a href="index.php">Home <span class="sr-only">(current)</span></a></li>
                            <li><a href="#">Deals</a></li>

                            <li><a href="#about">About Us</a></li>
                            <li><a href="#subscribed">Subscribe</a></li>
                            <li><a href="#contact_us">Contact Us</a></li>



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
                            <li><a href="logout.php">Logout</a>
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
            <br />
                     <br />
        </div>
    </nav>
	<div class="banner-info">
		<div class="row">
			<div class="row" align="center">
			<div class=id="printableArea">
				<h2>YOUR BOARDING PASS</h2>
				<div class="col-sm-12">
					
					<?php
require 'connect.inc.php';
require 'core.inc.php';
if(isset($_POST['fs'])&&!empty($_POST['fs'])){
	global $fs;
	$fs=$_POST['fs'];
	$_SESSION['fs'] = $fs;
	//echo $_SESSION['fs'];
	$query="SELECT `f_dates`.*, `flights`.* FROM `flights` RIGHT JOIN `f_dates` ON `f_dates`.`fid` = `flights`.`fid` WHERE ((`f_dates`. fid='".mysql_real_escape_string($fs)."') AND (`flights`. fid='".mysql_real_escape_string($fs)."'))";
	$query_run=mysql_query($query);
	$query_num_rows=mysql_num_rows($query_run);
	/*echo $query_num_rows;
	echo "<table>";
	echo "<tr>";
	echo "<th style='border:2px solid black'>Source</th>";
	echo "<th style='border:2px solid black'>Destination</th>";
	echo "<th style='border:2px solid black'>Date</th>";
	echo "<th style='border:2px solid black'>Departure Time</th>";
echo "<th style='border:2px solid black'>Arrival Time</th>";
echo "<th style='border:2px solid black'>Duration</th>";
echo "<th style='border:2px solid black'>Price</th>";
echo "</tr>";*/
	while($query_num_rows){
	$row = mysql_fetch_array($query_run);
    /*echo "<tr>";
	echo "<td style='border:2px solid black'>". $row['Source'] ."</td>";
echo "<td style='border:2px solid black'>". $row['Destination'] ."</td>";
echo "<td style='border:2px solid black'>". $row['date'] ."</td>";
//echo "<td class='block32' style='border:2px solid black'>".$adate."</td>";
    echo "<td style='border:2px solid black'> ". $row['d_time'] ."</td>";
    echo "<td style='border:2px solid black'>". $row['a_time'] ."</td>";
	echo "<td style='border:2px solid black'>". $row['duration'] ."</td>";
    echo "<td style='border:2px solid black'>" . $row['Price'] . "</td>";
   
echo "</tr>";*/
$query_num_rows=$query_num_rows-1;
}
//echo "</table>";
}
						
						echo '<h1>PASSENGER INFORMATION</h1>';
						echo "</table>";
						echo '<br><br>';
						echo "<table>";
						echo "<tr>";
						echo "<th>style='border:2px solid black'>Passenger Name</th>";
						echo "<th>style='border:2px solid black'>Passenger Phone number</th>";
						echo "<th>style='border:2px solid black'>Passenger Age</th>";
						echo '</tr>';
							$sql1= "SELECT `p_name`.*,`ph_no`.*,`p_age`.* FROM `passenger`,`user_info`,`flight_info` WHERE (`passenger`.`user_id`=`user_info`.`user_id`) AND (`passenger`.`f_id`=`flight_info`.`f_id` )
							AND (`passenger`.'user_id'='".mysql_real_escape_string($id)."') AND (`passenger`.`f_id`='".mysql_real_escape_string($fid)."')   ";
							$query_run=mysql_query($sql1);
							$query_num_rows=mysql_num_rows($query_run);
							while($query_num_rows){
							$row = mysql_fetch_array($query_run);
							echo "<tr>";
							echo "<td style='border:2px solid black'>". $row['p_name'] ."</td>";
							echo "<td style='border:2px solid black'>". $row['ph_no'] ."</td>";
							echo "<td style='border:2px solid black'>". $row['p_age'] ."</td>";	
							echo '</tr>';
							$query_num_rows=$query_num_rows-1;
						}
						echo "<br><br>";
						echo '<h1>BILLING INFORMATION</h1>';
						echo "<br><br>";
						echo "<tr>";
						echo "<th>style='border:2px solid black'>Street No</th>";
						echo "<th>style='border:2px solid black'>First Name</th>";
						echo "<th>style='border:2px solid black'>Sur Name</th>";
						echo "<th>style='border:2px solid black'>Zip Code</th>";
						echo "<th>style='border:2px solid black'>City</th>";
						echo "<th>style='border:2px solid black'>Email Id</th>";
						echo "<th>style='border:2px solid black'>card Number</th>";
						echo "<th>style='border:2px solid black'>Total Bill</th>";
						echo '</tr>';
						
						$sql2=" SELECT `st_no`.*,`f_name`.*,`s_name`.*,`zip`.*,`city`.*,`email`.*,`card_no`.* FROM `payment` 
						WHERE (`payment`.`user_id`='".mysql_real_escape_string($id)."')";
						$query_run=mysql_query($sql2);
						$row = mysql_fetch_array($query_run);
						echo '<tr>';
						echo "<td style='border:2px solid black'>". $row['st_no'] ."</td>";
						echo "<td style='border:2px solid black'>". $row['f_name'] ."</td>";
						echo "<td style='border:2px solid black'>". $row['s_name'] ."</td>";
						echo "<td style='border:2px solid black'>". $row['zip'] ."</td>";
						echo "<td style='border:2px solid black'>". $row['city'] ."</td>";
						echo "<td style='border:2px solid black'>". $row['email'] ."</td>";
						echo "<td style='border:2px solid black'>". $row['card_no'] ."</td>";
						echo '</tr>';
						echo '<br><br>';
						
					?>
					<input type="button" onclick="printDiv('printableArea')" value="Print Ticket" />
				</div>
			</div>
			</div>
		</div>
	</div>
	
	
	
	
	
	
	
	
	
	
	
	<div class="row" align="right" id="arrow">
		<a href="#top"><img src="images/arrow.png"></a>
	</div>
	<div class="row" id="foot_row">
		<div class="col-sm-4">
			<div class="row">
				<div class="col-sm-6" id="set_pad">
					<ul>
						<li><a>Getting here</a></li>
						<li><a>Weather</a></li>
						<li><a>Corporate</a></li>
						<li><a>Blog</a></li>
						<li><a>Tenders</a></li>
					</ul>
				</div>
				<div class="col-sm-6" id="set_pad">
					<ul>
						<li><a>Careers</a></li>
						<li><a>Contact us</a></li>
						<li><a>Links</a></li>
						<li><a>Cultural Media</a></li>
						<li><a>Services</a></li>
					</ul>
				</div>
			</div>
		</div>
		<div class="col-sm-4">
			<div class="insert_img" align="center">
				<img src="images/logo3.png">
			</div>
		</div>
		<div class="col-sm-4">
			<div class="row" id="gyphicon" align="left">
				<font id="follow">FOLLOW US ON</font>
			</div>
			<div calss="row" id="img_follow" align="center">
				<img src="images/facebook.png">
				<img src="images/linkedin.png">
				<img src="images/youtube.png">
				<img src="images/twitter (1).png">
			</div>
		</div>
	</div>
	<div class="row" id="name_designer" align="right">
		<font id="namedesg">ALL RIGHTS RESERVED | DESIGN BY-AMAN_AGG </font>
	</div>
</div>
<script src="Scripts/jquery-1.9.1.min.js"></script>
	<script type="text/javascript" src="js/jquery.js"></script>
	<script type="text/javascript" src="js/hide.js"></script>
	<script type="text/javascript" src="js/default.js"></script>
    <script src="Scripts/bootstrap.min.js"></script>

</body>
</html>