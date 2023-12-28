<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>File upload</title>
</head>
<body>
  <pre>
  <?php

    // print_r($_FILES);
    if ($_FILES['photo']){

      $allowed = ['image/png', 'image/jpg', 'image/jpeg'];
      
      if (!in_array($_FILES['photo']['type'], $allowed)) {
      echo 'Only jpg, jpeg, png files are allowed';
      exit;
      }

      if ($_FILES($_FILES['photo']['size']> 1024*1024)) {
        echo 'File Size should be less then 1 MB';
        exit;
        }
      move_uploaded_file($_FILES['photo']['tmp_name'],'uploads/'. $_FILES['photo']['name']);
    }

?>
  </pre>
  <form method="post" enctype="multipart/form-data">
    <input type="file" name="photo">
    <input type="submit" name="submit" value="submit">
  </form>
  
</body>
</html>