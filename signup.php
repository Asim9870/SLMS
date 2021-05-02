<?php
?>
<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
body {font-family: Arial, Helvetica, sans-serif;}
form {border: 3px solid #f1f1f1;margin-left: 15%;margin-right: 15%}

input[type=text], input[type=password] {
  width: 100%;
  padding: 12px 20px;
  margin: 8px 0;
  display: inline-block;
  border: 1px solid #ccc;
  box-sizing: border-box;
}

button {
  background-color: #4285F4;
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

img.login {
  width: 20%;
  border-radius: 50%;
}

.container {
  padding: 16px;
}

span.psw {
  float: right;
  padding-top: 16px;
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
    <h2 style="text-align: center">CREATE YOUR ACCOUNT</h2>
    <form action="/signup.php" method="post" style="padding-left: 20%;padding-right: 20%">
  <div class="imgcontainer">
      <img src="./img/logo.png" alt="Image Not Available" class="login">
  </div>
  <div class="container">
    <label for="fname"><b>Full Name</b></label>
    <input type="text" placeholder="Enter Your Full Name" name="fname" required>
    <label for="cnumber"><b>Phone Number</b></label>
    <input type="text" placeholder="Enter Your Contact Number" name="cnumber" required>
    <label for="uname"><b>User Name</b></label>
    <input type="text" placeholder="User Name" name="uname" required>
    <label for="pword"><b>Password</b></label>
    <input type="password" placeholder="Enter Password" name="pword" required>
    <label for="cpword"><b>Confirm Password</b></label>
    <input type="password" placeholder="Confirm Password" name="cpword" required>
        
    <button type="submit">Create Account</button>
  </div>

</form>

</body>
</html>
