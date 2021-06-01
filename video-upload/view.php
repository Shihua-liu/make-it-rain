<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>view</title>
    <link rel="stylesheet" href="css/video.css">
</head>
<body>
    <a href="index.php" class="video-titel">Uploaden</a>

	<div class="alb">
		<?php 
		 include "db_conn.php";
		 $sql = "SELECT * FROM videos ORDER BY id DESC";
		 $res = mysqli_query($conn, $sql);

		 if (mysqli_num_rows($res) > 0) {
		 	while ($video = mysqli_fetch_assoc($res)) { 
		 ?>	
	        <video src="uploads/<?=$video['video_url']?>" controls></video>
	    <?php 
	     }
		 }else {
		 	echo "<h1>LEEG</h1>";
		 }
		 ?>
	</div>
</body>
</html>