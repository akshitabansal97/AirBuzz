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
?>

<!DOCTYPE html>
<html>
<head>
    <title></title>
    <!--<link href="login_page_layout.css" rel="stylesheet" />-->
    <link href="go.css" rel="stylesheet" />
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
                <!-- /.container-fluid -->
            </nav>
            <br />
                     <br />
			
			<div class="main">
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
            </div>
            <br />
			<br />
            <h1>Enter Details of Passengers</h1>
<div class="booking">

<div class="row" style="min-height=30px"><br>
<br>
</div>
			<div class="details">
                <br />
				<form action="passenger.php" method="POST">
                <div class="person">
                   
                    <input type="text" name="name1" placeholder="Name" style="background-color:rgba(0, 0, 0, 0.22); border-radius: 5px; ">
                    <input type="text" name="age1" placeholder="Age"  style="background-color:rgba(0, 0, 0, 0.22); border-radius: 5px; ">
                    <input type="text" name="mobile1" placeholder="Mobile No."  style="background-color:rgba(0, 0, 0, 0.22); border-radius: 5px; ">
                </div>
                 <div class="person">
                    
                    <input type="text" name="name2" placeholder="Name" style="background-color:rgba(0, 0, 0, 0.22); border-radius: 5px; ">
                    <input type="text" name="age2" placeholder="Age"  style="background-color:rgba(0, 0, 0, 0.22); border-radius: 5px; ">
                    <input type="text" name="mobile2" placeholder="Mobile No."  style="background-color:rgba(0, 0, 0, 0.22); border-radius: 5px; ">
                </div>
                 <div class="person">
                    
                    <input type="text" name="name3" placeholder="Name" style="background-color:rgba(0, 0, 0, 0.22); border-radius: 5px; ">
                    <input type="text" name="age3" placeholder="Age"  style="background-color:rgba(0, 0, 0, 0.22); border-radius: 5px; ">
                    <input type="text" name="mobile3" placeholder="Mobile No."  style="background-color:rgba(0, 0, 0, 0.22); border-radius: 5px; ">
                </div>
                 <div class="person">
                    
                    <input type="text" name="name4" placeholder="Name" style="background-color:rgba(0, 0, 0, 0.22); border-radius: 5px; ">
                    <input type="text" name="age4" placeholder="Age"  style="background-color:rgba(0, 0, 0, 0.22); border-radius: 5px; ">
                    <input type="text" name="mobile4" placeholder="Mobile No."  style="background-color:rgba(0, 0, 0, 0.22); border-radius: 5px; ">
                </div>
                 <div class="person">
                    
                    <input type="text" name="name5" placeholder="Name" style="background-color:rgba(0, 0, 0, 0.22); border-radius: 5px; ">
                    <input type="text" name="age5" placeholder="Age"  style="background-color:rgba(0, 0, 0, 0.22); border-radius: 5px; ">
                    <input type="text" name="mobile5" placeholder="Mobile No."  style="background-color:rgba(0, 0, 0, 0.22); border-radius: 5px; ">
                </div>
                 <div class="person">
                    
                    <input type="text" name="name6" placeholder="Name" style="background-color:rgba(0, 0, 0, 0.22); border-radius: 5px; ">
                    <input type="text" name="age6" placeholder="Age"  style="background-color:rgba(0, 0, 0, 0.22); border-radius: 5px; ">
                    <input type="text" name="mobile6" placeholder="Mobile No."  style="background-color:rgba(0, 0, 0, 0.22); border-radius: 5px; ">
                </div>
              <br>
				<input type='submit' value='Submit'></input>
				</form>
            </div>



</div>
    </div>
    <script src="Scripts/jquery-1.9.1.min.js"></script>
    <script src="Scripts/bootstrap.min.js"></script>
</body>
</html>



