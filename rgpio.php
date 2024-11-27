<! Doctype html> 
<html>
    <head>
      <title> gpio response </title>  
    
    </head>
    <body>
    <p>
         <?=
           echo htmlspecialchars ($_POST ['lit']);
            echo $deserialized["temperature"];
            echo $deserialized["pressure"]; 
            echo $deserialized["altitude"];
             ?>
        </p>         
    </body>
</html> 