<! Doctype html> 
<html>
    <head>
      <title> Client response </title>  
      <?php 
          $server = "localhost"; 
          $username = "ocl";
          $password = "0610jun96";
          $database = "client";
          $conn = mysqli_connect($server, $username, $password, $database);
          
          // Check for successful connection
          if (!$conn) {
            die("Connection failed: {mysqli_connect_error()}");
          }
          
          $ip=htmlspecialchars ($_SERVER['REMOTE_ADDR']);  
          $search=htmlspecialchars ($_GET ['search']);

          $sql = "insert into client (search_term, IP_address) values ('$ip', '$search')";
         
          $result = mysqli_query($conn, $sql);
         
          //test if the data is true
          echo $result ? "Success!" : "Failure: {mysqli_error($conn)}";
          echo mysqli_error($conn); 
          ?>
    </head>
    <body>
               <?php
                    foreach($result as $row){
                        echo"<option value='{$row['search_term']}'> {$row['IP_address']}</option></br>"; } 
                        header('Location: https://www.google.com/search?q=13&rlz=1C1GCEB_enCA1111CA1141&oq=13&gs_lcrp=EgZjaHJvbWUyDAgAEEUYORixAxiABDIPCAEQABhDGLEDGIAEGIoFMhIIAhAAGEMYgwEYsQMYgAQYigUyDwgDEC4YQxiABBjlBBiKBTIMCAQQABhDGIAEGIoFMgcIBRAAGIAEMgcIBhAAGIAEMgcIBxAAGIAEMhAICBAAGIMBGLEDGIAEGIoFMgoICRAuGLEDGIAE0gEHNjg3ajBqN6gCCLACAQ&sourceid=chrome&ie=UTF-8/');
                        //close session (stop connection)
                     mysqli_close($conn);
                     ?>    
                    </br>          
    </body>
</html> 