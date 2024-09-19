<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Echo i print</title>
</head>
<body>
    <p><?php echo 'Tu funkcja echo <br>';?></p>
    <p><?php echo 'Tu ' . 'funkcja '. 'echo'. '<br>';?></p>
    <p><?php echo "Tu funkcja echo <br>";?></p>
    <p><?php echo "Tu " . "funkcja ". "echo". "<br>";?></p>
    <p><?php print("Zgłasza się funkcja print <br>");?></p>
    <p><?php print("Zgłasza "."się "."funkcja "."print"."<br>");?></p>
    <p<?php
    // komentarz jednoliniowy
# jnj
/* Komentarz
wielo
liniowy*/ 
    ?></p>
</body>
</html>
<?php

echo 'Tu funkcja echo <br>';
echo 'Tu ' . 'funkcja '. 'echo'. '<br>';
echo "Tu funkcja echo <br>";
echo "Tu " . "funkcja ". "echo". "<br>";


print("Zgłasza się funkcja print <br>");
print("Zgłasza "."się "."funkcja "."print"."<br>");


// komentarz jednoliniowy
# jnj
/* Komentarz
wielo
liniowy*/ 
?>
<?="Pierwszy dowolny tekst <br>";?>
<?="Drugi dowolny tekst <br>";?>
