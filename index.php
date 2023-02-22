<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="./css/bootstrap.css">
</head>
<body class="">
   
  <div class="container mt-4">
    <div class="row">
        <div class="col-md-3">
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
        <div class="col-md-8">
            <div class="card">
                <div class="card-body">
                    Login
                    <form action="" method="post">
                    <div class="mb-3">
                        <label for="">Email</label>
                        <input type="email" name="userEmail" id="" class="form-control">
                    </div>
                    <div class="mb-3">
                        <label for="">Password</label>
                        <input type="password" name="userPassword" id="" class="form-control">
                    </div>
                    <div class="mb-3">
                        <button type="submit" name="login"  class="btn bg-dark text-white float-end">Login</button>
                    </div>
                    </form>
                </div>
                
            </div>
        </div>
    </div>
  </div>
  <?php
   session_start();
  if (isset($_POST['login'])){
      $userEmail = $_POST['userEmail'];
      $userPassword = $_POST['userPassword'];
      if($userEmail != "" || $userPassword != ""){
         if($userEmail == $_SESSION['email'] && password_verify($userPassword,$_SESSION['password'])){
          echo "Login Success";
        }else{
            echo "Login Fail! Try Again";
        }
      }else{
          echo "Need to Fail Data !";
      }

     
  }
  
  ?>
</body>
<script src="./js/bootstrap.js"></script>  
</html>