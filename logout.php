<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="./css/bootstrap.css">
</head>
<body class="bg-dark">
  <div class="container mt-4">
    <div class="row">
        <div class="col-4">
            <div>
                <a href="login.php">
                    <button class="btn btn-danger text-white mb-3" style="width:200px">Login</button>
                </a>
            </div>
            <div>
                <a href="register.php">
                    <button class="btn btn-primary text-white mb-3" style="width:200px">Register</button>
                </a>
            </div>
            <div>
                <a href="logout.php">
                    <button class="btn btn-success text-white mb-3" style="width:200px">Logout</button>
                </a>
            </div>
        </div>
        <div class="col-5">
          <div class="bg-success text-white text-center py-2">
            <b>Logout Success</b>
          </div>
        </div>
    </div>
  </div>
</body>
<?php
session_start();
session_destroy();
 ?>
<script src="./js/bootstrap.js"></script>  
</html>