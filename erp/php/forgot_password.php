<!DOCTYPE html>
<html>
    <head>
      <link rel="icon" type="image/png" href="../pics/logo_icon.png">
        <title>Forgot_password</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
            
         <link rel="stylesheet" type="text/css" href="../css/css.css">

         
    </head>
    <body>
      <form action="/action_page.php" style="max-width:500px; margin:auto" method="POST">
      <div >
        <a href="Login.php" class="back-icon"></a>
      </div>

      <div class="main-container5">
        <div class="title1">
            <label for="sign up on expresso">Password assistance</label>
        </div>
        <div >
            <label for="text" class="text_password">Enter the mobile number associated with your Expresso account.</label>
        </div>
        <div class="form-group">
          <div class="phone">
            <input type="password" class="form-control"  autocomplete="off" maxlength="10" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{6,}" title="Must contain at least one number and one uppercase and lowercase letter, and at least 6 or more characters" required>            <label for="mn" class="mn">Mobile Number *</label>    
          </div>
        </div>

    

        <div id="box">
          <h4>You are not registered with us please click in sign In</h4>
          <a onclick="pop()" class="close" href="signup mobile.php">sign In</a> 
        </div>
        
        <div>
          <button onclick="pop()" class="bttn">Continue</button>
        </div>


      </div>
      
    <script type="text/javascript">
          var c=0;
          function pop(){
            if(c==0){
              document.getElementById("box").style.display="block";
              c=1;
            }
            else{
              document.getElementById("box").style.display="none";
              c=0;
            }
          }
    </script>
            
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
              
                        <script src="../scripts/main.js"></script>
                        <script src="../scripts/custom.js"></script>
                        <script src="../scripts/focus.js"></script>
    </body>
</html>
