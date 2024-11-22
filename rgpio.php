<! Doctype html> 
<html>
    <head>
      <title> gpio toggle response </title>  
    
    </head>
    <body>
    <p>
         <?=
            htmlspecialchars ($_POST ['bn']);
            $output = `gpio toggle 3`; 
             ?>
        </p>         
    </body>
</html> 