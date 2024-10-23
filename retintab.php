<! Doctype html> 
<html>
    <head>
      <title> Search info from table </title>  
      <?php 
          $visitor_number = htmlspecialchars ($_POST ["group"]) 
          $server = "localhost"; 
          $username = "ocl";
          $password = "0610jun96";
          $database = "Magic_Galaxy_Shop";
          $conn = mysqli_connect ($server, $username, $password, $database);
          
          // Check for successful connection
          if (!conn) {
            die("Connection failed: {mysqli_connect_error()}");
          }
          $sql = "select * visitor_name, visitor_number from visitors_list where visitor_number='{$visistor_name}';";
          $result = mysqli_query($conn, $sql);
          ?>
    </head>
    <body>
          You selected group: <?= $visistor_name ?>. </br>   
    </body>
</html>