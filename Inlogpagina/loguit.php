<html>
<head>
    <link rel="stylesheet" href="../css/inlog.css">
<?php
session_start();
unset($_SESSION['username']);
?>
</head>
<body>
<div class="signupSection">
    <div class="info">
      <h2>Welkom bij duurzaam huis</h2>
      <i class="icon ion-ios-ionic-outline" aria-hidden="true"></i>
      <p>U bent uitgelogd</p>
      <p>Hier kunt u inloggen</p><br>
      <p>Heeft u nog geen account?</p>
      <p>Klik dan <a href="signup.html" style="color: aqua;">hier</a> om een account te maken.</p>
    </div>
    <form action="logincheck.php" method="POST" class="signupForm" name="signupform">
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