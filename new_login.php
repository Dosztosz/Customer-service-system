<!DOCTYPE html>
<html lang="en">
<head>
<?php 
    include ("addons/head.php");
    ?>
</head>
<body style="background-color: #eee;">
<section class="h-100">
  <div class="container py-5 h-100">
    <div class="row d-flex justify-content-center align-items-center h-100">
    <div class="text-center mb-10" style="margin-bottom: 50px; margin-top: 50px;">
              <img src="img/logo.png"
                style="width: 270px;" alt="logo">
            </div>
      <div class="col-xl-6">
        <div class="card rounded-3 text-black" style="padding: 60px;">
            <form>
              <p>Zaloguj Się</p>
              <div class="form-outline mb-4">
                <input type="email" id="form2Example11" class="form-control"
                  placeholder="Wpisz login podany przez administratora" />
                <label class="form-label" for="form2Example11">Login</label>
              </div>
              <div class="form-outline mb-4">
                <input type="password" id="form2Example22" class="form-control" />
                <label class="form-label" for="form2Example22">Hasło</label>
              </div>
              <div class="text-center pt-1 mb-5 pb-1">
                <button type="button">Zaloguj Się</button>
              </div>
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

<body>
        <div class="animacja"></div>
        <div class="container">
            <div class="login">
                <h1>Zaloguj Się</h1>
                <form method="post">
                    <input type="text" name="username" id="">
                    <input type="password" name="password" id="">
                    <button type="hidden" name="action" type="submit">Zaloguj się</button>
                    <?php if(isset($error)){
                        echo $error;
                    }
                    ?>
                </form>
            </div>
        </div>
    </body>