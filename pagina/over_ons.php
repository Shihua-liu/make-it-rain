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
                        <li><a href="goed_doel.php">Goed doel</a></li>
                    </ul>
                </div>
                <div class="Informatie">
                    <button class="button12">Informatie</button>
                    <ul>
                        <li><a href="contact.php">Contact</a></li>
                        <li><a href="#">Over ons</a></li>
                        <li><a href="feedback.php">Feedback</a></li>   
                    </ul>
                </div>
            </div>
        </nav>

        <div class="over_ons2">
            <p>
                Welkom bij Clip_n_Dip,<br>
                dit is een groepsproject van Pawel, Thies en Shi Hua.<br>
                De opdrachtgeven van dit project is het MBO Mediacollege.<br>
                Dit project is begonnen op 26-04-2021.
            </p>
        </div>
        <div class="links">
            <div class="alle_info">
                <div class="Pawel">
                    <h2>Pawel Kellner</h2>
                </div>
                <div class="over_onsP"> 
                    <p>
                        Hallo, ik ben Pawel Kellner, tijdens het maken van dit project ben ik 17 jaar oud. <br>
                        Ik zit op het Mediacollege in leerjaar 1 van software developer. 
                        Mijn hobby's zijn gamen en sporten.
                        Klik <a href="contact.html"> hier</a> om contact met mij op te nemen.
                    </p>
                </div>

                <div class="Thies">
                    <h2>Thies van der Zon</h2>
                </div>
                <div class="over_onsT">
                    <p>
                        Hallo, ik ben Thies van der Zon, tijdens het maken van dit project ben ik 16 jaar oud. <br>
                        Ik zit op het Mediacollege in leerjaar 1 van software developer. 
                        Mijn hobby's zijn sporten en series kijken.
                        Klik <a href="contact.html"> hier</a> om contact met mij op te nemen.
                    </p>

                    
                </div>

                <div class="Shi-Hua">
                    <h2>Shi Hua Liu</h2>
                </div>
                <div class="over_onsS">
                    <p>
                        hallo, ik ben Shi Hua Liu, tijdens het maken van dit project ben ik 17 jaar oud.<br>
                        ik ben fan van games en anime kijken/manga lezen<br>
                        je kan contact opnemen <a href="contact.html">via mijn mail</a> of <a href="https://discordapp.com/users/285377519773941760" target="_blank">via mijn mango</a>.
                    </p> 
                     
                </div>
            </div>
        </div>
    </body>
</html>