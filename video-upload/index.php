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
</head>
<body>
        <?php if (isset($_GET['error'])) {  ?>
            <p><?=$_GET['error']?></p>
        <?php } ?>
        <nav>
        <h2 id="titel"><strong>Clip_n_Dip</strong></h2>
            <div class="dropdown">
                <button class="button12"><a href="../main.php" class="home">Home</a></button>
                <div class="Algemeen">
                    <button class="button12">Algemeen</button>
                    <ul>
                        <li><a href="../Inlogpagina/signup.html">Inloggen</a></li>
                        <li><a href="../video-upload/index.php">Uploaden</a></li>
                        <li><button><a href="../pagina/goed_doel.html">Goed doel</a></button></li>
                    </ul>
                </div>
                <div class="Informatie">
                    <button class="button12">Informatie</button>
                    <ul>
                        <li><a href="../pagina/contact.html">Contact</a></li>
                        <li><a href="../pagina/over_ons.html">Over ons</a></li>
                        <li><a href="#">Feedback</a></li>
                    </ul>
                </div>
            </div>
        </nav>

<div class="full-form">
    <h2 href="../main.php" class="Upload-titel">Uploaden</h2><br>
        <ul class="upload-form">
            <li>
                <label for="username"></label>
                <input type="text" class="titel" name="Titel" placeholder="Titel" value="" oninput="return userNameValidation(this.value)" required/>
            </li><br>
            <li>
                <label for="beschrijving"></label>
                <input type="text" class="beschrijving" name="beschrijving" placeholder="Beschrijving" autocomplete="off" value="" oninput="return userNameValidation(this.value)" required/>
            </li>
            
            <li id="center-btn">
                <input type="submit" id="upload-btn" name="join" alt="Join" value="Uploaden"><br>
            </li>
        </ul>
    </form>
</div>    

    <h2 class="Upload-titel2">Thumbnail</h2>
    <form action="" method="post" enctype="multipart/form-data" class="form2">
        <input type="file"   name="my_photo" class="form2">
        <input type="submit" name="submit" value="upload" class="photo-upload">
    </form>
    <h2 class="Upload-titel2">Video</h2>
    <form action="" method="post" enctype="multipart/form-data" class="form3">
        <input type="file"   name="my_video" class="form3">
        <input type="submit" name="submit" value="upload" class="video-upload">
    </form>
</body>
</html>