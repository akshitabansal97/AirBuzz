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
  <form class="ccjs-card">
    <div class="row">
      <fieldset class="number">
        <label class="ccjs-number">Card Number
          <input name="cc-number" placeholder="•••• •••• •••• ••••" class="ccjs-number"/>
        </label>
      </fieldset>
      <fieldset class="security">
        <label class="ccjs-csc">Security Code
          <input name="csc" placeholder="•••" class="ccjs-csc"/>
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
    <select name="card-type" class="ccjs-hidden-card-type">
      <option value="amex" class="ccjs-amex">American Express</option>
      <option value="discover" class="ccjs-discover">Discover</option>
      <option value="mastercard" class="ccjs-mastercard">MasterCard</option>
      <option value="visa" class="ccjs-visa">Visa</option>
      <option value="diners-club" class="ccjs-diners-club">Diners Club</option>
      <option value="jcb" class="ccjs-jcb">JCB</option>
      <!-- <option value="laser" class="laser">Laser</option>-->
      <!-- <option value="maestro" class="maestro">Maestro</option>-->
      <!-- <option value="unionpay" class="unionpay">UnionPay</option>-->
      <!-- <option value="visa-electron" class="visa-electron">Visa Electron</option>-->
      <!-- <option value="dankort" class="dankort">Dankort</option>-->
    </select>
  </form>
  <button type="button" class="btn btn-primary">Checkout</button>
</main>
  <script src='https://s3-us-west-2.amazonaws.com/s.cdpn.io/14625/creditcardjs-v0.10.12.min.js'></script>

  
</body>
</html>
