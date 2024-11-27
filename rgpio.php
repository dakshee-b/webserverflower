<! Doctype html> 
<html>
    <head>
      <title> gpio response </title>  
    
    </head>
    <body>
    <p>
         <?=
         /*  htmlspecialchars ($_POST ['data']); */
        /*  $raw = bme280;
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
        echo json_decode($raw, true); */

     
          
          $temp = htmlspecialchars ($_POST['temp']);
          $pres= htmlspecialchars ($_POST['pres']);
          $alt = htmlspecialchars ($_POST['alt']);
      
          
          
          if ($temp == 'temperature') {
            $raw = `./bme280`; 

echo $raw; 

$deserialized = json_decode($raw, true); 

var_dump($deserialized); 

echo $deserialized["temperature"]; 
        } elseif ($pres == 'pressure') {
          $raw = `./bme280`; 

          echo $raw; 
          
          $deserialized = json_decode($raw, true); 
          
          var_dump($deserialized); 
          
          echo $deserialized["pressure"]; 
        } elseif ($alt == 'altitude') {
          $raw = `./bme280`; 

          echo $raw; 
          
          $deserialized = json_decode($raw, true); 
          
          var_dump($deserialized); 
          
          echo $deserialized["altitude"]; 
        }

             ?>
        </p>         
    </body>
</html> 