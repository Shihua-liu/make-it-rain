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
    <h2 id="titel"><strong>Clip_n_Dip</strong></h2>
    <div class="gebruiker">
                <?php 
                echo "Welkom ";
                echo $_SESSION['username'] . "!"; 
                ?>
                <br><a class="uitlog" href="../Inlogpagina/loguit.php">Uitloggen</a>
            </div>
    <nav class="nav">
            <div class="dropdown">
                <button><a href="../main.php" class="home">Home</a></button>
                <div class="Algemeen">
                    <button>Algemeen</button>
                    <ul>
                        <li><a href="../Inlogpagina/signup.php">Inloggen</a></li>
                        <li><a href="../video-upload/index.php">Uploaden</a></li>
                        <li><a href="goed_doel.php">Goed doel</a></li>
                    </ul>
                </div>
                <div class="Informatie">
                    <button>Informatie</button>
                    <ul>
                        <li><a href="contact.php">Contact</a></li>
                        <li><a href="over_ons.php">Over ons</a></li>
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
                <?php echo $video['titel']?>
            </div><br>
        
            <!-- <div class="videoData">
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
            </div> -->
            <div class="description">
                <?php echo $video['bes']?>  
            </div>
        </div>
        </div>
    </div>
</body>
</html>