<?php

?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <style>
    *{
      color:#0ef;
      font-family:sans-serif;
      box-sizing:border-box;
    }
    body{
      display:flex;
      flex-direction:column;
      justify-content:center;
      align-items:center;
      background-color: #1f242d;
      margin:auto;
      height:100vh
    }
    form{
      width: 500px;
      border: 2px solid #ccc;
      padding: 30px;
      background: #323946;
      border-radius: 15px;
    }
    .input-user{
      display: block;
      border: 2px solid #ccc;
      width: 95%;
      padding: 10px;
      margin: 10px;
      background-color: #1f242d;
      border-radius: 10px;
    }
    .btn-register{
      display: flex;
      flex-direction: column;
      width:50%;
      font-size:16px;
      font-weight:bold;
      padding:10px;
      padding-left: 75px;
      border-radius: 10px;
      color: black;
      width:50%;
      background: #0ef;
      margin:auto;
      margin-bottom: 10px;
      text-decoration:none;
    }
    .btn-register:hover{
      opacity: .7;
    }
    
    label{
      padding: 10px;
    }
    h1{
      text-align: center;
      margin-bottom: 40px;
    }
    p{
      font-size:14px;
      margin-top:30px;
      margin-bottom:0;
      text-align:center;
    }
  </style>

  <title>Login</title>
</head>
<body>
  <form action="auth/handle_register.php" method="post">
    <div class="container">
      <h1>REGISTER NOW!</h1>
        <label for="name">Name : </label>
        <input class="input-user" type="text" name="name" id="name" required>
    
        <label for="email">Email : </label>
        <input class="input-user" type="email" name="email" id="email" required>
      
        <label for="address">Address : </label>
        <input class="input-user" type="text" name="address" id="address">

        <div class="gender">
          <label for="gender">Gender : </label>
          <input type="radio" name="gender" id="male" value="L">
          <label for="male">Male</label>
          <input type="radio" name="gender" id="female" value="P">
          <label for="female">Female</label>
        </div>

        <br>
        <label for="username">Username : </label>
        <input class="input-user" type="text" name="username" id="username" required>
    
        <label for="password">Password : </label>
        <input class="input-user" type="password" name="password" id="password" required>
      
        <input class="btn-register" type="submit" value="Register" name="register">
      
    </div>
    <p>Copyright &copy; 2023 by TejaKusumah | All Rights Reserved</p>
  </form>
</body>
</html>