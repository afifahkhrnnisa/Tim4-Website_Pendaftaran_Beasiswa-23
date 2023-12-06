<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <title>Card</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link rel="stylesheet" href="login.css">
</head>

<body>

<div id="selamat-datang">
<h1>SELAMAT DATANG</h1>
</div>
  <div id="card">
    <div id="card-content">
      <div id="card-title">
        <h2>Login</h2>
		<p>Pastikan anda telah memiliki akun di Sistem Pendaftaran Beasiswa Favorit</p>
      </div>
      <form action="login.php" method="post" class="form">
        <label for="user-email" style="padding-top:13px"></label>
        <input id="user-email" class="form-content" type="email" name="email" placeholder="Email/NIK" />
        <label for="user-password" style="padding-top:22px"></label>
        <input id="user-password" class="form-content" type="password" name="password" placeholder="Password" />
        <a href="#">
          <legend id="forgot-pass">Lupa Password</legend>
        </a>
        <input id="submit-btn" type="submit" name="submit" value="Sign In" />
        <p>Belum Punya Akun? <a href="#" id="signup">Daftar Disini</a></p>
      </form>
    </div>
</body>

</html>
