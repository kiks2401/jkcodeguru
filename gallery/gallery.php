<!DOCTYPE html>
<html class="no-js">
  <head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>JKCodeGuru &mdash; Gallery</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <meta name="description" content="Svihran Kristijan, Svihran Janko, Svihran Erika, jkcodeguru.com, Programing, Designing, UI, GUI, SEO, HTML, CSS, PHP, CSS, JS, jquery, Video, After Effect, Epic Effect, Video Montage, PhotoShop, Adobe Premiere Pro, Funny Videos, Templates, Events, Portfolio, guru, crativity, programing is fun, logo, logo design, tutorial, teaching, education, programing skills, self made website, gallery, pagination" />

    <meta name="keywords" content="html5, template, bootstrap, html, css, mobile first, responsive, programing, web programing, design, gallery" />

    <meta name="author" content="jkcodeguru.com" />

  <link href='https://fonts.googleapis.com/css?family=Source+Sans+Pro:400,300,600,400italic,700' rel='stylesheet' type='text/css'>

  <!-- Animate.css -->
  <link rel="stylesheet" href="../css/animate.css">
  <!-- Icomoon Icon Fonts-->
  <link rel="stylesheet" href="../css/icomoon.css">
  <!-- Simple Line Icons -->
  <link rel="stylesheet" href="../css/simple-line-icons.css">
  <!-- Magnific Popup -->
  <link rel="stylesheet" href="../css/magnific-popup.css">
  <!-- Bootstrap  -->
  <link rel="stylesheet" href="../css/bootstrap.css">


  <link rel="stylesheet" href="../css/style.css">



<link href='http://fonts.googleapis.com/css?family=Roboto:400,300,700' rel='stylesheet' type='text/css'>
<link href='http://fonts.googleapis.com/css?family=Josefin+Sans:600' rel='stylesheet' type='text/css'>

<link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css" />

<!-- animate.css -->
<link rel="stylesheet" href="assets/animate/animate.css" />
<link rel="stylesheet" href="assets/animate/set.css" />

<!-- gallery -->
<link rel="stylesheet" href="assets/gallery/blueimp-gallery.min.css">

<!-- favicon -->
<link rel="shortcut icon" href="images/favicon.jpg" type="image/x-icon">
<link rel="icon" href="images/favicon.jpg" type="image/x-icon">


<link rel="stylesheet" href="assets/style.css">

</head>

<body>

<div id='works'  class=' clearfix grid'>
<?php 
  include "images/upload/dbh.php";

          //result pre page
          $result_per_page = 9;

          //finde out number of results
          $sql = "SELECT * FROM gallery";
          $result = mysqli_query($conn, $sql);
          $number_of_result = mysqli_num_rows($result); 


          //number of tatal pages
          $page_number = ceil($number_of_result / $result_per_page);

          //page number currently on
          if (!isset($_GET['page'])) {
            $page = 1;
          } else {
            $page = $_GET['page'];
          }

           $first_result = ($page-1)*$result_per_page;
         

//retrive selected result from database and display them on page
$sql = "SELECT * FROM gallery LIMIT $first_result,$result_per_page";
$result = mysqli_query($conn, $sql);


while ($row = mysqli_fetch_array($result)) {


   echo "
<figure class='effect-oscar  wowload fadeInUp'>
        <img src='images/jkcodeguru".$row['banana']."' alt='".$row['name']."' title='".$row['name']."' />
        <figcaption>
            <h2>".$row['name']."</h2>
            <p>".$row['description']."<br>

            <a href='download.php?file=images/jkcodeguru".$row['banana']."' title='Download' data-gallery>Download</a></p>            
        </figcaption>
    </figure>
";
   
    
}

 ?>   
 </div>
    



  <div class="container">
              <?php echo " <nav>
                <ul class='pagination'>
                   ";

                  for ($page=1; $page<=$page_number; $page++) {
                    echo  '<li><a href="work.php?page='.$page. '">'.$page.'</a></li>';
                  }
              echo "</ul>
                   </nav> "; ?>
                </div>  


 

</body>
</html>