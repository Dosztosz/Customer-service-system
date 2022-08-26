<?php
session_start();
include ("connect.php");
  if(isset($_SESSION['login_user']))
  {
      $user = $_SESSION["login_user"];
      header('location: main.php');
  }
if (isset($_POST['action'])) {
  // username and password sent from form 
  $myusername = mysqli_real_escape_string($conn, $_POST['username']);
  $mypassword = mysqli_real_escape_string($conn, $_POST['password']); 
  
  $sql = "SELECT id FROM users WHERE username = '$myusername' and passcode = '$mypassword'";
  $result = mysqli_query($conn,$sql);
  $row = mysqli_fetch_array($result,MYSQLI_ASSOC);
  
  $count = mysqli_num_rows($result);
  
  // If result matched $myusername and $mypassword, table row must be 1 row
  if($count == 1) {
     $_SESSION['login_user'] = $myusername;
     header("location: main.php");
  }else {
     $error = "Your Login Name or Password is invalid";
  }
}
?>
<html>
  <head>
  <!--Head-->
    <?php include ("addons/head.php");?>
  </head>
<body style="background-color: #eee;">
<section class="h-100">
  <div class="container py-5 h-100">
    <div class="row d-flex justify-content-center align-items-center h-100">
      <div class="text-center mb-10" style="margin-bottom: 50px; margin-top: 50px;">
        <img src="img/logo.png" style="width: 270px;" alt="logo">
      </div>
      <div class="col-xl-6">
        <div class="card rounded-3 text-black" style="padding: 60px;">
            <form method="post">
              <p>Zaloguj Się</p>
              <div class="form-outline mb-4">
                <input type="text" id="" name="username" class="form-control"
                  placeholder="Wpisz login podany przez administratora" />
                <label class="form-label" for="">Login</label>
              </div>
              <div class="form-outline mb-4">
                <input type="password" id="" name="password" class="form-control" />
                <label class="form-label" for="">Hasło</label>
              </div>
              <div class="text-center pt-1 mb-5 pb-1">
                <button type="hidden" name="action" type="submit">Zaloguj Się</button>
              </div>
              <?php if(isset($error)){ echo $error; }?>
            </form>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
    
</body>
</html>