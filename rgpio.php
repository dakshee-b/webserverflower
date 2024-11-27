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

     
          
          $data = htmlspecialchars ($_POST['data']);
        
      
          
          $raw = `./bme280`; 

         // echo $raw; 
          
          $deserialized = json_decode($raw, true); 
          
         // var_dump($deserialized); 
          Temperature:
          echo $deserialized["temperature"]; 
     

          if ($temp == 'temperature') {
              echo $filter["temperature"];

          } elseif ($pres == 'pressure') {
              echo $filter["pressure"];

          } elseif ($alt == 'altitude') {
            echo $filter["altitude"];
        } 

             ?>
             <?=
             
          $data = htmlspecialchars ($_POST['data']);
        
      
          
          $raw = `./bme280`; 

         // echo $raw; 
          
          $deserialized = json_decode($raw, true); 
          
         // var_dump($deserialized); 
   
          Pressure:
          echo $deserialized["pressure"];
    
          ?>
           <?=
             
             $data = htmlspecialchars ($_POST['data']);
           
         
             
             $raw = `./bme280`; 
   
            // echo $raw; 
             
             $deserialized = json_decode($raw, true); 
             
            // var_dump($deserialized); 
            
             Altitude:
             echo $deserialized["altitude"];
             ?>
        </p>         
    </body>
</html> 