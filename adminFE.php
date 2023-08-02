<?php include('adminBE.php'); ?>
<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
body {font-family: Arial, Helvetica, sans-serif;
  background-color: #001920;}
form {border: 3px solid #f1f1f1;}

input[type=text], input[type=password] {
  width: 100%;
  padding: 12px 20px;
  margin: 8px 0;
  display: inline-block;
  border: 1px solid #ccc;
  box-sizing: border-box;
}

button {
  background-color: #1fa2c5;
  color: white;
  padding: 14px 20px;
  margin: 8px 0;
  border: none;
  cursor: pointer;
  width: 100%;
}

button:hover {
  opacity: 0.8;
}

.cancelbtn {
  width: auto;
  padding: 10px 18px;
  background-color: #f44336;
}

.imgcontainer {
  text-align: center;
  margin: 24px 0 12px 0;
}

.container {
  padding: 16px;
  color:#FFFFFF;
}

span.psw {
  float: right;
  padding-top: 16px;
}

h2 {
  color:#FFFFFF;
}

p {
  color:#FFFFFF;
}

.clearfix::after {
  content: "";
  display: table;
}

/* Change styles for span and cancel button on extra small screens */
@media screen and (max-width: 300px) {
  span.psw {
     display: block;
     float: none;
  }
  .cancelbtn {
     width: 100%;
  }
}
</style>
</head>
<body>

<h2>Admin Login</h2>

<form action="" method="POST">
  <div class="imgcontainer">
  <img src="product-images/Bookvendor_logo.jpeg" alt="Logo" width="150" height="95">
  </div>

  <div class="container">
    <label for="a_Email"><b>Email</b></label>
    <input type="text" placeholder="Enter Admin Email" name="a_Email" required>


    <label for="psw"><b>Password</b></label>
    <input type="password" placeholder="Enter Password" name="a_Pass" required>
        
    <button type="submit" name="login" >Login</button>
    
    <label>
      <input type="checkbox" checked="checked" name="remember"> Remember me
    </label>
  </div>

  <p>Back to registration? <a href="sloginFE.php" style="color:dodgerblue">Login Page</a>.</p>

  <div class="clearfix">
      <button type="reset" class="cancelbtn">Clear</button>
    </div>
</form>

</body>
</html>