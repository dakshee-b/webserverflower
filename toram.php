<! Doctype html> 
<html>
    <head>
      <title> Form response or answer </title>  
</head>
    <body>
        <p>
        What is your name?  <?=
            htmlspecialchars ($_POST ['q1']) 
             ?>
        </p>
        <p>
        How was your day? <?=
            htmlspecialchars ($_POST ['q2']) 
             ?>
       </p>
       <p>
       How are you feeling right now?  <?=
            htmlspecialchars ($_POST ['emotion']) 
             ?>
        </p> 
        <p>
        What is your favorite weather?  <?=
            htmlspecialchars ($_POST ['weather']) 
             ?>
        </p>
        <p>
        What is your favorite moment during the day?  <?=
            htmlspecialchars ($_POST ['24h']) 
             ?>
        </p>
        <p>
        How do you feel after answering the questions above?  <?=
            htmlspecialchars ($_POST ['emotions']) 
             ?>
        </p>
</body>
    </html>