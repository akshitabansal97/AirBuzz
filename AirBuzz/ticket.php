<?php
require 'connect.inc.php';
require 'core.inc.php';
//if(isset($_POST['fs'])&&!empty($_POST['fs'])){
	//global $fs;
	//$fs=$_POST['fs'];
	$count=$_SESSION['count'];
	//echo $count;
	$fs=$_SESSION['fs'] ;
	//echo $fs;
	$uid=$_SESSION['user_id'];
	//echo $uid;
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

//passenger details----------------
//echo "</table>";
$query1="SELECT `passenger`.* FROM `passenger` WHERE (`passenger`.`pid`='".mysql_real_escape_string($uid)."') AND (`passenger`.`fid`='".mysql_real_escape_string($fs)."')";
	$query_run1=mysql_query($query1);
	$query_num_rows1=mysql_num_rows($query_run1);
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
	

//user details---------
$query2="SELECT `users`.* FROM `users` WHERE (`users`.`id`='".mysql_real_escape_string($uid)."')";
	$query_run2=mysql_query($query2);
	$query_num_rows2=mysql_num_rows($query_run2);
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
	while($query_num_rows2){
	$row2 = mysql_fetch_array($query_run2);
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
$query_num_rows2=$query_num_rows2-1;
}
?>

<!DOCTYPE html>
<html>
<head>
    <title></title>
    <!--<link href="login_page_layout.css" rel="stylesheet" />-->
    <!--<link href="go.css" rel="stylesheet" />-->
    <link href="Content/bootstrap.min.css" rel="stylesheet" />
    <meta charset="utf-8" />
	<script type="text/javascript">
function printDiv(divName) {
     var printContents = document.getElementById(divName).innerHTML;
     var originalContents = document.body.innerHTML;

     document.body.innerHTML = printContents;

     window.print();

     document.body.innerHTML = originalContents;
}

</script>		

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
                    <!-- Collect the nav links, forms, and other content for toggling -->
                    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                        <ul class="nav navbar-nav">
                           
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
                            <li><a href="logout.php">Logout</a></li>
                            
                        </ul>
                    </div>
                    <!-- /.navbar-collapse -->
                </div>
                <!-- /.container-fluid -->
            </nav>
        
			
			<div class="main" id="printableArea">
			<h1><center>INVOICE</h1>
			<h4><center>Your ticket has been Confirmed..Thanks for booking !!</h4>
                <table class="table table-hover table-bordered">
                    <thead>
                        <tr>
                            <th>Source</th>
                            <th>Destination</th>
                            <th>Departure Date</th>
                            <th>Arrival Date</th>
                            <th>Departure Time</th>
                            <th>Arrival Time</th>
                            <th>Duration</th>
                            <th>Price</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td><?php echo $row['Source'];?></td>
                            <td><?php echo $row['Destination'];?></td>
                            <td><?php echo $row['date'];?></td>
                            <td><?php echo '';?></td>
                            <td><?php echo $row['d_time'];?></td>
                            <td><?php echo $row['a_time'];?></td>
                            <td><?php echo $row['duration'];?></td>
                            <td><?php echo $row['Price'];?></td>
                        </tr>

                    </tbody>
                </table>
				
				
				<h1><center>PASSENGER INFORMATION</h1>
				<table class="table table-hover table-bordered">
                    <thead>
                        <tr>
                            <th>Passenger Name</th>
                            <th>Passenger Age</th>
                            <th>Passenger Mobile No.</th>
                        </tr>
                    </thead>
                    <tbody>
					<?php
						while($query_num_rows1){
						$row1 = mysql_fetch_array($query_run1);
                        echo '<tr>';
                          echo  "<td>".  $row1['pname'] ."</td>";
                           echo "<td> ". $row1['age']."</td>";
                           echo "<td>  ".$row1['mobile']."</td>";
                            
                       echo ' </tr>';
						$query_num_rows1=$query_num_rows1-1;
						}
					?>

                    </tbody>
					
                </table>
				<h1><center>BILLING INFORMATION</h1>
				<table class="table table-hover table-bordered">
                    <thead>
                        <tr>
                            <th>User Name</th>
                            <th>User Email</th>
                            <th>User Mobile No.</th>
							<th>No. of Passengers</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td><?php echo $row2['firstname'].$row2['surname'];?></td>
                            <td><?php echo $row2['email'];?></td>
                            <td><?php echo $row2['mobile'];?></td>
							<td><?php echo $_SESSION['count'];?></td>
                            
                        </tr>
						

                    </tbody>
					
                </table>
				<h1><center>TOTAL AMOUNT</h1>
				<table class="table table-hover table-bordered">
                    
                    <tbody>
                        <tr>
                            <td><center><?php echo $count*$row['Price'];?><strong>/-</strong><center></td>
                            
                        </tr>
						

                    </tbody>
					
                </table>
				
            </div>
			<center><input type="button" onclick="printDiv('printableArea')" value="Print">
            <br />
			<br />
			
			
					</body>
					</html>