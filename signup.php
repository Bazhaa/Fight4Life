<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Login</title>
  <link rel="shortcut icon" type="image/x-icon" href="resources/img/logo.png" />
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="css/style.css">
</head>
  <?php
      include_once('config.php');
      session_start();
      $error = '';
      

      if($_SERVER["REQUEST_METHOD"] == "POST") {
          $connection = getConnection();
          $myusername = $_POST(['user']); 
          $mypassword = $_POST(['password']); 
          $sql = "SELECT isadmin, userid FROM users WHERE username = '$myusername' and password = '$mypassword'";
          $result = select($connection, $sql);
          $isadmin = $row['isadmin'];
          $id = $row['userid'];
          closeConnection($connection);


          if ($count == 1) {
              $_SESSION['login_user'] = $myusername;
              $_SESSION['is_admin'] = $isadmin;
              $_SESSION['id'] = $id;
              if(isset($_GET['url'])) {
                  $targetUrl = $_GET['url'];
                  header("location: $targetUrl");
              } else {
                  header("location: index.php");
              }
          } else {
              $error = "Sai tên đăng nhập hoặc mật khẩu";
          }
      }    
  ?>
<body class="login-bg">
  <div class="wrapper fadeInDown">
    <div id="formContent">
      <!-- Tabs Titles -->

      <!-- Icon -->
      <div class="fadeIn first">
        <img src="resources/img/logo.png" style="width: 70px" id="icon" alt="logo" />
      </div>

      <!-- Login Form -->
      <form method="post"> 
        <input type="text" id="login" class="fadeIn second" name="email" placeholder="email">
        <input type="text" id="password" class="fadeIn third" name="password" placeholder="password">
        <input type="submit" class="fadeIn fourth" value="Sign Up">
      </form>

      <!-- Remind Passowrd -->
      <div id="formFooter">
        <a class="underlineHover" href="login.php">Already have account?</a> 
      </div>

    </div>
  </div>
</body>
</html>

