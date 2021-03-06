<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Clip_n_Dip</title>
    <link rel="shortcut icon" href="images/Clip-logo.png"><!-- Via deze tag kan je een plaatje bij de titel zetten -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@200&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css/style.css">
    <!-- <link rel="stylesheet" href="video-upload/css/video.css"> -->
    <script src="js/script.js"></script>
    <?php
    session_start();

    $error = '';

    if(isset($_GET['error']))
    {
        $error = $_GET['error'];
    }
    
    function function_alert($message) {
        echo "<script>alert('$message');</script>";
    }

    if(!isset($_SESSION['username']))
    {
        echo "<h1 class='uitlog2'>Je bent niet ingelogd! Klik <a href='Inlogpagina/form.html' class='kop1'>hier<a> om in te loggen.</h1>";
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
                <br><a class="uitlog" href="Inlogpagina/loguit.php">Uitloggen</a>
            </div>
    <nav class="nav">
    <!-- <label for="toggle">&#9776;</label> -->
        <div class="dropdown">
            <button class="button12"><a href="#" class="home">Home</a></button>
            <div class="Algemeen">
                <button class="button12">Algemeen</button>
                <ul>
                    <li><a href="Inlogpagina/signup.php">Inloggen</a></li>
                    <li><a href="video-upload/index.php">Uploaden</a></li>
                    <li><a href="pagina/goed_doel.php">Goed doel</a></li>
                </ul>
            </div>
            <div class="Informatie">
                <button class="button12">Informatie</button>
                <ul>
                    <li><a href="pagina/contact.php">Contact</a></li>
                    <li><a href="pagina/over_ons.php">Over ons</a></li>
                    <li><a href="pagina/feedback.php">Feedback</a></li>  
                </ul>
            </div>
        </div>
    </nav>


    <div class="videos">
            <section class="video-section">
		<?php 
		 include "video-upload/db_conn.php";
		 $sql = "SELECT * FROM videos ORDER BY id DESC";
		 $res = mysqli_query($conn, $sql);

		 if (mysqli_num_rows($res) > 0) {
		 	while ($video = mysqli_fetch_assoc($res)) { 
		 ?>	
                <article class="video-container">
                    <a href="pagina/video.php?id=<?php echo $video['id']?>" class="thumbnail">
                        <img class="thumbnail-image" src="video-upload/uploads/<?php echo $video['thumbnail']?>" alt="">
                    </a>
                    <div class="video-bottom-section">
                        <!-- <a href="#">
                            <img class="channel-icon" src="http://unsplash.it/36/36?gravity=center&random=1" alt="">
                        </a> -->
                        <div class="video-details">
                            <a href="pagina/video.php?id=<?php  echo $video['id']?>" class="video-title"><?php echo $video['titel']?></a>
                            <!--<a href="#" class="channel-name" id="channel"></a>
                             <div class="video-metadata">
                                <span class="views">12K views</span>
                                ???
                                <span class="date">1 week ago</span>
                            </div> -->
                        </div>
                    </div>
                </article>
            <!-- <video src="video-upload/uploads/" controls ></video> -->
            <!-- <a href="pagina/video.php?id=" id="videoHref">Test video</a> -->
	    <?php 
	     }
		 }else {
		 	echo "<h1>LEEG</h1>";
		 }
		 ?>
         </section>
        </div>
    <?php
    if($error) {
      function_alert($error);  
    }


    ?>
</body>
</html>