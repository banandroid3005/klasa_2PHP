<?php
include_once 'policz_wyrazy.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    $ok = "Litwo! Ojczyzno moja! ty jesteś jak zdrowie.</br>Ile cię trzeba cenić, ten tylko się dowie,</br>Kto cię stracił. Dziś piękność twą w całej ozdobie</br>Widzę i opisuję, bo tęsknię po tobie.</br>";
    ?>
    <p><?=PoliczWyrazy::$s?></p>
    <fieldset>
    <?=$ok?>
</fieldset>
<p>Tekst w ramce składa się z <?= PoliczWyrazy::policzWyrazy($ok)?> wyrazów</p>
</body>
</html>