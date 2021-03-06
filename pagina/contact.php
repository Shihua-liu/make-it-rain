<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Clip_n_Dip</title>
    <link rel="shortcut icon" href="../images/Clip-logo.png">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@200&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="../css/style.css">
    <link rel="stylesheet" href="../css/gdstyle.css">
    <?php
    session_start();

    if(!isset($_SESSION['username']))
    {
        echo "Je bent niet ingelogd! Klik <a href='Inlogpagina/form.html'>hier<a> om in te loggen.";
        exit();
    }
    ?>
</head>
<body>
        <nav>
        <h2 id="titel"><strong>Clip_n_Dip</strong></h2>
        <div class="gebruiker">
                <?php 
                echo "Welkom ";
                echo $_SESSION['username'] . "!"; 
                ?>
                <br><a class="uitlog" href="../Inlogpagina/loguit.php">Uitloggen</a>
            </div>
            <div class="dropdown">
                <button class="button12"><a href="../main.php" class="home">Home</a></button>
                <div class="Algemeen">
                    <button class="button12">Algemeen</button>
                    <ul>
                        <li><a href="../Inlogpagina/signup.php">Inloggen</a></li>
                        <li><a href="../video-upload/index.php">Uploaden</a></li>
                        <li><button><a href="goed_doel.php">Goed doel</a></button></li>
                    </ul>
                </div>
                <div class="Informatie">
                    <button class="button12">Informatie</button>
                    <ul>
                        <li><a href="#">Contact</a></li>
                        <li><a href="over_ons.php">Over ons</a></li>
                        <li><a href="feedback.php">Feedback</a></li>  
                    </ul>
                </div>
            </div>
        </nav>
        <div class="over_ons2"> 
            <p>Hoi,<br>Heb je toevallig vragen over onze website of over ons.<br> Dan kunt u hier onze contact informatie vinden</p><br><br>
            <ul class="contact-lijst">
                <p>Emails:</p>
                <li><a href="https://mail.google.com/mail/?view=cm&fs=1&tf=1&to=thiesvanderzon@gmail.com" target="_blank">Thies van der Zon</li></a>
                <li><a href="https://mail.google.com/mail/?view=cm&fs=1&tf=1&to=smrpawel@gmail.com" target="_blank">Pawel Kellner</li></a>
                <li><a href="https://mail.google.com/mail/?view=cm&fs=1&tf=1&to=liushihua2004@gmail.com" target="_blank"> Shi Hua Liu</li></a>
            </ul><br>
            <a href="over_ons.html"><img src="../images/address-card-regular.svg" alt="discord" class="card"></a>
            <a href="https://github.com/Shihua-liu/make-it-rain" target="_blank"><img src="../images/github-brands.svg" alt="github" class="github"></a>
        </div>
        
</body>
</html>