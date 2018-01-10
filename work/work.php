<!DOCTYPE html>
<html class="no-js">
	<head>

		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<title>JKCodeGuru &mdash; Our Work</title>
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



</head>
<body>

	<header role="banner" id="fh5co-header">

			<div class="container">
				<!-- <div class="row"> -->
			    <nav class="navbar navbar-default">
		        <div class="navbar-header">
		        	<!-- Mobile Toggle Menu Button -->
					<a href="#" class="js-fh5co-nav-toggle fh5co-nav-toggle" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar"><i></i></a>
		         <a class="navbar-brand" href="index.php"><img src="../images/logo.png"></a>
		        </div>
		        <div class="navbar-collapse collapse">
		          <ul class="nav navbar-nav navbar-right">
		            <li ><a href="../index.php" data-nav-section="home"><span>Home</span></a></li>

		            <li><a href="work.php" data-nav-section="work"><span>Work</span></a></li>
		            
		            <li><a href="#" data-nav-section="services"><span>Services</span></a></li>
		            <li><a href="#" data-nav-section="about"><span>About</span></a></li>
		            <li><a href="#" data-nav-section="contact"><span>Contact</span></a></li>

		            
		          </ul>

		        </div>

			    </nav>
			    
			  <!-- </div> -->
		  </div>

	</header>


	<section id="fh5co-work" data-section="work">
		<div class="container">
			<div class="row">
				<div class="col-md-12 section-heading text-center">
					<h2 class="to-animate">Work</h2>
					<div class="row">
						<div class="col-md-8 col-md-offset-2 subtext to-animate">
							<h3>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</h3>
						</div>
					</div>
				</div>
			</div>
			

				<?php

          include "images/upload/dbh.php";

          //result pre page
          $result_per_page = 9;

          //finde out number of results
          $sql = "SELECT * FROM image";
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
$sql = "SELECT * FROM image LIMIT $first_result,$result_per_page";
$result = mysqli_query($conn, $sql);


while ($row = mysqli_fetch_array($result)) {


    echo " 
  


    	<div class='col-md-4 col-sm-6 col-xxs-12'>
					<a href='showimg.php?".$row['id']."' class='fh5co-project-item  to-animate'>
						<img class='project-img' src= 'images/jkcodeguru".$row['banana']."' alt='".$row['name']."' title='".$row['name']."' class='img-responsive'>
						<div class='fh5co-text'>
						<h2>".$row['name']."</h2>
						
						</div>
					</a>
				</div>

    ";
   
		
}

 ?>		








					
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
					
				

	</section>

	


	<footer id="footer" role="contentinfo">
		
		<div class="container">
			<div class="">
				<div class="col-md-12 text-center">
					<p>&copy; JKCodeGuru. All Rights Reserved by JKCG&reg;. <br>Created by <a href="http://jkcodeguru.com" target="_blank">JKCG&reg;</a>

				</div>
			</div>
			<div class="row">
				<div class="col-md-12 text-center">
					<ul class="social social-circle">
						<li><a href="#"><i class="icon-coffee"></i></a></li>
						<li><a href="#"><i class="icon-design"></i></a></li>
						<li><a href="#"><i class="icon-code"></i></a></li>
					</ul>
					<div>
		            <a href="http://www.jkcodeguru.com" target="_blank"><img class="flag" src="images/flag/eng.jpg"><span class="flag-text">&nbsp;</span></a>

		            <a href="http://www.rs.jkcodeguru.com" target="_blank"><img class="flag" src="images/flag/srp.jpg"><span class="flag-text">&nbsp;</span></a>
		            </div>
				</div>

			</div>
			
		</div>

	</footer>

	

	</body>
</html>
