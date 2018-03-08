<!DOCTYPE html>
<html>
<head>
    <title></title>
    <!--<link href="login_page_layout.css" rel="stylesheet" />-->
    <link href="flight_book.css" rel="stylesheet" />
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
			<h1>Available Flights</h1>


            <br />
<?php
require 'connect.inc.php';
if(isset($_POST['source'])&&isset($_POST['destination'])&&isset($_POST['ddate'])&&isset($_POST['adate'])){
	echo '<form action="go.php" method="post">';
$source=$_POST['source'];
$destination=$_POST['destination'];
$ddate=$_POST['ddate'];
$adate=$_POST['adate'];
echo "<table class='table table-stripped' style='border:2px solid black'>";
echo "<tr style='border:2px solid black'>";
echo "<th style='border:2px solid black'>SELECT</th>";
echo "<th style='border:2px solid black'>Source</th>";
echo "<th style='border:2px solid black'>Destination</th>";
echo "<th style='border:2px solid black'>Departure Date</th>";
echo "<th  class='block32' style='border:2px solid black'>Arrival Date</th>";
echo "<th style='border:2px solid black'>Departure Time</th>";
echo "<th style='border:2px solid black'>Arrival Time</th>";
echo "<th style='border:2px solid black'>Duration</th>";
echo "<th style='border:2px solid black'>Price</th>";
echo "</tr>";

$query="SELECT * from `f_dates` WHERE `fid` IN(SELECT `fid` FROM `flights` WHERE `Source`='".mysql_real_escape_string($source)."' AND `Destination`='".mysql_real_escape_string($destination)."')";
$query_run=mysql_query($query);
//$query_num_rows=mysql_num_rows($query_run);
//echo $query_num_rows;
//$row1=mysql_fetch_array($query_run);
//echo $row1[1];
//echo $row1[0];
//echo $row1[1];
//$source1=mysql_result($query_run,0,'fid');
//echo $source1;
//$query="SELECT * FROM `f_dates` WHERE `fid`='".mysql_real_escape_string($source1)."'";
//$query_run=mysql_query($query);
$query_num_rows=mysql_num_rows($query_run);
//echo $query_num_rows;
while($query_num_rows){
	$row = mysql_fetch_array($query_run);
	$fid_select=$row['fid'];
    echo "<tr>";
	echo '<td style="border:2px solid black"><input type="radio" id="fs" value="'.$fid_select.'" name="fs"></input></td>';
	echo "<td style='border:2px solid black'>".$source."</td>";
//echo "<tr>Destination";
echo "<td style='border:2px solid black'>".$destination."</td>";
echo "<td style='border:2px solid black'>".$ddate."</td>";
echo "<td class='block32' style='border:2px solid black'>".$adate."</td>";
//echo "<td style='border:2px solid black'>".''."</td>";
    echo "<td style='border:2px solid black'> ". $row['d_time'] ."</td>";
    echo "<td style='border:2px solid black'>". $row['a_time'] ."</td>";
	echo "<td style='border:2px solid black'>". $row['duration'] ."</td>";
    echo "<td style='border:2px solid black'>" . $row['Price'] . "</td>";
   // echo "<td>" . $row['Hometown'] . "</td>";
   // echo "<td>" . $row['Job'] . "</td>";


//echo "</tr>";
//echo "<tr>Departure Date";
//echo "</tr>";
//echo "<tr>Arrival Date";
//echo "<td style='border:2px solid black'>".$adate."</td>";

/*$source2=mysql_result($query_run,0,'d_time');
$source3=mysql_result($query_run,0,'a_time');
$source4=mysql_result($query_run,0,'duration');
$source5=mysql_result($query_run,0,'Price');
echo "<td style='border:2px solid black'>".$source2."</td>";
echo "<td style='border:2px solid black'>".$source3."</td>";
echo "<td style='border:2px solid black'>".$source4."</td>";
echo "<td style='border:2px solid black'>".$source5."</td>";*/
echo "</tr>";
$query_num_rows=$query_num_rows-1;
}
echo "</table>";
echo "<input type='submit' id='fs1' name='fs1'></input>";
echo '</form>';
}
?>
<script src="Scripts/jquery-1.9.1.min.js"></script>
	<script type="text/javascript" src="js/jquery.js"></script>
	<script type="text/javascript" src="js/hide.js"></script>
	<script type="text/javascript" src="js/default.js"></script>
    <script src="Scripts/bootstrap.min.js"></script>
</body>
</html>