<?php
$target_dir = "uploads";
$target_file = $target_dir . basename($_FILES["videoFile"]["name"]);

if (move_uploaded_file($_FILES["videoFile"]["tmp_name"], $target_file)) {
  echo "The file ". htmlspecialchars( basename( $_FILES["videoFile"]["name"])). " has been uploaded.";
} else {
  echo "Sorry, there was an error uploading your file.";
}
?>
