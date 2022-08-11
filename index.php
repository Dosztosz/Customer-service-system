<html>
<?php
include ("addons/head.php");
include ("connect.php");
   session_start();
   
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
</html>