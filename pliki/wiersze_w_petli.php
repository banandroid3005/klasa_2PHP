<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Wiersze w pętli while</title>
    <style>
        table,td{
            background-color: lightgray;
            border-color: gray;
            padding: 10px;
            border: solid black 2px;
            border-collapse: collapse;
        }
        </style>
</head>
<body>
    <table>
    <?php
    $i=1;
    while($i<6){
        echo "<tr><td>To jest wiersz numer {$i}</td></tr>";
        $i++;
    }
    ?>
    </table>
</body>
</html>