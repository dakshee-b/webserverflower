<! Doctype html> 
<html>
    <head>
      <title> gpio response </title>  
    
    </head>
    <body>
    <p>
         <?=
           echo htmlspecialchars ($_POST ['lit']);
           $raw = bme280;
           $deserialized = json_decode($raw, true);
           var_dump($deserialized);
           echo $deserialized["temperature"];
           echo $deserialized["pressure"];
           echo $deserialized["altitude"];
             ?>
        </p>         
    </body>
</html> 