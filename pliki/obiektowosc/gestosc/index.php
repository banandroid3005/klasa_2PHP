<?php
include_once 'MasaGestosc.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Masa i gestość</title>
    <style>
ol{
    list-style-type: upper-roman;
}
        </style>
</head>
<body>
    <?php
    $obj = new Gestosc(0.05,"Gips");
    $obj2 = new Gestosc(0.05,"Rtęć"); 
    $obj3 = new Gestosc(0.05,"Złoto");
    $obj4 = new Gestosc(0.05,"Woda");
    ?>
    <ol>
    <li>Masa kulki <b>gipsu</b> o promieniu <u>5cm</u>: <mark><?=number_format($obj->M(),3,",",",")?> kg</mark></li>

    <li>Masa kulki <b>rtęci</b> o promieniu <u>5cm</u>: <mark><?=number_format($obj2->M(),3,",",",")?> kg</mark></li>

    <li>Masa kulki <b>złota</b> o promieniu <u>5cm</u>: <mark><?=number_format($obj3->M(),3,",",",")?> kg</mark></li>

    <li>Masa kulki <b>wody</b> o promieniu <u>5cm</u>: <mark><?=number_format($obj4->M(),3,",",",")?> kg</mark></li>
</ol>
</body>
</html>