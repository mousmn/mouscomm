<?php
$target_dir = "archive/";
#$target_folder = $_POST["folderName"];
#$target_dir = $target_dir . $target_folder;
#$chosen_dir = $_REQUEST['folder'];
#$target_dir = $target_dir . $chosen_dir;
$target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
$uploadOk = 1;

#if (!file_exists($target_dir){
#	mkdir($target_dir) or die("no");
#}

// Check if file already exists
if (file_exists($target_file)) {
     echo "Sorry, file already exists.\n";
     $uploadOk = 0;
}

// Check if $uploadOk is set to 0 by an error
if ($uploadOk == 0) {
     echo "Sorry, your file was not uploaded.";
     // if everything is ok, try to upload file
     } else {
      if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
	      echo "The file ". basename( $_FILES["fileToUpload"]["name"]). " has been uploaded.";
      } 
      else {
        echo "Sorry, there was an error uploading your file.";
      }
     }
?>
<p><a href="/archive">Return to Archive</a></p>
