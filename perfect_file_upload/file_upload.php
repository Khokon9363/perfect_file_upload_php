<?php

  if (isset($_POST['btn'])) {
  	  $imageName=$_FILES['image_file']['name'];
  	  $imagetype=$_FILES['image_file']['type'];
  	  $imageSize=$_FILES['image_file']['size'];
  	  $imageTempLoc=$_FILES['image_file']['tmp_name'];
  	  $imageStore="file_upload/".$imageName;

  	  move_uploaded_file($imageTempLoc, $imageStore);
  }



?>
<html>
   <body>
      
      <form action="" method="POST" enctype="multipart/form-data">
         <input type="file" name="image_file" multiple="">
         <input type="submit" name="btn">
      </form>
      
   </body>
</html>