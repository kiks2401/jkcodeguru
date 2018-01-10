<?php 

if (empty($_POST) === false)  {
  	 
  	 $errors = array();

     $name = $_POST['name'];
     $email = $_POST['email'];
     $message = $_POST['message'];

     if (empty($name) === true || empty($email) === true || empty($message) === true) {
     	$errors[] = "Name, email and message are required;";
     } else {

     	if (filter_var($email, FILTER_VALIDATE_EMAIL) === false) {
     		$errors[] = 'That is not a valid email address';
     	}

     }

         if (empty($errors) === true) {
           	mail('info@jkcodeguru.com', 'Contact form', $message, 'From:'.$email);
           	header('Location: index.php?sent');
           	exit();
           }  
     	
     }

if  (empty($name)) {
        header("Location: index.php?error=name");
        exit();
    }

    if  (empty($email)) {
        header("Location: index.php?error=email");
        exit();
    }

    if  (empty($message)) {
        header("Location: index.php?error=message");
        exit();
    }


 ?>