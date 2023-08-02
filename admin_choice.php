<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
.button {
  background-color: #1fa2c5;
  border: none;
  color: black;
  padding: 10px 20px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  margin: 4px 2px;
  cursor: pointer;
  border-radius: 16px;
}

body{
	margin: 0;
	padding: 0;
	display: flex;
	justify-content: center;
	align-items: center;
  color: #FFFF;
	min-height: 100vh;
	font-family: 'Jost', sans-serif;
	background-color: #001920;
}


.button:hover {
  background-color: #f1f1f1;
}
</style>
</head>
<body>
<div class="choice" >
<img src="product-images/Bookvendor_logo.jpeg" alt="Logo">
&nbsp;&nbsp;&nbsp;&nbsp;
  <h2>What would you like to do?</h2>
  
  
  <button type="submit" name="submit" class="button"><a href="studentFE.php">Student Info</a></button> 
  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
  <button type="submit" name="submit" class="button"><a href="bookFE.php">Book Info</a></button>
</div>
</body>
</html>
