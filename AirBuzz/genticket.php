<?php
	
	require 'connect.inc.php';
	require 'core.inc.php';
	$fse=$_SESSION['fs'];
	$id=$_SESSION['user_id'];
	$cd_no=$_SESSION['card_no'];
	$query="SELECT `flight_info`.*, `flight_details`.* FROM `flight_details` RIGHT JOIN `flight_info` ON `flight_info`.`f_id` = `flight_details`.`f_id` WHERE ((`flight_info`. f_id='".mysql_real_escape_string($fse)."') AND (`flight_details`. f_id='".mysql_real_escape_string($fse)."'))";
	$query_run=mysql_query($query);
	$query_num_rows=mysql_num_rows($query_run);
	while($query_num_rows){
	$row = mysql_fetch_array($query_run);
	$query_num_rows=$query_num_rows-1;
	}
	
	
	$sql2=" SELECT st_no,f_name,s_name,zip,city,email,card_no,tot FROM payment_info 
			WHERE (payment_info.user_id='$id') AND (payment_info.card_no=$cd_no)";
	$query_run3=mysql_query($sql2);
	$row2 = mysql_fetch_array($query_run3);

?>

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
<!-- pop-up-script -->
<script src="js/jquery.chocolat.js"></script>
		<link rel="stylesheet" href="css/chocolat.css" type="text/css" media="screen" charset="utf-8">
		<!--light-box-files -->
		<script type="text/javascript" charset="utf-8">
		$(function() {
			$('.view-seventh a').Chocolat();
		});

		
		</script>
<script type="text/javascript">
function printDiv(divName) {
     var printContents = document.getElementById(divName).innerHTML;
     var originalContents = document.body.innerHTML;

     document.body.innerHTML = printContents;

     window.print();

     document.body.innerHTML = originalContents;
}

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

<body>
<!-- banner -->
	<!--<div class="banner">-->
	<nav class="navbar navbar-default navbar-fixed-top" id="menu">
        <div class="container">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand2" href="#"><img class="logo-custom2" src="images/logo3.png" alt=""  /></a>
                <a class="navbar-brand" href="#"><img class="logo-custom" src="images/airwings.png" alt=""  /></a>
            </div>
            <div class="navbar-collapse collapse move-me">
                <ul class="nav navbar-nav navbar-right">
                    <li ><a href="index2.php">HOME</a></li>
                     <li><a href="about_us.html">ABOUT US</a></li>
                    <li><a href="services.html">SERVICES</a></li>
                     <li><a href="index2.php/#contact_us">CONTACT US</a></li>
                     <li><a href="logout.php">LOGOUT</a></li>
                </ul>
            </div>

        </div>
    </nav>
	<div class="banner-info">
		<div class="row">
			<div class="row" align="center">
			<div id="printableArea">
				<h2>YOUR BOARDING PASS</h2>
				<div class="col-sm-12" align="center">
				<table border="2px" style="width:80%">
                    <thead>
						<tr>
							<th colspan="7" style="text-align:center;">FLIGHT INFORMATION</th>
						</tr>
                        <tr  align="center">
                            <th style="text-align:center;">Source</th>
                            <th style="text-align:center;">Destination</th>
                            <th style="text-align:center;">Date</th>
                            <th style="text-align:center;">Departure Time</th>
                            <th style="text-align:center;">Arrival Time</th>
                            <th style="text-align:center;">Duration</th>
                            <th style="text-align:center;">Price</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td align="center"><?php echo $row['from_loc'];?></td>
                            <td align="center"><?php echo $row['to_loc'];?></td>
                            <td align="center"><?php echo $row['d_date'];?></td>
                            <td align="center"><?php echo $row['dep_time'];?></td>
                            <td align="center"><?php echo $row['arr_time'];?></td>
                            <td align="center"><?php echo $row['duration'];?></td>
                            <td align="center"><?php echo $row['price'];?></td>
                        </tr>

                    </tbody>
                </table><br><br>
				
				
				<table border="2px" style="width:80%">
					<thead>
						<tr>
							<th colspan="3" style="text-align:center">PASSENGER INFORMATION</th>
						</tr>
                        <tr>
                            <th style="text-align:center">Passenger Name</th>
                            <th style="text-align:center">Passenger Phone Number</th>
                            <th style="text-align:center">Passenger Age</th>
                        </tr>
                    </thead>
					<tbody>
<?php				
				$query="SELECT p_name,ph_no,p_age FROM passenger,user_info,flight_info WHERE (passenger.user_id=user_info.user_id) AND (passenger.f_id=flight_info.f_id )
						AND (passenger.user_id='$id') AND (passenger.f_id='$fse')";
				$query_run=mysql_query($query);
				$query_num_rows=mysql_num_rows($query_run);
				while($query_num_rows){
					$row1 = mysql_fetch_array($query_run);
					echo "<tr>";
					echo "<td align='center'> ". $row1['p_name'] ."</td>";
					echo "<td align='center'>". $row1['ph_no'] ."</td>";
					echo "<td align='center'>". $row1['p_age'] ."</td>";
					echo '</tr>';
					$query_num_rows=$query_num_rows-1;
}
	?>			
	</tbody>
	</table>	
	<br><br>
				<table border="2px" style="width:80%">
                    <thead>
						<tr>
							<th colspan="8" style="text-align:center">PAYMENT INFORMATION</th>
						</tr>
                        <tr>
                            <th style="text-align:center">Street Number</th>
                            <th style="text-align:center">First Name</th>
                            <th style="text-align:center">Sur Name</th>
                            <th style="text-align:center">Zipcode</th>
                            <th style="text-align:center">City</th>
                            <th style="text-align:center">Email</th>
                            <th style="text-align:center">Card Number</th>
                            <th style="text-align:center">Total Bill</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td align="center"><?php echo $row2['st_no'];?></td>
                            <td align="center"><?php echo $row2['f_name'];?></td>
                            <td align="center"><?php echo $row2['s_name'];?></td>
                            <td align="center"><?php echo $row2['zip'];;?></td>
                            <td align="center"><?php echo $row2['city'];?></td>
                            <td align="center"><?php echo $row2['email'];?></td>
                            <td align="center"><?php echo $row2['card_no'];?></td>
                            <td align="center"><?php echo $row2['tot'];?></td>
                        </tr>

                    </tbody>
                </table>
				<br><br>				
				</div>
			</div>
			<input type="button" onclick="printDiv('printableArea')" value="Print Ticket" />
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