<?php
if ($_FILES["image"]["error"] == UPLOAD_ERR_OK) {
  $tempFilePath = $_FILES["image"]["tmp_name"];
  $newFilePath = "uploads/" . $_FILES["image"]["name"];
  move_uploaded_file($tempFilePath, $newFilePath);
  echo "Image uploaded successfully!";
} else {
  echo "Error occurred while uploading the image.";
}
?>
