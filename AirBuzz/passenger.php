<?php
require 'connect.inc.php';
require 'core.inc.php';
session_start();
$uid=$_SESSION['user_id'];
//echo $uid;
$flight=$_SESSION['fs'];
//echo $flight;
$count=0;
if(isset($_POST['name1'])&&isset($_POST['mobile1'])&&isset($_POST['age1'])){
	$name=$_POST['name1'];
	$mobile=$_POST['mobile1'];
	$age=$_POST['age1'];
	//echo $name;
	if(!empty($name)&&!empty($mobile)&&!empty($age)){
		$count++;
		$query="INSERT into `passenger` VALUES('".mysql_real_escape_string($uid)."','".mysql_real_escape_string($flight)."','".mysql_real_escape_string($name)."','".mysql_real_escape_string($mobile)."','".mysql_real_escape_string($age)."')";
		$query_run=mysql_query($query);
		/*if($query_run){
			echo 'yes';
		}else{
			echo 'no';
		}*/
	}else{
		echo 'Please fill details of atleast one passenger';
	}
}
if(isset($_POST['name2'])&&isset($_POST['mobile2'])&&isset($_POST['age2'])){
	$name=$_POST['name2'];
	$mobile=$_POST['mobile2'];
	$age=$_POST['age2'];
	//echo $name;
	if(!empty($name)&&!empty($mobile)&&!empty($age)){
		$count++;
		$query="INSERT into `passenger` VALUES('".mysql_real_escape_string($uid)."','".mysql_real_escape_string($flight)."','".mysql_real_escape_string($name)."','".mysql_real_escape_string($mobile)."','".mysql_real_escape_string($age)."')";
		$query_run=mysql_query($query);
		/*if($query_run){
			echo 'yes';
		}*/
	}
}
if(isset($_POST['name3'])&&isset($_POST['mobile3'])&&isset($_POST['age3'])){
	$name=$_POST['name3'];
	$mobile=$_POST['mobile3'];
	$age=$_POST['age3'];
	//echo $name;
	if(!empty($name)&&!empty($mobile)&&!empty($age)){
		$count++;
		$query="INSERT into `passenger` VALUES('".mysql_real_escape_string($uid)."','".mysql_real_escape_string($flight)."','".mysql_real_escape_string($name)."','".mysql_real_escape_string($mobile)."','".mysql_real_escape_string($age)."')";
		$query_run=mysql_query($query);
		/*if($query_run){
			echo 'yes';
		}*/
	}
}
if(isset($_POST['name4'])&&isset($_POST['mobile4'])&&isset($_POST['age4'])){
	$name=$_POST['name4'];
	$mobile=$_POST['mobile4'];
	$age=$_POST['age4'];
	//echo $name;
	if(!empty($name)&&!empty($mobile)&&!empty($age)){
		$count++;
		$query="INSERT into `passenger` VALUES('".mysql_real_escape_string($uid)."','".mysql_real_escape_string($flight)."','".mysql_real_escape_string($name)."','".mysql_real_escape_string($mobile)."','".mysql_real_escape_string($age)."')";
		$query_run=mysql_query($query);
		/*if($query_run){
			echo 'yes';
		}*/
	}
}
if(isset($_POST['name5'])&&isset($_POST['mobile5'])&&isset($_POST['age5'])){
	$name=$_POST['name5'];
	$mobile=$_POST['mobile5'];
	$age=$_POST['age5'];
	//echo $name;
	if(!empty($name)&&!empty($mobile)&&!empty($age)){
		$count++;
		$query="INSERT into `passenger` VALUES('".mysql_real_escape_string($uid)."','".mysql_real_escape_string($flight)."','".mysql_real_escape_string($name)."','".mysql_real_escape_string($mobile)."','".mysql_real_escape_string($age)."')";
		$query_run=mysql_query($query);
		/*if($query_run){
			echo 'yes';
		}*/
	}
}
if(isset($_POST['name6'])&&isset($_POST['mobile6'])&&isset($_POST['age6'])){
	$name=$_POST['name6'];
	$mobile=$_POST['mobile6'];
	$age=$_POST['age6'];
	//echo $name;
	if(!empty($name)&&!empty($mobile)&&!empty($age)){
		$count++;
		$query="INSERT into `passenger` VALUES('".mysql_real_escape_string($uid)."','".mysql_real_escape_string($flight)."','".mysql_real_escape_string($name)."','".mysql_real_escape_string($mobile)."','".mysql_real_escape_string($age)."')";
		$query_run=mysql_query($query);
		/*if($query_run){
			echo 'yes';
		}*/
	}
}
 $_SESSION['count']=$count;

$query="SELECT `Price` FROM `f_dates` WHERE `fid`='".mysql_real_escape_string($flight)."'";
$query_run=mysql_query($query);
$price=mysql_result($query_run,0,'Price');
//echo "Total: ";
//echo $price*$count;
header('Location:creditcard.php');
?>


<!--<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN"  "http://www.w3.org/TR/html4/loose.dtd"> 
<html> 
<head> 
<title>Untitled Document</title> 
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1"> 
<meta http-equiv="Content-Style-Type" content="text/css"> 
<meta http-equiv="Content-Script-Type" content="text/javascript"> 
<script type="text/JavaScript"> 
function addRow(r){ 
var root = r.parentNode;//the root 
var allRows = root.getElementsByTagName('tr');//the rows' collection 
var cRow = allRows[0].cloneNode(true)//the clone of the 1st row 
var cInp = cRow.getElementsByTagName('input');//the inputs' collection of the 1st row 
for(var i=0;i<cInp.length;i++){//changes the inputs' names (indexes the names) 
cInp[i].setAttribute('name',cInp[0].getAttribute('name')+'_'+(allRows.length+1)) 
} 
var cSel = cRow.getElementsByTagName('select')[0]; 
cSel.setAttribute('name',cSel.getAttribute('name')+'_'+(allRows.length+1));//change the selecet's name 
root.appendChild(cRow);//appends the cloned row as a new row 
} 
</script> 
</head> 
<body> 
<form action="payment.php" method="POST"> 
  <table width="766"  border="0" cellspacing="0" cellpadding="0"> 
    <tr> 
      <td width="191"><input type="text" name="name" maxlength="30" placeholder="Enter Name of Person"/></td> 
      <td width="191"><input type="number-format" name="mobile" maxlength="10" placeholder="Enter Mobile No of Person"/></td> 
      <td width="191"><input type="number-format" name="age" maxlength="2" placeholder="Enter Age of Person"/></td> 

      <td width="98"><select name="select"> 
        <option value="item1" selected="selected">1st Person</option> 
        <option value="item2">2nd Person</option> 
        <option value="item3">3rd Person</option> 
        <option value="item4">4th Person</option> 
        <option value="item5">5th Person</option> 
        <option value="item5">6th Person</option> 
        <option value="item5">7th Person</option> 
        <option value="item5">8th Person</option> 
        <option value="item5">9th Person</option> 
        <option value="item5">10th Person</option> 

      </select></td> 
      <td width="286"><input name="button" type="button" value="+" onclick="addRow(this.parentNode.parentNode)"></td> 
    </tr> 
  </table><br /><br /> 
  <input name="Submit" type="submit" value="Submit" /> 
</form> 
</body> 
</html>  -->
<!--
<html>
<head>
</head>
<body>
<form action="passenger.php" method="POST"> 
  <table width="766"  border="0" cellspacing="0" cellpadding="0"> 
    <tr> 
      <td width="191"><input type="text" name="name1" maxlength="30" placeholder="Enter Name of Person 1"/></td> 
      <td width="191"><input type="number-format" name="mobile1" maxlength="10" placeholder="Enter Mobile No of Person 1"/></td> 
      <td width="191"><input type="number-format" name="age1" maxlength="2" placeholder="Enter Age of Person 1"/></td> 
	</tr>
	<tr>
<td width="191"><input type="text" name="name2" maxlength="30" placeholder="Enter Name of Person 2"/></td> 
      <td width="191"><input type="number-format" name="mobile2" maxlength="10" placeholder="Enter Mobile No of Person 2"/></td> 
      <td width="191"><input type="number-format" name="age2" maxlength="2" placeholder="Enter Age of Person 2"/></td> 
</tr><tr>
<td width="191"><input type="text" name="name3" maxlength="30" placeholder="Enter Name of Person 3"/></td> 
      <td width="191"><input type="number-format" name="mobile3" maxlength="10" placeholder="Enter Mobile No of Person 3"/></td> 
      <td width="191"><input type="number-format" name="age3" maxlength="2" placeholder="Enter Age of Person 3"/></td> 
</tr><tr>
<td width="191"><input type="text" name="name4" maxlength="30" placeholder="Enter Name of Person 4"/></td> 
      <td width="191"><input type="number-format" name="mobile4" maxlength="10" placeholder="Enter Mobile No of Person 4"/></td> 
      <td width="191"><input type="number-format" name="age4" maxlength="2" placeholder="Enter Age of Person 4"/></td> 
</tr><tr>
<td width="191"><input type="text" name="name5" maxlength="30" placeholder="Enter Name of Person 5"/></td> 
      <td width="191"><input type="number-format" name="mobile5" maxlength="10" placeholder="Enter Mobile No of Person 5"/></td> 
      <td width="191"><input type="number-format" name="age5" maxlength="2" placeholder="Enter Age of Person 5"/></td> 
</tr><tr>
<td width="191"><input type="text" name="name6" maxlength="30" placeholder="Enter Name of Person 6"/></td> 
      <td width="191"><input type="number-format" name="mobile6" maxlength="10" placeholder="Enter Mobile No of Person 6"/></td> 
      <td width="191"><input type="number-format" name="age6" maxlength="2" placeholder="Enter Age of Person 6"/></td> 
      
    </tr> 
  </table><br /><br /> 
  <input name="Submit" type="submit" value="Submit" /> 
</form> 