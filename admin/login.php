<?php
require 'config.php';

session_start();

if (isset($_SESSION['username'])) {
  header("Location: admin.php");
}

if (isset($_POST['submit'])) {
  $username = $_POST['username'];
  $password = md5($_POST['password']);

  $sql = "SELECT * FROM administrators WHERE username='$username' AND password='$password'";
  $result = mysqli_query($connection, $sql);
  if ($result->num_rows > 0) {
    $row = mysqli_fetch_assoc($result);
    $_SESSION['username'] = $row['username'];
    $_SESSION['name'] = $row['name'];
    $_SESSION['picture'] = $row['picture'];
    header("Location: admin.php");
  } else {
    echo "<script>alert('Username atau password anda salah! Silakan coba lagi.')</script>";
  }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Login Admin</title>
  <link rel="stylesheet" href="../css/login.css">
</head>
<body>
  <div class="center">
    <h1>Login</h1>
    <form action="" method="post">
      <div class="txt_field">
        <input type="text" name="username" required>
        <span></span>
        <label>Username</label>
      </div>
      <div class="txt_field">
        <input type="password" name="password" required>
        <span></span>
        <label>Password</label>
      </div>
      <input type="submit" name="submit" value="Login">
      <div class="copyright">
        &copy; Mbah Kakung Ayam Geprek 2022
      </div>
    </form>
  </div>
</body>
</html>