<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <title>Wiek</title>
    <style>
h1{
    color: brown;
    padding: 10px;
    border: solid black 2px;
}
h2{
    color: indigo;
    border: 2px dotted navy;
    padding: 10px;
}
        </style>
</head>
<body>
    <p> <?php $wiek = rand(0,100);?></p>
    <h1><?php 
    if($wiek<2) echo "Mam rok";
    else if($wiek==2 || $wiek==3 || $wiek==4 || $wiek%10==2 || $wiek%10==3 || $wiek%10==4) echo "Mam {$wiek} lata";
    else if($wiek==0) echo "Albo mam kilka miesiecy albo sie nie urdoziłem";
    else if($wiek>4) echo "Mam {$wiek} lat";?>
    </h1>
    
    <h2>
        <?php switch($wiek){ 
        case $wiek<18 :
        echo "Jeszcze nie możesz głosować";
        break;
     case $wiek<21: 
        echo "Możesz tylko głosować";
        break;
     case $wiek<30:
        echo "Możesz głosować i kandydować do sejmu";
        break;
     case $wiek<35:
        echo "Możesz głosować i kandydować do sejmu i senatu";
        break;
     case $wiek>=35:
        echo "Możesz głosować i kandydować do sejmu i senatu oraz na Prezydenta";
        break;}?>
        </h2>
    
</body>
</html>