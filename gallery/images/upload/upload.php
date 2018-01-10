<!DOCTYPE html>
<html>
<head>
  <title>UPOLAD</title>

  <form action="uploadf.php" method="POST" enctype="multipart/form-data">

    <input type="file" name="file">

    <input type="text"  name="name" placeholder="Name">
    
    <textarea type="text"  name="description" placeholder="Description"></textarea>


     <button type="submit"  name="submit">Submit</button>

  </form>

  <?php 
$url = "http://".$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI'];

   if (strpos($url, 'success') !== false) {
     echo "<p>SUCCESS</p>";
   }
 ?>

</form>





</div>
</div>
        


    </body>
</html>
