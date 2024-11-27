<! Doctype html> 
<html>
    <head>
      <title> gpio response </title>  
    
    </head>
    <body>
    <p>
         <?=
           htmlspecialchars ($_POST ['data']);
          $raw = bme280;
           $deserialized = json_decode($raw, true);
           var_dump($deserialized);
           echo $deserialized["temperature"];
           echo $deserialized["pressure"];
           echo $deserialized["altitude"]; 

           $data = array(
            "temperature" => $temperature,
            "pressure" => $pressure,
            "altitude" => $altitude
        ); 
        echo json_decode($raw, true);
             ?>
        </p>         
    </body>
</html> 