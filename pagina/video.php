<?php 
		 include "../video-upload/db_conn.php";
         $id = $_GET["id"];
		 $sql = "SELECT * FROM videos WHERE id = ".$id;
		 $res = mysqli_query($conn, $sql);

		 if (mysqli_num_rows($res) > 0) {
		 	$video = mysqli_fetch_assoc($res);
         }
		 ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Clip_n_Dip</title>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@200&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="../css/style.css">
    <link rel="stylesheet" href="../css/gdstyle.css">
    <link rel="stylesheet" href="../css/videoStyle.css">
</head>
<body>
    <h2 id="titel"><strong>Clip_n_Dip</strong></h2>
    <nav class="nav">
            <div class="dropdown">
                <button><a href="../main.php" class="home">Home</a></button>
                <div class="Algemeen">
                    <button>Algemeen</button>
                    <ul>
                        <li><a href="../Inlogpagina/signup.html">Inloggen</a></li>
                        <li><a href="../video-upload/index.php">Uploaden</a></li>
                        <li><a href="goed_doel.html">Goed doel</a></li>
                    </ul>
                </div>
                <div class="Informatie">
                    <button>Informatie</button>
                    <ul>
                        <li><a href="contact.html">Contact</a></li>
                        <li><a href="over_ons.html">Over ons</a></li>
                        <li><a href="feedback.php">Feedback</a></li>
                    </ul>
                </div>
            </div>
        </nav>
    <div class="videoContainer">
        <div class="video">
            <video src="../video-upload/uploads/<?=$video['video_url']?>" controls ></video>
            <div src="../video-upload/<?=$video['video_url']?>" controls ></div>
        </div>
        <div class="videoTitleDetails">
            <div class="videoTitel">
                OMG VIDEO
            </div>
        
            <div class="videoData">
                <span>12k views</span>
                <span>•</span>
                <span>10 weeks ago</span>
            </div>
        <div class="videoDetails">
            <div class="kanaalDetails">
                <div class="logo">
                    <img class="kanaal" src="http://unsplash.it/36/36?gravity=center&random=2" alt="">
                </div>
            <div class="kanaalnaam">
                wazzap
                <p>100k subs</p>
            </div>
            </div>
            <div class="description">
            aoff aosijdff oiao fbafmao oa fn<br>
            aoff aosijdff oiao fbafmao oa fn<br>
            aoff aosijdff oiao fbafmao oa fn<br>
            aoff aosijdff oiao fbafmao oa fn<br>
            aoff aosijdff oiao fbafmao oa fn<br>
            aoff aosijdff oiao fbafmao oa fn<br>
            aoff aosijdff oiao fbafmao oa fn<br>
            aoff aosijdff oiao fbafmao oa fn<br>
            aoff aosijdff oiao fbafmao oa fn<br>
            aoff aosijdff oiao fbafmao oa fn<br>
            aoff aosijdff oiao fbafmao oa fn<br>
            aoff aosijdff oiao fbafmao oa fn<br>
            aoff aosijdff oiao fbafmao oa fn<br>
            </div>
        </div>
        </div>
    </div>
</body>
</html>