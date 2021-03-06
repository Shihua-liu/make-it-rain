<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Clip_n_Dip</title>
    <link rel="shortcut icon" href="../images/Clip-logo.png">
    <link rel="preconnect" href="https://fonts.gstatic.com">
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
                    <li><button><a href="#">Goed doel</a></button></li>
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
    <div class="linksgd">
        <div class="alle_info">
            <div class="over_goeddoel"> 
                <a href="https://teamtrees.org" target="_blank"><img src="../media/TT.png" width="90%"></a>
                <p>We???re on a mission to plant 22M trees around the world! This is the only official Facebook account for #TeamTrees (TeamTrees.org). 
                   100% of all donations go to Arbor Day Foundation: $1, one tree.<br><br>
                   #TeamTrees has now raised more than $22.5 million to plant 22.5M trees - and more than 7M are already in the ground! 
                   In 2021 we'll double that count as we expand planting operations.
                   <br><br> Click the image to go to our official website.
                </p>
                
            </div>
            <div class="over_goeddoel">
                <a href="https://www.cliniclowns.nl/steun-ons/doneren?gclid=Cj0KCQjw7pKFBhDUARIsAFUoMDanr0bCH7WcvNopF8NTRPj0iP1hFGdjPGmaxAGCZ1jryCSw7WpWUEAaAuzFEALw_wcB" target="_blank"><img src="../media/CC.png" width="83%" style="margin-top: 20px;"></a>
                <p style="margin-top: -80px;">

                    CliniClowns is een goed doel. 
                    Dankzij de steun van duizenden supporters kunnen onze clowns bijdragen aan het welzijn van zieke kinderen, 
                    kinderen met een beperking en mensen met dementie. Naast de clownsteams zijn er dus andere mensen nodig om ervoor te zorgen dat wij onze missie kunnen volbrengen.
                    <br><br>  klik het plaatje om naar de website te gaan.
                </p>
                
            </div>
            <div class="over_goeddoel">
                <a href="https://www.rodekruis.nl/doe-mee/doneren/?gclid=Cj0KCQjw7pKFBhDUARIsAFUoMDaVem8QStmjzox-bjMbO4e2qVM1nVk7kPjA87VXZted-fNvGzfTRncaAqMUEALw_wcB" target="_blank"><img src="../media/RK.png" width="75%" height="70%" style="margin-top:-10px;"></a>
                <p id="rood-kruis">
                    Hulp aan mensen in nood. Daar staat het Rode Kruis voor. 
                    Dichtbij, als je op blaren loopt bij de Vierdaagse of als je je enkel verzwikt tijdens een hardloopwedstrijd. 
                    Als je je huis uit moet door een gaslek of als je in glas bent gaan staan bij een festival. 
                    Maar ook ver weg. Mensen die dierbaren zijn kwijtgeraakt toen ze op de vlucht sloegen voor geweld in hun dorp, 
                    of wiens huis is weggevaagd door een modderstroom.<br><br>

                    Voor jou en voor hen staan we klaar. Met het grootste vrijwillige hulpverlenersnetwerk ter wereld is er altijd iemand bij je in de buurt. Om je te helpen als je dat nodig hebt.
                    <br><br> klik het plaatje om naar de website te gaan.
                </p>
                
            </div>
        </div>
    </div>
</body>
</html>