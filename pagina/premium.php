--<!DOCTYPE html>
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
                        <li><a href="#">Premium</a></li>
                        <li><a href="goed_doel.php">Goed doel</a></li>
                    </ul>
                </div>
                <div class="Informatie">
                    <button class="button12">Informatie</button>
                    <ul>
                        <li><a href="contact.php">Contact</a></li>
                        <li><a href="over_ons.php">Over ons</a></li>
                        <li><a href="feedback.php">Feedback</a></li>   
                    </ul>
                </div>
            </div>
        </nav>
        <div style="text-align: center;">Hier komt het Premium gedeelte</div>
        <img src="../images/coming-soon.png" alt="Coming soon" style="display: flex; margin-left: auto; margin-right: auto; margin-top:200px;">
    </body>
</html>