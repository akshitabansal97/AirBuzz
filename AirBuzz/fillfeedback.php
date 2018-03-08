<?php
require 'connect.inc.php';
require 'core.inc.php';

if(isset($_POST['name4'])&&isset($_POST['email4'])&&isset($_POST['ph_no4'])&&isset($_POST['msg4'])){
 $name4=$_POST['name4'];
 $email4=$_POST['email4'];
 $num4=$_POST['ph_no4'];
 $msg4=$_POST['msg4'];
 echo $name4;
 echo $email4;
 echo $num4;
 echo $msg4;
 $sql="INSERT INTO `feedback` VALUES ('".$name4."','".$email4."','".$num4."','".$msg4."')";
 $var=mysql_query($sql);
 header('location:index2.php');
 
}
?>