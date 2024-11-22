<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<style>
table,td,tr{
    border: 3px dotted red;
    border-collapse: collapse;
    padding: 15px;
}
    </style>
<body>
    <table>
        <tr>
<?php

$tab=(str_split("Kon'nichiwa sekai"));
foreach($tab as $element){
    echo "<td>".$element."</td>";
}

?>
</tr>
</table>
</body>
</html>