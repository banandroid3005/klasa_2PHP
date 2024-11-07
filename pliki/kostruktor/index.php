<?php
include_once 'Arytmetyka.php';
?>
<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<style> 
ul{
    list-style-type: square;
    font-size: 20px;
    background-color: cyan;
}
    </style>
<body>
<?php
    $d = new Arytmetyka(8,3);
    ?>
    <ul>
    <li>Suma liczb <b><?= $d->liczbaA?></b> i <b><?=$d->liczbaB?></b> jest równa <b><?=$d->suma()?></b></li>
    <li>Różnica liczb <b><?= $d->liczbaA?></b> i <b><?=$d->liczbaB?></b> jest równa <b><?=$d->roznica()?></b></li>
    <li>Iloczyn liczb <b><?= $d->liczbaA?></b> i <b><?=$d->liczbaB?></b> jest równy <b><?=$d->iloczyn()?></b></li>
    <li>Iloraz liczb <b><?= $d->liczbaA?></b> i <b><?=$d->liczbaB?></b> wynosi <b><?=$d->iloraz()?></b></li>
    <li>Reszta z dzielenia liczby <b><?= $d->liczbaA?></b> przez <b><?=$d->liczbaB?></b> jest równa <b><?=$d->reszta()?></b></li>
    <li>Liczba <b><?= $d->liczbaA?></b> do potęgi <b><?=$d->liczbaB?></b> jest równa <b><?=$d->potega()?></b></li>
</ul>
</body>
</html>