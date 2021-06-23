<?php
    if (isset($_POST['submit']) && isset($_FILES['my_video'])){

        include "db_conn.php";
        // print_r ($_FILES);
        // exit;
        $titel = $_POST['titel'];
        $beschrijving = $_POST['beschrijving'];


        $photo_name = $_FILES ['my_photo'] ['name'];
        $tmp_name2   = $_FILES ['my_photo'] ['tmp_name'];
        $error2      = $_FILES ['my_photo'] ['error'];

        

        if ($error2 === 0){
            $photo_ex = pathinfo($photo_name, PATHINFO_EXTENSION);
            $photo_ex_lc = strtolower($photo_ex);
            $allowed_exs2 = array("jpg","png", 'jpeg', 'svg', 'gif');
            
            if(in_array($photo_ex_lc, $allowed_exs2)){
                
                $image_info = getimagesize($tmp_name2);
                $ratio = 10/6;

                if (($image_info[0] / $image_info[1]) === $ratio){
                    $new_photo_name = uniqid("photo-", true). '.'.$photo_ex_lc;
                    $photo_upload_path = 'uploads/'.$new_photo_name;
                    move_uploaded_file($tmp_name2,$photo_upload_path);
                } else {
                    $em = "Uw thumbnail zit niet in een goede verhouding. Gebruik 10/6";
                    header("location: ../main.php?error=$em"); 
                }

                
                
            }else{
                $em = "U kunt dit bestand niet uploaden";
                header("location: ../main.php?error=$em"); 
            }
        }

        $thumb_upload_path = 'uploads/thumbs/'.$new_photo_name;

        switch ($photo_ex) {
            case "jpg":
                $im_php = imagecreatefromjpeg($photo_upload_path);
                $size = min(imagesx($im_php), imagesy($im_php));
                // $im_php = imagecrop($im_php, ['x' => $size*0.4, 'y' => 0, 'width' => $size, 'height' => $size]);
                $im_php = imagescale($im_php, 250);
                imagejpeg($im_php,$thumb_upload_path);
            break;
            case "png":
                $im_php = imagecreatefrompng($photo_upload_path);
                $size = min(imagesx($im_php), imagesy($im_php));
                // $im_php = imagecrop($im_php, ['x' => $size*0.4, 'y' => 0, 'width' => $size, 'height' => $size]);
                $im_php = imagescale($im_php, 250);
                imagepng($im_php,$thumb_upload_path);
            break;
            case "gif":
                $im_php = imagecreatefromgif($photo_upload_path);
                $size = min(imagesx($im_php), imagesy($im_php));
                // $im_php = imagecrop($im_php, ['x' => $size*0.4, 'y' => 0, 'width' => $size, 'height' => $size]);
                $im_php = imagescale($im_php, 250);
                imagegif($im_php,$thumb_upload_path);
            break;
        }



        $video_name = $_FILES ['my_video'] ['name'];
        $tmp_name   = $_FILES ['my_video'] ['tmp_name'];
        $error      = $_FILES ['my_video'] ['error'];

        if ($error === 0){
            $video_ex = pathinfo($video_name, PATHINFO_EXTENSION);
            $video_ex_lc = strtolower($video_ex);
            $allowed_exs = array("mp4","mkv", 'webm', 'avi', 'flv');
            
            if(in_array($video_ex_lc, $allowed_exs)){
                
                $new_video_name = uniqid("video-", true). '.'.$video_ex_lc;
                $video_upload_path = 'uploads/'.$new_video_name;
                move_uploaded_file($tmp_name,$video_upload_path);
                
                
                
            }else{
                $em = "U kunt dit bestand niet uploaden";
                header("location: ../main.php?error=$em"); 
            }
        }

        $sql = "INSERT INTO videos(video_url, thumbnail, titel, bes) VALUES('$new_video_name', '$new_photo_name', '$titel', '$beschrijving')";
        mysqli_query($conn, $sql);
        header("Location: ../main.php");  

    }else{
        header("location: ../main.php");
    }
?>