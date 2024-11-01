<?php

class Waluty
{

public ?float $liczbaA = null;

public function PLNtoEuro()
{
    if(is_numeric($this->liczbaA)){
        return $this->liczbaA * 0.23;
    }
}

public function EurotoPLN()
{
    if(is_numeric($this->liczbaA)){
        return $this->liczbaA * 4.36;
    }
}

public function PLNtoUSD()
{
    if(is_numeric($this->liczbaA)){
        return $this->liczbaA * 0.25;
    }
}

public function USDtoPLN()
{
    if(is_numeric($this->liczbaA)){
        return $this->liczbaA * 4.03;
    }
}

public function PLNtoGDP()
{
        if(is_numeric($this->liczbaA)){
        return $this->liczbaA * 0.19;
    }
}

public function GDPtoPLN()
{
    if(is_numeric($this->liczbaA)){
        return $this->liczbaA * 5.20;
    }
}


}

$obj = new Waluty();
$obj->liczbaA = 1.0;
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <ul style="list-style-type: square;">
    <li><?=$obj->liczbaA?> PLN = <?=$obj->PLNtoEuro()?> Euro</li>
    <li><?=$obj->PLNtoEuro()?> Euro = <?= $obj->liczbaA?> PLN</li>
    <li><?=$obj->liczbaA?> PLN  = <?=$obj->PLNtoUSD()?> USD</li>
    <li><?=$obj->PLNtoUSD()?> USD = <?= $obj->liczbaA?> PLN</li> 
    <li><?=$obj->liczbaA?> PLN = <?=$obj->PLNtoGDP()?> GDP</li>
    <li><?=$obj->PLNtoGDP()?> GDP = <?= $obj->liczbaA?> PLN</li> 
</ul>
</body>
</html>