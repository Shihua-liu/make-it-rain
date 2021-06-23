<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Video upload</title>
    <link rel="stylesheet" href="css/video.css">
    <link rel="stylesheet" href="../css/style.css">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@200&display=swap" rel="stylesheet">
    <?php
    session_start();

    if(!isset($_SESSION['username']))
    {
        echo "<h1 class='uitlog'>Je bent niet ingelogd! Klik <a href='Inlogpagina/form.html'>hier<a> om in te loggen.</h1>";
        exit();
    }
    ?>
</head>
<body>
        <?php if (isset($_GET['error'])) {  ?>
            <p><?=$_GET['error']?></p>
        <?php } ?>
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
                        <li><button><a href="../pagina/goed_doel.php">Goed doel</a></button></li>
                    </ul>
                </div>
                <div class="Informatie">
                    <button class="button12">Informatie</button>
                    <ul>
                        <li><a href="../pagina/contact.php">Contact</a></li>
                        <li><a href="../pagina/over_ons.php">Over ons</a></li>
                        <li><a href="../pagina/feedback.php">Feedback</a></li>
                    </ul>
                </div>
            </div>
        </nav>

<div class="full-form" style="width: auto;">
<form action="upload.php" method="post" enctype="multipart/form-data" class="form3">
    <h2 href="../main.php" class="Upload-titel">Uploaden</h2><br>
        <ul class="upload-form">
            <li>
                <label for="titel"></label>
                <input type="text" class="titel" name="titel" placeholder="Titel" value="" oninput="return userNameValidation(this.value)" required/>
            </li><br>
            <li>
                <label for="beschrijving"></label>
                <textarea name="beschrijving"  placeholder="Beschrijving" autocomplete="off" id="" cols="30" rows="10"></textarea>
            </li>
        </ul>

    <div class="full-upload" style="width: auto;">

        <div class="form2flex">
            <h2 class="Upload-titel2">Thumbnail</h2>
            <p class="Uploadinfo">Gebruik een 10/6 formaat (250x150px)</p>
                    <input type="file"   name="my_photo" class="form2">
                    <!-- <input type="submit" name="submit" value="upload" class="form2"> -->
        </div>

        <div class="form3flex">
            <h2 class="Upload-titel2">Video</h2>
            <p class="Uploadinfo">Gebruik een korte clip (max 5 min)</p>
            
                <input type="file"   name="my_video" class="form3">
                <li id="center-btn">
                    <input type="submit" name="submit" value="upload" class="form3"id="upload-btn"><br>
                </li>
        </div>
    </div>
</form>    
</div>  
</body>
</html>