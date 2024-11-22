<?php
include_once 'okrag_sfera_kula.php';
$d = new OkragSferaKula($tmp = rand(0,99));

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Okrąg Sfera Kula</title>
</head>
<style>
    body{
        background-color:#219ebc;
        color: #023047;
        font-family: Garamond;
        padding: 20px;
        font-size: 18px;
        font-weight: bold;
        text-align: center;

    }
    table{
        background-color: #8ecae6;
        border-collapse:collapse;
        width: 100%;
        table-layout:fixed;
    }
    tr,td{
        border: 4px solid #ffb703;
        padding: 10px;
        border-collapse:collapse;
    }
   
    </style>
<body>
    <table>
<tr><td colspan="3">Promien kuli: r = <?=$tmp?></td></tr>
<tr><td>Obwód</td><td>Pole powierzchni</td><td>Objętość</td></tr>
<tr><td><em>L = 2&#x03C0;r</em></td><td><em>P = 4&#x03C0;r<sup>2</sup></em></td><td><em>V = ⅓ ‧ 4&#x03C0;r<sup>3</sup></em></td></tr>
<tr><td><?=$d->obwod($tmp)?></td><td><?=$d->pole($tmp)?></td><td><?=$d->objetosc($tmp)?></td></tr>
</table>
</body>
</html>