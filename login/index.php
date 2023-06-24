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
    section{
      height: 100vh;
    }
    .logout-btn{
      font-size:25px;
      font-weight: bold;
      text-decoration: none;
      color: black;
    }
    section {
      display:flex;
      flex-direction: column;
      justify-content: center;
      text-align: center;
      gap: 23px;
    }
    p{
      font-size:14px;
      margin-top:300px;
      text-align:center;
    }

    button{
      background-color: #0ef;
      border-radius: 30px;
      height: 5vh;
      margin-top: 3rem;
    }
    .footer{
      display:flex;
      flex-direction: column;
      
    }
  </style>

  <title>Hi, <?php echo $_SESSION["username"] ?>!</title>
</head>
<body>
  <section>
    <div class="text-content">
      <h1>Horeee... <?php echo $_SESSION["username"] ?> , your login access is successful.</h1>
      <h3> Masuk Ke Halaman <a class="masukWeb" href="portfolio.html"> WEB DESA CIAPUS</a> </h3>
    </div>
  </section>

  <section class="footer">
    <button >
      <a class="logout-btn" href="logout.php">Logout</a>
    </button>
      <p>Copyright &copy; 2023 by TejaKusumah | All Rights Reserved</p>
  </section>
</body>
</html>