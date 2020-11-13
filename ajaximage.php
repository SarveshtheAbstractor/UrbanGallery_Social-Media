<?php

//upload.php
	$conn = new mysqli("Your database details");
 session_start();
if($_POST["image"])
{
	$data = $_POST["image"];

	$image_array_1 = explode(";", $data);

	$image_array_2 = explode(",", $image_array_1[1]);


	$data = base64_decode($image_array_2[1]);

	$imageName = time() . '.png';
	 

	file_put_contents('upload/'.$imageName, $data);
    
            $sql = "INSERT INTO Profile (image_path,userid) VALUES (?,?)";
            $stmt = $conn->prepare($sql);
            $stmt->bind_param("si",$imageName,$_SESSION['id']);
            $stmt->execute();
	echo '<img src="upload/'.$imageName.'" id="uploaded_image" style = "height: 120px; width: 120px;"class="profile-pic" />';

}

?>