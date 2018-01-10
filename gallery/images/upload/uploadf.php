
<?php
include "dbh.php";

//Get a data
if (isset($_POST['submit'])) {

  $name = $_POST['name'];
  
  $description = $_POST['description'];




//Get a image

   $file = $_FILES['file'];

   $fileName = $_FILES['file']['name'];
   $fileTmpName = $_FILES['file']['tmp_name'];
   $fileSize = $_FILES['file']['size'];
   $fileError = $_FILES['file']['error'];
   $fileType = $_FILES['file']['type'];

   $fileExt = explode('.', $fileName);
   $fileActualExt = strtolower(end($fileExt));

   $allowed = array('jpg', 'jpeg', 'png', 'gif');

   if (in_array($fileActualExt, $allowed)) {

     if ($fileError === 0) {

       $fileNameNew = uniqid().".".$fileActualExt;
       $fileDestination = '../jkcodeguru'.$fileNameNew;

       move_uploaded_file($fileTmpName, $fileDestination);

      
       $sql = "INSERT INTO gallery (name, description, banana)
       VALUES ('$name', '$description', '$fileNameNew')";

       
       $result = mysqli_query($conn,$sql);


       header("Location: upload.php?success");

     }else {
       echo "Error";
     }

   } else { 
     header("Location: ../upload.php?error=file");
   }




 }
