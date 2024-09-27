<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
table,td,tr{
            background-color: cyan;
            padding: 20px;
            border: solid black 2px;
            border-collapse: collapse;
        }
        </style>
        
<body>
    <table>
<?php

$ty[0] = "pon";
$ty[1] = "wto";
$ty[2] = "sro";
$ty[3] = "czw";
$ty[4] = "pio";
$ty[5] = "sob";
$ty[6] = "nie";
$i = 1;
foreach($ty as $element){
    echo "<tr>{$element}</tr>";
    }


?>
</table>
</body>
</html>