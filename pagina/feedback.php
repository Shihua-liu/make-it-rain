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
</head>
<body>
        <nav>
        <h2 id="titel"><strong>Clip_n_Dip</strong></h2>
            <div class="dropdown">
                <button class="button12"><a href="../main.php" class="home">Home</a></button>
                <div class="Algemeen">
                    <button class="button12">Algemeen</button>
                    <ul>
                        <li><a href="../Inlogpagina/signup.html">Inloggen</a></li>
                        <li><a href="../video-upload/index.php">Uploaden</a></li>
                        <li><button><a href="goed_doel.html">Goed doel</a></button></li>
                    </ul>
                </div>
                <div class="Informatie">
                    <button class="button12">Informatie</button>
                    <ul>
                        <li><a href="contact.html">Contact</a></li>
                        <li><a href="over_ons.html">Over ons</a></li>
                        <li><a href="#">Feedback</a></li>
                    </ul>
                </div>
            </div>
        </nav>

        <form action="" method="POST" class="hele-form">

            <label class="titeln&c"> <strong>Name:</strong><br>
             <input type="text" name="Name" class="Input" style="width: 225px" required>
            </label>
            <br><br>
            <label class="titeln&c"> <strong>Comment:</strong><br>
             <textarea name="Comment" class="Input" style="width: 300px" required></textarea>
            </label>
            <br><br>
            <input type="submit" name="Submit" value="Submit Comment" class="Submit"><br>
           
    <?php
 
        if($_POST['Submit']){
        print "<h3>Your comment has been submitted!</h3>";

        $Name = $_POST['Name'];
        $Comment = $_POST['Comment'];

        #Get old comments
        $old = fopen("comments.txt", "r+t");
        $old_comments = fread($old, 1024);

        #Delete everything, write down new and old comments
        $write = fopen("comments.txt", "w+");
        $string = "<b>".$Name."</b><br>".$Comment."<br>\n".$old_comments;
        fwrite($write, $string);
        fclose($write);
        fclose($old);
        }

        #Read comments
        $read = fopen("comments.txt", "r+t");
        echo "<br><br>Comments:<hr>".fread($read, 1024);
        fclose($read);

        

    ?>
    </form>
    <script>
    if ( window.history.replaceState ) {
        window.history.replaceState( null, null, window.location.href );
    }
    </script>
</body>
</html>