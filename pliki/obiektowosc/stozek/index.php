<?php
include_once 'stozek.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Stozek</title>
<style>
    body{
        background-color: pink;
        color: darkmagenta;
        font-family: "Consolas";
        font-size: 50px;
        padding-top: 100px;
        padding-bottom: 100px;
        text-align:center;
        margin-right: 0px;
        margin-left: 0px;
    }
    #s{
        border-top: 3px solid magenta;
        border-bottom: 3px solid magenta;
        display: inline-block;

    }
</style>
</head>
<body>
    <?php
        $s = new Stozek($tmp = 123.45,$tmp2 =678.09);
        $j = "cm";
    ?>
    <div id = "s">
        <p>Stożek</p>
        <p>Promień: R = <?=number_format($tmp,2,","," ")?> <?=$j?></p>
        <p>Wysokość: H = <?=number_format($tmp2,2,","," ")?> <?=$j?></p>
        <p>Pole: P = <?=number_format($s->PoleCalkowite(),2,","," ")?> <?=$j?><sup>2</sup></p>
        <p>Objętość: V = <?=number_format($s->Objetosc(),2,","," ")?> <?=$j?><sup>3</sup></p>
    </div>
</body>
</html>