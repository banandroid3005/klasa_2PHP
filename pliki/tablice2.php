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
$i=0;
$ty = array("pon","wto","sro","czw","pio","sob","nie");

foreach($ty as $element){
    if($i%2==0){
        echo "<td>";
        echo $element;
        echo "</td>";
        $i++;
    }
else{
    echo '<td style="background-color: cyan;">';
    echo $element."</td>";
    $i++;
}
    }


?>
</table>
</body>
</html>