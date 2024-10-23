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
          $sql = "insert into visitors (group_name) values ('$group_name')";
          $result = mysqli_query($conn, $sql);
          ?>
    </head>
    <body>
                <?php
                     foreach($result as $row){
                        echo"<option value='{$row['group_number']}'> {$row['group_name']}</option></br>";
                     }
                     //close session (stop connection)
                     mysqli_close($conn);
                     ?>
                    </br>
                    <input type="submit" value="submit"/>
         </form>            
    </body>
</html> 