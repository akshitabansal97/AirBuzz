<?php
require 'connect.inc.php';
require 'core.inc.php';
$uid=$_SESSION['user_id'];
$fid=$_SESSION['fs'];
$count=$_SESSION['count'];

//echo $count;
//echo '<br>';
//echo $fid;
//echo '<br>';
//echo $uid;
if(isset($_POST['cc-number'])&&isset($_POST['csc'])&&isset($_POST['cc-name'])&&isset($_POST['month'])&&isset($_POST['year'])){
	$number=$_POST['cc-number'];
	$cvv=$_POST['csc'];
	$name=$_POST['cc-name'];
	$month=$_POST['month'];
	$year=$_POST['year'];
	echo 'hi';
		//echo 'i';
		$query="INSERT into `card` VALUES('".mysql_real_escape_string($uid)."','".mysql_real_escape_string($fid)."','".mysql_real_escape_string($number)."','".mysql_real_escape_string($cvv)."','".mysql_real_escape_string($name)."','".mysql_real_escape_string($month)."','".mysql_real_escape_string($year)."')";	
		$query_run=mysql_query($query);
		if($query_run){
			header('Location:ticket.php');
		}else{
			//echo 'no';
			header('Location:ticket.php');
		}
	
}
?>

<!DOCTYPE html>
<html >
<head>
  <meta charset="UTF-8">
  <title>Credit Card Checkout</title>
  <script src="https://use.typekit.net/zyp8rla.js"></script>
<script>try{Typekit.load({ async: true });}catch(e){}</script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css">

  
      <link rel="stylesheet" href="css/style.css">

  
</head>

<body>
  
<main>
  <h1>Checkout</h1>
 <!-- <p>Select one of these payment methods</p>
  <div class="alternate-payment">
    <button type="button" class="btn btn-paypal">Paypal</button>
    <button type="button" class="btn btn-coinbase">Coinbase</button>
  </div>-->
  <p>Enter your credit card information</p>
  <form class="ccjs-card" action="creditcard.php" method="POST">
    <div class="row">
      <fieldset class="number">
        <label class="ccjs-number">Card Number
          <input name="cc-number" maxlength="19" placeholder="•••• •••• •••• ••••" class="ccjs-number"/>
        </label>
      </fieldset>
      <fieldset class="security">
        <label class="ccjs-csc">Security Code
          <input name="csc" maxlength="3" placeholder="•••" class="ccjs-csc"/>
        </label>
      </fieldset>
      <!--button.ccjs-csc-help(type='button') ?-->
    </div>
    <div class="row">
      <fieldset class="name">
        <label class="ccjs-name">Name on Card
          <input name="cc-name" placeholder="John Dough" class="ccjs-name"/>
        </label>
      </fieldset>
      <fieldset class="ccjs-expiration">
        <legend class="expiration">Expiration</legend>
        <div class="row">
          <select name="month" class="ccjs-month">
            <option selected="" disabled="">MM</option>
            <option value="01">01</option>
            <option value="02">02</option>
            <option value="03">03</option>
            <option value="04">04</option>
            <option value="05">05</option>
            <option value="06">06</option>
            <option value="07">07</option>
            <option value="08">08</option>
            <option value="09">09</option>
            <option value="10">10</option>
            <option value="11">11</option>
            <option value="12">12</option>
          </select>
          <select name="year" class="ccjs-year">
            <option selected="" disabled="">YY</option>
            <option value="15">15</option>
            <option value="16">16</option>
            <option value="17">17</option>
            <option value="18">18</option>
            <option value="19">19</option>
            <option value="20">20</option>
            <option value="21">21</option>
            <option value="22">22</option>
            <option value="23">23</option>
            <option value="24">24</option>
            <option value="25">25</option>
          </select>
        </div>
      </fieldset>
    </div>
    <input type="submit" class="btn btn-primary">Checkout</button>
  </form>
  
</main>
  <script src='https://s3-us-west-2.amazonaws.com/s.cdpn.io/14625/creditcardjs-v0.10.12.min.js'></script>

  
</body>
</html>
