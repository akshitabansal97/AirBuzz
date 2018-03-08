<?php
require 'core.inc.php';
require 'connect.inc.php';
if(!loggedin()){
 if(isset($_POST['username'])&&isset($_POST['password'])&&isset($_POST['password_again'])&&isset($_POST['firstname'])&&isset($_POST['surname'])&&isset($_POST['mobile'])&&isset($_POST['email'])){
  $username=$_POST['username'];
  $password=$_POST['password'];
  $password_again=$_POST['password_again'];
  $firstname=$_POST['firstname'];
  $surname=$_POST['surname'];
  $mobile=$_POST['mobile'];
  $email=$_POST['email'];
  /*
  $query= 	call register_user('$username',@out);
  $query_run=mysql_query($query);
  select @out;
  
  */
  //$password_hash=md5($password);
  if(!empty($username)&&!empty($password)&&!empty($password_again)&&!empty($firstname)&&!empty($surname)&&!empty($_POST['mobile'])&&!empty($_POST['email'])){
   if(strlen($username)>30||strlen($firstname)>40||strlen($surname)>40||strlen($mobile)>10||strlen($email)>40){
    echo 'Please add maxlength of fields';
   }else{
    if($password!=$password_again){
     echo 'Password do not match';
    }else{
     $query="SELECT `username` FROM `users` WHERE `username`='$username'";
     $query_run=mysql_query($query);

     if(!$query_run||mysql_num_rows($query_run)==1){
      echo 'The username '.$username.' already exist.';
     }else{
      $query="INSERT into `users` VALUES('','".mysql_real_escape_string($username)."','".mysql_real_escape_string($password)."','".mysql_real_escape_string($firstname)."','".mysql_real_escape_string($surname)."','".mysql_real_escape_string($mobile)."','".mysql_real_escape_string($email)."')";
      if($query_run=mysql_query($query)){
		 echo "You have successfully registered";
	   header('Location:loginform.inc.php');  
	   
      }else{
          echo 'Sorry,we couldn\'t register you.Try again later.';
      }
     }
    }
   }
  }else{
    echo 'All fields req.';
  }
 }
}else if(loggedin()){
  echo 'You\'re already registered and logged in.';
}
?>
<html>
<head>
<title>REGISTER WITH US TO HELP</title>
<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/bootstrap-theme.min.css" rel="stylesheet">
    <link href="css/mystyle.css" rel="stylesheet">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
	<link href="register.css" rel="stylesheet" />
    <link href="Content/bootstrap.min.css" rel="stylesheet" />
</head>
<body>
<div class="main body">

        <div class="firstpage">
<br>

			<br>
			<br>
			<br>
   <div class="image">
                <img src="loginpic.png" align="center" height="250%" width="50%" />
            </div>
			<br>
			<br>
			<br>
			<br>
<div class="container">
        <form class="form-horizontal" method="POST" action="register.php">

		
			<label for="username" class="col-xs-12 col-sm-2 control-label">USER NAME</label>
            <div class="col-sm-10">
              <input type="text" class="form-control" id="username" value="<?php if(isset($username)){echo $username;}?>" name="username" placeholder="ENTER USERNAME">
            </div>
			
			<label for="password" class="col-xs-12 col-sm-2 control-label">PASSWORD</label>
            <div class="col-sm-10">
              <input type="password" class="form-control" id="pass" name="password" name="username" placeholder="ENTER PASSWORD">
            </div>

            <label for="password_again" class="col-xs-12 col-sm-2 control-label">CONFIRM PASSWORD</label>
            <div class="col-sm-10">
              <input type="password" class="form-control" id="password_again" name="password_again" placeholder="ENTER PASSWORD AGAIN">
            </div>
			
          <div class="form-group">
            <label for="firstname" class="col-xs-12 col-sm-2 control-label">FIRST NAME</label>
            <div class="col-sm-10">
              <input type="text" class="form-control" id="firstname" name="firstname" value="<?php if(isset($firstname)){echo $firstname;}?>"  placeholder="ENTER FIRST NAME" >
            </div>
            
            <label for="lastname" class="col-xs-12 col-sm-2 control-label">LAST NAME</label>
            <div class="col-sm-10">
              <input type="text" class="form-control" id="lastname" name="surname" value="<?php if(isset($surname)){echo $surname;}?>" placeholder="ENTER LAST NAME">
            </div>


            <label for="phone" class="col-xs-12 col-sm-2 control-label">PHONE NUMBER</label>
            <div class="col-sm-10">
              <input type="text" class="form-control" id="mobile" name="mobile" value="<?php if(isset($mobile)){echo $mobile;}?>" placeholder="ENTER PHONE NUMBER">
            </div><br>
			
			<label for="email" class="col-xs-12 col-sm-2 control-label">EMAIL</label>
            <div class="col-sm-10">
              <input type="email" class="form-control" id="email" name="email" value="<?php if(isset($email)){echo $email;}?>" placeholder="ENTER EMAIL ADDRESS">
            </div><br>
			<div class="col-sm-offset-2 col-sm-10">

		    			<input type="submit" value="REGISTER" class="btn btn-primary">
		    		  </div>

          </div>
        </form>
  </div></div></div>
  <script type="text/javascript" src="js/jquery.js"></script>
</body>
</html>






