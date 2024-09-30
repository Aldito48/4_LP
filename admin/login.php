<?php
  require_once "../config.php";

  if (isset($_SESSION['user'])) {
    echo "<script>window.location='" . base_url() . "admin/dashboard.php';</script>";
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
    <link rel="apple-touch-icon" sizes="180x180" href="<?=base_url()?>favicon/apple-touch-icon.png" />
    <link rel="icon" type="image/png" sizes="32x32" href="<?=base_url()?>favicon/favicon-32x32.png" />
    <link rel="icon" type="image/png" sizes="16x16" href="<?=base_url()?>favicon/favicon-16x16.png" />
    <link rel="manifest" href="<?=base_url()?>site.webmanifest" />
    <link rel="stylesheet" href="<?=base_url()?>assets/css/login.css?v=<?=time()?>" />
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
            $sql_login = mysqli_query($con, "SELECT * FROM tbl_admin WHERE user = '$user' AND pass = '$pass'") or die (mysqli_error($con));
            if (mysqli_num_rows($sql_login) > 0) {
              $_SESSION['user'] = $user;
              $_SESSION['login_time'] = time();
              echo "<script>window.location='" . base_url() . "admin/dashboard.php';</script>";
            } else {
              echo "<script>window.loginFailed = true;</script>";
        ?>
              <div id="custom-notification" class="notification">
                <p id="notification-message"></p>
              </div>
        <?php
            }
          }
        ?>
        <form method="POST" id="login-form" class="form" action="" autocomplete="on">
          <label for="user" style="padding-top: 13px;">&nbsp;<ion-icon name="person"></ion-icon>
            <input id="user" class="form-content" type="text" name="user" placeholder="Masukkan Username" required autofocus autocomplete="username"/>
            <div class="form-border"></div>
          </label>

          <label for="pass" style="padding-top: 22px;">&nbsp;<ion-icon name="key"></ion-icon>
            <input id="pass" class="form-content" type="password" placeholder="Masukkan Password" name="pass" required autocomplete="current-password"/>
            <span class="show-hide" onclick="togglePassword()">
              <ion-icon id="toggle-icon" name="eye"></ion-icon>
            </span>
            <div class="form-border"></div>
          </label>
          <input id="submit-btn" type="submit" name="login" value="LOGIN">

          <p class="owner">Doctor Trip Indonesia &copy; <?=date('Y')?></p>
        </form>
      </div>
    </div>
    <script>
      function togglePassword() {
        const passwordInput = document.getElementById('pass');
        const toggleIcon = document.getElementById('toggle-icon');

        if (passwordInput.type === 'password') {
          passwordInput.type = 'text';
          toggleIcon.name = 'eye-off';
        } else {
          passwordInput.type = 'password';
          toggleIcon.name = 'eye';
        }
      }
    </script>
    <script src="https://unpkg.com/scrollreveal"></script>
    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.0/jquery.min.js"></script>
    <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
    <script src="<?=base_url()?>assets/js/login.js?v=<?=time()?>"></script>
    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
  </body>
</html>
<?php
  }
?>
