<html>
    <head>
        <title>Hier kunt u zich aanmelden</title>
        <link rel="stylesheet" href="../css/style.css">
        <link rel="stylesheet" href="css/formstyle.css">
    </head>
<body>
    <?php
    $username = $_POST['username'];
    $password1 = $_POST['password1'];
    $password2 = $_POST['password2'];
    $voornaam = $_POST['voornaam'];
    $achternaam = $_POST['achternaam'];
    $email = $_POST['email'];

    if($password1 !== $password2)
    {
        echo "<div class='tekst'>De wachtwoorden komen niet overeen. Klik <a href='signup.html' class='kop1'>hier</a> om terug te gaan</div>";
        exit();
    }

    $host = "127.0.0.1";
    $user = "c5957shihua";
    $pass = "root";
    $db = "c5957mir1";

    $mysqli = new mysqli($host,$user,$pass,$db);
    if ($mysqli -> connect_errno)
    {
        echo "fout met connectie db:" . $mysqli -> connect_error;
        exit();
    }
    else
    {
        $hash = password_hash($password1, PASSWORD_DEFAULT);
        $sql = "INSERT INTO users (id, username, password, voornaam, achternaam, email) VALUES (NULL, '$username', '$hash', '$voornaam', '$achternaam', '$email')";
        $result = $mysqli -> query($sql);
        echo "<div class='tekst'>Je hebt succesvol een account aangemaakt, ga naar <a href='form.html' class= 'kop1'>de loginpagina</a> om je aan te melden</div>";
    } 
    
    ?>

</body>
</html>