<HEAD>
<?php 
session_start();
?>
    <link rel="stylesheet" href="../css/style.css">
    <link rel="stylesheet" href="css/formstyle.css">
</HEAD>
<BODY>   

<?php
    $gebruikersnaam = $_POST['user'];
    $wachtwoord = $_POST['pass'];

    $host = "127.0.0.1";
    $user = "c5838pawel";
    $pass = "";
    $db = "c5838flex";

    $mysqli = new mysqli($host,$user,$pass,$db);
    if ($mysqli -> connect_errno)
    {
        echo "fout met connectie db:" . $mysqli -> connect_error;
        exit();
    }

    $sql = "SELECT * FROM users WHERE username ='$gebruikersnaam'";
    $result = $mysqli -> query($sql);
    if ($result -> num_rows == 0)
    {
        echo "gebruiker niet bekend . $gebruikersnaam";
        exit();
    } 

   $gebruiker = $result -> fetch_assoc();
   $wachtwoord_juist = password_verify($wachtwoord, $gebruiker['password']);
    $result  -> free_result();
    $mysqli -> close();

    
    
    if($wachtwoord_juist == TRUE)
    {
       echo "Je bent ingelogd<br>";
       $_SESSION['username'] = $gebruikersnaam;
       echo "<div class='tekst'> Klik <a href ='../main.php' class='kop1'>hier</a> om naar de volgende beveiligde site te gaan</div>";       
    }
    else
    {
        echo "Inloggen is mislukt. <br><a href ='form.html'>Klik hier</a> om terug te gaan.";
        
    }
?>

</BODY>
</HTML>