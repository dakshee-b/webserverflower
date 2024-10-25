 <! Doctype html> 
<html>
    <head>
      <title> Form response </title>  
      <?php 
          $server = "localhost"; 
          $username = "ocl";
          $password = "0610jun96";
          $database = "Magic_Galaxy_Shop";
          $conn = mysqli_connect($server, $username, $password, $database);
          
          // Check for successful connection
          if (!$conn) {
            die("Connection failed: {mysqli_connect_error()}");
          }
          $gr= htmlspecialchars ($_POST ['gr']);  
          $num= htmlspecialchars ($_POST ['num']);
          $sql = "insert into visitors (group_name, group_number) values ('$gr', '$num')";
         
          $result = mysqli_query($conn, $sql);
         
          //test if the data is true
          echo $result ? "Success!" : "Failure: {mysqli_error($conn)}";
          echo mysqli_error($conn); 
          ?>
    </head>
    <body>
               <?php
                    foreach($result as $row){
                        echo"<option value='{$row['group_name']}'> {$row['group_number']}</option></br>"; } 
                     //close session (stop connection)
                     mysqli_close($conn);
                     ?>    
                    </br>          
    </body>
</html> 