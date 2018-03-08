<?php
require 'connect.inc.php';
echo "hi";
if(isset($_POST['source'])){
$source=$_POST['source'];
//$destination=$_POST['destination'];
$query="SELECT `Source` FROM `flights` WHERE `Source`='".mysql_real_escape_string($source)."'";
$query_run=mysql_query($query);
  if($query_run){
	 // header('Location:new1.php');
	  //output($source);
	  echo "bye";
 $query_num_rows=mysql_num_rows($query_run);
  if($query_num_rows==1){
     echo "got";
    //header('Location:index_back.php');
   }else{
     echo 'Wrong username/password match';
   }
  }
}
?>
  <form action="new1.php" method="post">
 
                        <input type="text" name="source">
          
					</form>
				