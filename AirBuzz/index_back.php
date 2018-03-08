<?php
require 'core.inc.php';
require 'connect.inc.php';

if(loggedin()){
 include 'details.php';
}else{
 include 'loginform.inc.php';
}

?>