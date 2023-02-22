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
                    Register
                    <form action="" method="POST">
                    <div class="mb-3">
                        <label for="">Name</label>
                        <input type="text" name="name" id="" class="form-control">
                    </div>
                    <div class="mb-3">
                        <label for="">Email</label>
                        <input type="email" name="email" id="" class="form-control">
                    </div>
                    <div class="mb-3">
                        <label for="">Password</label>
                        <input type="password" name="password" id="" class="form-control">
                    </div>
                    <div class="mb-3">
                        <label for="">Confirm Password</label>
                        <input type="password" name="confirmPassword" id="" class="form-control">
                    </div>
                    <div class="mb-3">
                        <button type="submit" name="register"  class="btn bg-dark text-white float-end">Register</button>
                    </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
  </div>
  <?php
    session_start();
    function checkStrongPassword($password){
      $upperStatus = false;
      $lowerStatus = false;
      $numberStatus = false;
      $specialStatus = false;
      if(preg_match('/[A-Z]/',$password)){
        $upperStatus = true;
      }
      if(preg_match('/[a-z]/',$password)){
        $lowerStatus = true;
      }
      if(preg_match('/[0-9]/',$password)){
        $numberStatus = true;
      }
      if(preg_match('/[!@#$%&*^]/',$password)){
        $specialStatus = true;
      }
      if($upperStatus && $lowerStatus && $numberStatus && $specialStatus ){
          return true;
      }
      else{
          return false;
      }
    }
 
    if(isset($_POST['register'])){
        $name = $_POST['name'];
        $email = $_POST['email'];
        $password = $_POST['password'];
        $confirmPassword = $_POST['confirmPassword'];
        if($name != "" && $email != "" && $password != "" && $confirmPassword != ""){
            if(strlen($password) >= 6 && strlen($confirmPassword) >= 6){
                if($password == $confirmPassword){
                    $status = checkStrongPassword($password);
                    if($status){
                        $_SESSION['email'] = $email;
                        $_SESSION['password'] = password_hash($password,PASSWORD_BCRYPT);
                        echo "Register Success!";
                    }else{
                      echo "Your password is not strong Password(eg. contain A-Z a-z 0-9 !@#$%^&";
                    } 
                }else{
                        echo "Password not same. Type Agian!";
                }
            }
            else{
                echo "Password must be greater than or equal 6";
            }
        }else{
            echo "Please Fill Data";
        }
    }
  ?>
</body>
<script src="./js/bootstrap.js"></script>  
</html>