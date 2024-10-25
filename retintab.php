<! Doctype html> 
<html>
    <head>
      <title> Search info from table </title>  
      <?php 
          $group_name = htmlspecialchars ($_POST["find"]);
          $server = "localhost"; 
          $username = "ocl";
          $password = "0610jun96";
          $database = "Magic_Galaxy_Shop";
          $conn = mysqli_connect ($server, $username, $password, $database);
          
          // Check for successful connection
          if (!$conn) {
            die("Connection failed: {mysqli_connect_error() }");
          }
          $sql = "select group_name, group_number from visitors;";
          $result = mysqli_query($conn, $sql);
          ?>
    </head>
    <body>
          You selected group:<?= htmlspecialchars ($group_name); ?>. </br> 
          <?php 
          foreach($result as $row){
            echo "{$row["group_name"]} is the number {$row["group_number"]}.<br>";
         }
         /*if($resultcheck > 0) {
          while($row = mysqli_fetch_assoc($result)){
             echo "{$row['group_name']} is the number {$row['group_number']}.</br>";
          }
        }*/
         //close session (stop connection)
         mysqli_close($conn);
          ?>
    </body>
</html>