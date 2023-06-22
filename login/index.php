<?php

session_start();

if (!isset($_SESSION["username"])) {
  header("Location: login.php");
}

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
    a{
      /* margin:auto; */
      font-size:20px;
      text-decoration:none;
    }
    p{
      font-size:14px;
      margin-top:300px;
      text-align:center;
    }
  </style>

  <title>Hi, <?php echo $_SESSION["username"] ?>!</title>
</head>
<body>
  <h1>Horeee... <?php echo $_SESSION["username"] ?> , your login access is successful.</h1>
  <a href="logout.php">Logout</a>
  <p>Copyright &copy; 2023 by TejaKusumah | All Rights Reserved</p>
</body>
</html>