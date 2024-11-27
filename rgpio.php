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

     
          // Get the LED state from the form (either 'on' or 'off')
          $led_state = htmlspecialchars ($_POST['led_state']);
      
          // GPIO pin where the LED is connected (Example: GPIO pin 17)
          $gpio_pin = 3;
      
          // Ensure GPIO pin is configured for output (wiringPi or other library)
          shell_exec("gpio mode $gpio_pin out");
      
          // Toggle the LED based on the form value
          if ($led_state == 'on') {
              // Turn the LED on (set the GPIO pin high)
              shell_exec("gpio write $gpio_pin 1");
              echo "<p>LED is ON</p>";
          } elseif ($led_state == 'off') {
              // Turn the LED off (set the GPIO pin low)
              shell_exec("gpio write $gpio_pin 0");
              echo "<p>LED is OFF</p>";
          } 

             ?>
        </p>         
    </body>
</html> 