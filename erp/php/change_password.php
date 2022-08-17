<!DOCTYPE html>
<html>
    <head>
        <title>Change Password</title>
        <link rel="icon" type="image/png" href="../pics/logo_icon.png">
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

      <div class="main-container4">
        <div class="title1">
            <label for="sign up on expresso">Sign up on Expresso</label>
        </div>

        <div class="form-group">
            <div class="password">
              <input type="password" id="password"maxlength="10" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{6,}" title="Must contain at least one number and one uppercase and lowercase letter, and at least 6 or more characters" required class="form-control" onkeydown="focusNext(event)" autocomplete="off"onmouseover="this.type='text'" onmouseout="this.type='password'">
              <label for="pwd" class="psw" >Password</label>
                        
            </div>
          </div>

          <div class="form-group">
            <div class="confirm-password">
              <input type="password" id="c_password" maxlength="10" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{6,}" title="Must contain at least one number and one uppercase and lowercase letter, and at least 6 or more characters" required class="form-control" onkeydown="focusNext(event)"  autocomplete="off"  autocomplete="off" onmouseover="this.type='text'" onmouseout="this.type='password'">
              <label for="c-pwd" class="c-psw" >Confirm-Password</label>
                        
            </div>
          </div>

          <div >
              <button type="submit" id="save" class="save" onkeydown="focusNext(event)" onclick="return Validate()">Save</button>
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
              
                        <script type="text/javascript">
                          function Validate() {
                              var password = document.getElementById("password").value;
                              var confirmpassword = document.getElementById("c_password").value;
                              if (password != confirmpassword) {
                                  alert("Passwords do not match.");
                                  return false;
                              }
                              return true;
                          }
                      </script>

                        <script src="../scripts/main.js"></script>
                        <script src="../scripts/custom.js"></script>
                        <script src="../scripts/focus.js"></script>
    </body>
</html>      