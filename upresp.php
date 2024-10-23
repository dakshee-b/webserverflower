<! Doctype html> 
<html>
    <head>
      <title> Form response </title>  
      <?php 
          $server = "localhost"; 
          $username = "ocl";
          $password = "0610jun96";
          $database = "Magic_Galaxy_Shop";
          $conn = mysqli_connect ($server, $username, $password, $database);
          
          // Check for successful connection
          if (!conn) {
            die("Connection failed: {mysqli_connect_error()}");
          }
          $sql = "CREATE TABLE visitors(
          id int auto_increment primary key,
          group_name varchar(255),
          group_number varchar (255));";
          $result = mysqli_query($conn, $sql);
          ?>
    </head>
    <body>
        <form action="upresp.php" method="post">
            <label for="check-in">Select a group:</label></br>
            <select id="group" name="group">
                <?php
                     foreach($result as $row){
                        echo"<option value='{$row['group_number']}'> {$row['group_name']}</option></br>";
                     }
                     //close session (stop connection)
                     mysqli_close($conn);
                     ?>
                     </select>
                    </br>
                    <input type="submit" value="submit"/>
         </form>            
    </body>
</html>