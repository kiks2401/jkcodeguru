<?php
      $conn = mysqli_connect('localhost', 'root', '', 'jkcodeguru');

    if (!$conn){
        die("Conectio feild: ".mysqli_connect_error());
    }
