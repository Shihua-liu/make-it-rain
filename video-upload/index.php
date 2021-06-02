<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Video upload</title>
    <link rel="stylesheet" href="css/video.css">
</head>
<body>
    <a href="../main.php" class="video-titel">Videos</a>
    
        <?php if (isset($_GET['error'])) {  ?>
            <p><?=$_GET['error']?></p>
        <?php } ?>

    <form action="upload.php"method="post" enctype="multipart/form-data" class="form">
        <input type="file"   name="my_video">
        <input type="submit" name="submit" value="upload">
    </form>
</body>
</html>