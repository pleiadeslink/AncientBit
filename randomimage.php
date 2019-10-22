<?php 

/* 
 * Name your images 1.jpg, 2.jpg etc. 
 * 
 * Add this line to your page where you want the images to  
 * appear: <?php include "randomimage.php"; ?> 
 */  

// Change this to the total number of images in the folder 
$total = "413"; 

// Change to the type of files to use eg. .jpg or .gif 
$file_type = ".gif"; 

// Change to the location of the folder containing the images 
$image_folder = "http://fractalmonkey.xyz/files/header-images/"; 

// You do not need to edit below this line 

$start = "1"; 

$random = mt_rand($start, $total); 

$image_name = $random . $file_type; 

echo "<img src=\"$image_folder/$image_name\" alt=\"$image_name\" />"; 

?>