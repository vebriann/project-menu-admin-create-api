<?php 

$db = mysqli_connect(
  "localhost",
  "root",
  "",
  "data_admin");


if (isset($_POST['submit'])) {
  $email = $_POST['email'];
  $password = $_POST['password'];
  $results = mysqli_query($db, "SELECT * FROM data");
  while ($tabel = mysqli_fetch_assoc($results))  {
    $emailconf = $tabel['email'];
    $passwordconf = $tabel['password'];
    if ($email == $emailconf) {
      if ($password == $passwordconf) {
        echo "<script>alert('login berhasil')</script>";
      }
      else {
        echo "<script>alert('maaf password yang anda masukan salah!')</script>";
      }
    }
    else {
      echo "<script>alert('maaf email yang anda masukan salah!'); location.href = 'index.php';</script>";
    }
  }


}


?>


<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Login Pages</title>
    <link rel="stylesheet" href="assets/style.css" />
  </head>
  <body>
    <div class="container">
      <div class="text">
        <div class="textHeader">
          <h1>Welcome Back,</h1>
          <h2>Log In Now To Continue...</h2>
        </div>
      </div>
      <div class="boxImg">
        <img src="assets/images/vecteezy_cute-little-boy-in-pilot-costume-cartoon-illustration_6575036.jpg" alt="foto pertama" srcset="" />
      </div>
      <div class="formLogin">
        <form action="" method="post">
          <div class="login">
            <div class="email">
              <div class="img">
                <img src="assets/images/email.png" alt="email" srcset="">
                <input type="email" name="email" placeholder="Email" required>
              </div>
            </div>
            <div class="password">
              <div class="imgpassword">
                <img src="assets/images/forgot-password.png" alt="email" srcset="">
                <input type="password" name="password" placeholder="Password" required>
              </div>
            </div>
            <div class="forget">
              <h5>
                <a href="#">Forget Password?</a>
              </h5>
            </div>
          </div>
          <div class="submit">
            <button type="submit" name="submit">Login</button>
          </div>
        </form>
      </div>
    </div>
    <div class="sigup">
      <div class="sign">
        <p>
          Don't have an account? 
          <a href="#">Sign Up</a>
        </p>
      </div>
    </div>
  </body>
</html>
