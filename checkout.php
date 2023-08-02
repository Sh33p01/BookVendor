<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
body {
  font-family: Arial, Helvetica, sans-serif;
  margin: 0;
}

html {
  box-sizing: border-box;
}

*, *:before, *:after {
  box-sizing: inherit;
}

.column {
  float: left;
  width: 33.3%;
  margin-bottom: 16px;
  padding: 0 8px;
}

.card {
  box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
  margin: 8px;
}

.checkout-section {
  padding: 50px;
  text-align: center;
  background-color: #001920;
  color: white;
}

.container {
  padding: 0 16px;
}

.container::after, .row::after {
  content: "";
  clear: both;
  display: table;
}

.title {
  color: grey;
}

.button {
  border: none;
  outline: 0;
  display: inline-block;
  padding: 8px;
  color: white;
  background-color: #000;
  text-align: center;
  cursor: pointer;
  width: 100%;
}

.button:hover {
  background-color: #555;
}

@media screen and (max-width: 650px) {
  .column {
    width: 100%;
    display: block;
  }
}
</style>
</head>
<body>

<div class="checkout-section">
  <h1>About To Checkout</h1>
  <p>Dear valued customer, we thank you for supporting us and we hope you have a wonderful day.</p>
  <p>Your order number is: 15879465#</p>
</div>

<h2 style="text-align:center">Information</h2>
<div style="text-align:center" class="row">
  <div class="column">
    <div class="card">
      <div class="container">
        <h2>Best wishes from the team</h2>
        <p class="title">Please click on the button below the proceed to login</p>
        <p>Any queries? Email us at:</p>
        <p>website@bookvendor.co.za</p>
        <button type="submit" name="submit" class="button"><a href="sloginFE.php">Log-out</a></button>
      </div>
    </div>
  </div>

 
</div>

</body>
</html>
