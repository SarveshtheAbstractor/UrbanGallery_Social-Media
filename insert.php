<?php
        session_start();
   $conn = new mysqli("Your database details");


        foreach($_FILES['images']['name'] as $i => $value){
            $image_name = $_FILES['images']['tmp_name'][$i];
            $folder="images/";
            $image_path = $folder.$_FILES['images']['name'][$i];
            $info = getimagesize($image_name);
            if ($info['mime'] == 'image/jpeg') $image = imagecreatefromjpeg($image_name);
            elseif ($info['mime'] == 'image/gif') $image = imagecreatefromgif($image_name);
            elseif ($info['mime'] == 'image/png') $image = imagecreatefrompng($image_name);
           
            imagejpeg($image, $image_path, 50);
            
             
            $sql = "INSERT INTO images (image_path,userid) VALUES (?,?)";
            $stmt = $conn->prepare($sql);
            $stmt->bind_param("si",$image_path,$_SESSION['id']);
            $stmt->execute();
        }
       
    
?>