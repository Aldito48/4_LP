<?php
  require_once "../config.php";
  if (isset($_SESSION['user'])) {
    echo "<script>window.location='dashboard.php';</script>";
  } else {
?>
<!DOCTYPE html>
<html>
  <head>
    <title>Doctor Trip Indonesia - Healing With Doctor Trip</title>
    <meta http-equiv="Content-Type" content="text/html;charset=UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta http-equiv="Cache-Control" content="no-cache, no-store, must-revalidate" />
    <meta http-equiv="Pragma" content="no-cache" />
    <meta http-equiv="Expires" content="0" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="apple-touch-icon" sizes="180x180" href="../favicon/apple-touch-icon.png" />
    <link rel="icon" type="image/png" sizes="32x32" href="../favicon/favicon-32x32.png" />
    <link rel="icon" type="image/png" sizes="16x16" href="../favicon/favicon-16x16.png" />
    <link rel="manifest" href="../site.webmanifest" />
    <link rel="stylesheet" href="../assets/css/login.css" />
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Montserrat:wght@500;600;700;800&family=Poppins:wght@400;500;600;700&display=swap"
      rel="stylesheet"
    />
    <link
      rel="stylesheet"
      href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css"
    />
  </head>
  <body>
    <div id="Card">
      <div id="Card-content">
        <div id="Card-title">
          <h2>LOGIN</h2>
          <div class="underline-title"></div>
        </div>
        <?php
          if (isset($_POST['login'])) {
            $user = trim(mysqli_real_escape_string($con, $_POST['user']));
            $pass = trim(mysqli_real_escape_string($con, $_POST['pass']));
            $sql_login = mysqli_query($con, "SELECT * FROM tbl_owner WHERE user = '$user' AND pass = '$pass'") or die (mysqli_error($con));
            if (mysqli_num_rows($sql_login) > 0) {
              $_SESSION['user'] = $user;
              echo "<script>window.location='dashboard.php';</script>";
            } else {
        ?>
              <div class="login-rejected" id="login-rejected">
                <button onclick="closeDiv()">X</button>
                <p class="failed-1"><strong>Login Gagal</strong></p>
                <p class="failed-2">Email / Password salah</p>
              </div>
        <?php
            }
          }
        ?>
        <form method="POST" id="login-form" class="form" action="">
          <label for="user" style="padding-top: 13px;">&nbsp;<ion-icon class="next" name="chevron-forward"></ion-icon>
            <input id="user" class="form-content" type="text" name="user" placeholder=" Masukkan Username" required autofocus/>
            <div class="form-border"></div>
          </label>

          <label for="pass" style="padding-top: 22px;">&nbsp;<ion-icon class="next" name="chevron-forward"></ion-icon>
            <input id="pass" class="form-content" type="password" placeholder=" Masukkan Password" name="pass" required/>
            <span class="show-hide">
              <ion-icon class="next" name="chevron-forward"></ion-icon>
            </span>
            <div class="form-border"></div>
          </label>
          <input id="submit-btn" type="submit" name="login" value="LOGIN">
        </form>
        <script>
          const password = document.getElementById('pass');
          const unhideButton = document.getElementById('unhide');
          unhideButton.addEventListener('click', function(){
            if(password.type === 'password'){
              password.type = 'text';
            } else{
              password.type = 'password';
            }
          });
        </script>
      </div>
    </div>
  </body>
</html>
<?php
  }
?>
