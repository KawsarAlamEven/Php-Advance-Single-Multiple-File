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
    if($_FILES['photo']){
      foreach($_FILES['photo']['tmp_name'] as $key => $tmp_name){
        $file_name =$_FILES['photo']['name'][$key];
        $file_size =$_FILES['photo']['size'][$key];
        $file_tmp =$_FILES['photo']['tmp_name'][$key];
        $file_type =$_FILES['photo']['type'][$key];
        if(move_uploaded_file($file_tmp,'uploads/'.$file_name)){
          echo'File Uploaded';
        }else{
          echo'Error uploading file';
        }
      }

  }

    ?>
  </pre>
  <form method="post" enctype="multipart/form-data">
    <input type="file" name="photo[]" multiple>
    <input type="submit" name="submit" value="submit">
  </form>
  
</body>
</html>