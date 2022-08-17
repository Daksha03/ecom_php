<?php
  ob_start();
  include 'connection.php';
  include 'functions.php';
  $page = 'Login';
?>
<!DOCTYPE html>

<html>

<head>
    <link rel="icon" type="image/png" href="../pics/logo_icon.png">
    <title>Login page</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

    <link rel="stylesheet" type="text/css" href="../css/css.css">

</head>

<body onbeforeunload="pageAnalytics()">
    <?php
        @$msg = $_GET['msg'];
        if($msg == 1){
          echo 'Registration Successfull. Login to continue';
        }

        if(isset($_POST['mobile'])&&isset($_POST['password'])){
          $mobile = $_POST['mobile'];
          $password = $_POST['password'];
          $pass = md5($password);

          $select = mysqli_query($conn,"SELECT * FROM users WHERE mobile='".mysqli_real_escape_string($conn,$mobile)."' AND password='".mysqli_real_escape_string($conn,$pass)."'");
          if(mysqli_num_rows($select)==1){
            $s = mysqli_fetch_array($select);
            $uid = $s['id'];
            $_SESSION['user_id'] = $uid;

            if(isset($_POST['remember'])){
              setcookie('mobilecookie',$mobile,time()+86400);
              setcookie('passwordcookie',$password,time()+86400);
              header('Location:Home Page.php');
            }
            else{
            header('Location:Home Page.php');
            }
          }
        }
      ?>
    <form action="Login.php" style="max-width:500px; margin:auto" method="POST">
        <div>
            <a href="signup.php" class="back-icon"></a>
        </div>

        <div class="main-container">

            <center><div class="img"><img src="../pics/logo_icon.png" align="logo"></div></center>

            <div class="title">
                <label for="login">Login</label>
            </div>

            <div class="form-group">
                <div class="phone">
                    <input type="tel" name="mobile" class="form-control" pattern="[7-9]{1}[0-9]{9}" required
                        maxlength="10" required title="Must start with 7 to 9 and the length should be 10"
                        value="<?php if(isset($_COOKIE['mobilecookie'])) {echo $_COOKIE['mobilecookie'];}?>">
                    <label for="mn" class="mn">Mobile Number *</label>
                </div>
            </div>

            <div class="form-group">
                <div class="password">
                    <input type="password" name="password" class="form-control" required

                      maxlength="10"  value="<?php if(isset($_COOKIE['passwordcookie'])){echo $_COOKIE['passwordcookie'];} ?>">
                    <label for="pwd" class="psw">Password</label>
                </div>
            </div>
            <div class="form-group">
                <input type="checkbox" name="remember">&nbsp;&nbsp;Remember me
            </div>

            <div>
                <button type="submit" class="log-button">Login</button>
            </div>

            <div class="text-link">
                <label for="text">Don't have one</label>
                <a href="signup.php">Create a new account</a>
            </div>

        </div>

        <!--===============================================================================================-->
        <script src="vendor/jquery/jquery-3.2.1.min.js"></script>
        <!--===============================================================================================-->
        <script src="vendor/animsition/js/animsition.min.js"></script>
        <!--===============================================================================================-->
        <script src="vendor/bootstrap/js/popper.js"></script>
        <script src="vendor/bootstrap/js/bootstrap.min.js"></script>
        <!--===============================================================================================-->
        <script src="vendor/select2/select2.min.js"></script>
        <!--===============================================================================================-->
        <script src="vendor/daterangepicker/moment.min.js"></script>
        <script src="vendor/daterangepicker/daterangepicker.js"></script>
        <!--===============================================================================================-->
        <script src="vendor/countdowntime/countdowntime.js"></script>
        <!--===============================================================================================-->
        <script src="../scripts/main.js"></script>
        <script src="../scripts/custom.js"></script>

</body>

</html>
