<!DOCTYPE html>
<html class="no-js">
	<head>

		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<title>JKCodeGuru &mdash; Programing & Designing</title>
		<meta name="viewport" content="width=device-width, initial-scale=1">

		<meta name="description" content="Svihran Kristijan, Svihran Janko, Svihran Erika, jkcodeguru.com, Programing, Designing, UI, GUI, SEO, HTML, CSS, PHP, CSS, JS, jquery, Video, After Effect, Epic Effect, Video Montage, PhotoShop, Adobe Premiere Pro, Funny Videos, Templates, Events, Portfolio, guru, crativity, programing is fun, logo, logo design, tutorial, teaching, education, programing skills, self made website, gallery, pagination" />

		<meta name="keywords" content="html5, template, bootstrap, html, css, mobile first, responsive, programing, web programing, design, gallery" />

		<meta name="author" content="jkcodeguru.com" />

	<link href='https://fonts.googleapis.com/css?family=Source+Sans+Pro:400,300,600,400italic,700' rel='stylesheet' type='text/css'>

    <link rel="stylesheet" href="style-work.css">
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

	<!-- Modernizr JS -->
	<script src="js/modernizr-2.6.2.min.js"></script>

	<script src="js/respond.min.js"></script>


</head>
<body>

	<header role="banner" id="fh5co-header">

			<div class="container">
				<!-- <div class="row"> -->
			    <nav class="navbar navbar-default">
		        <div class="navbar-header">
		        	<!-- Mobile Toggle Menu Button -->
					<a href="#" class="js-fh5co-nav-toggle fh5co-nav-toggle" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar"><i></i></a>
		         <a class="navbar-brand" href="../index.php"><img src="../images/logo.png"></a>
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


	<section id="fh5co-work">
		<div class="container">
	<?php 

include 'images/upload/dbh.php';



$url = "http://".$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI'];

    $sql = "SELECT id FROM image";
$result = mysqli_query($conn, $sql);


while ($row = mysqli_fetch_array($result)) {

	if (strpos($url, $row['id']) !== false) {

	     $sql = "SELECT * FROM image WHERE id='".$row['id']."'";
		$result = mysqli_query($conn, $sql);

		while ($row = mysqli_fetch_array($result)) {
 			echo "
 				<div class='container'>
	<div class='center'>

 				 <div class='title'><h1>".$row['name']."</h1></div>
 				 <br>
 				  <br>
 				 
 				 <img src='images/jkcodeguru".$row['banana']."'>
 				 <br>
 				 <br>
 				 

 				 <div class='desc'>".$row['description']."</div>
 				 <br>
 				 <br>
 				 

				 <div class='link'>
 				 <p>You can watch how we make this picture on Youtube:</p>
 				 <li><a href='".$row['link']."'>HERE</a></li>	
 				 </div>
 				 <br>
 				 <br>

 				 <a href='download.php?file=images/jkcodeguru".$row['banana']."'>Dowload Image</a>	
    </div>
 </div>


 			";

 			

		}

   }

}

	 ?>
				




				
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
					
				</div>

			</div>
			
		</div>

	</footer>

	

	</body>
</html>
