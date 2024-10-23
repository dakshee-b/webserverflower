<?php 
          $server = "localhost"; 
          $username = "ocl";
          $password = "0610jun96";
          $database = "Magic_Galaxy_Shop";
          $conn = mysqli_connect ($server, $username, $password, $database);
          
          // Check for successful connection
          if ($conn) {
            echo "You are connected!";
          }
          else{
            echo "Could not connect!";
          }