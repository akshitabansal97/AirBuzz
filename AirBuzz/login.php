<?php
if(isset($_POST['username'])&&isset($_POST['password'])){
 $username=$_POST['username'];
 $password=$_POST['password'];
// $password_hash=md5($password);
 if(!empty($username)&&!empty($password)){
  $query="SELECT `id` FROM `users` WHERE `username`='".mysql_real_escape_string($username)."' AND `password`='".mysql_real_escape_string($password)."'";
  $query_run=mysql_query($query);
  if($query_run){
  //  echo "yes";
 $query_num_rows=mysql_num_rows($query_run);
 //echo "asd";
  if($query_num_rows==1){
     $user_id=mysql_result($query_run,0,'id');
     $_SESSION['user_id']=$user_id;
	// echo "hi";
    header('Location:index_back.php');
   }else{
     echo 'Wrong username/password match';
   }
  }
  else echo "not";
 }
 else{
  echo 'You must supply a username and password';
 }
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
	<link href="login_page_layout.css" rel="stylesheet" />
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
        <form class="form-horizontal" method="POST" action="index_back.php">

		
			<label for="username" class="col-xs-12 col-sm-2 control-label">USER NAME</label>
            <div class="col-sm-10">
              <input type="text" class="form-control" id="username" value="<?php if(isset($username)){echo $username;}?>" name="username" placeholder="ENTER USERNAME">
            </div>
			
			<label for="password" class="col-xs-12 col-sm-2 control-label">PASSWORD</label>
            <div class="col-sm-10">
              <input type="password" class="form-control" id="pass" name="password" name="username" placeholder="ENTER PASSWORD">
            </div>

            <br>
			<div class="col-sm-offset-2 col-sm-10">

		    			<input type="submit" value="REGISTER" class="btn btn-primary">
		    		  </div>

          </div>
        </form>
  </div></div></div>
  <script type="text/javascript" src="js/jquery.js"></script>
</body>
</html>






