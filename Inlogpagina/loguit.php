<html>
<head>
    <link rel="stylesheet" href="../css/style.css">
    <link rel="stylesheet" href="css/formstyle.css">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@200&display=swap" rel="stylesheet">
<?php
session_start();
unset($_SESSION['username']);
?>
</head>
<div class="titelCon">
<div id="titel">
  <h2>Clip_n_dip</h2>
</div>

</div>
<body>
<div class="signupSection">
    <div class="info">
      <h2>Welkom bij Clip_n_Dip</h2>
      <i class="icon ion-ios-ionic-outline" aria-hidden="true"></i>
      <p>U bent uitgelogd</p>
      <p>Hier kunt u inloggen</p><br>
      <p>Heeft u nog geen account?</p>
      <p>Klik dan <a href="signup.html" style="color: rgb(159, 5, 5);">hier</a> om een account te maken.</p>
    </div>
    <form style="height: 100%;" action="logincheck.php" method="POST" class="signupForm" name="signupform">
      <h2>Log in</h2>
      <ul class="noBullet">
        <li>
          <label for="username"></label>
          <input type="text" class="inputFields" id="username" name="user" placeholder="Gebruikersnaam" value="" oninput="return userNameValidation(this.value)" required/>
        </li>
        <li>
          <label for="password"></label>
          <input type="password" class="inputFields" id="password" name="pass" placeholder="Wachtwoord" value="" oninput="return passwordValidation(this.value)" required/>
        </li>
        <li>
          <label for="email"></label>
          <input type="email" class="inputFields" id="email" name="email" placeholder="Email" value="" required/>
        </li>
        <li id="center-btn">
          <input type="submit" id="join-btn" name="join" alt="Join" value="Join">
        </li>
      </ul>
    </form>
  </div>
</body>
</html>