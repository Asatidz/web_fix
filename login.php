<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Aplikasi</title>
    <link rel="stylesheet" href="css/style.css">
</head>
 <body class="smk-page">
  <div class="container">
   <div class="header">
    <div>
     SMK BP Subulul Huda
    </div>
    <div>
     <a href="login.php">
      Home
     </a>
     <a href="about.html">
      About
     </a>
    </div>
   </div>
   <div class="main">
    <img alt="Background image with an avocado and some metallic objects" height="800" src="css/background.jpg" width="1200"/>
    <div class="main-content">
     <h1>
      System Informasi Pelaporan Pelanggaran
     </h1>
     <p>
      "Melalui sistem informasi pelaporan pelanggaran siswa, kami berkomitmen untuk menciptakan lingkungan sekolah yang transparan, adil, dan harmonis."
     </p>
    </div>
        <div class="signup-form">
     <h2>
      Sign Up
     </h2>
        <form action="ceklogin.php" method="post">
          <input
            type="text"
            name="username"
            id="username"
            placeholder="Username"
          />
          <input
            type="password"
            name="password"
            id="password"
            placeholder="Password"
          />
          <input type="submit" value="Sign in" />
          
        </form>
      </section>
    </div>
</div>

   </div>
</body>
</html>