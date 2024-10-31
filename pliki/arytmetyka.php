<?php

class Arytmetyka{
    public ?float $liczbaA = null;
    public ?float $liczbaB = null;

    public function suma()
    {
        if(is_numeric($this->liczbaA) && is_numeric($this->liczbaB)){
              return $this->liczbaA + $this->liczbaB;
        }
        return null;
    }
    public function roznica()
    {
        if(is_numeric($this->liczbaA) && is_numeric($this->liczbaB)){
              return $this->liczbaA - $this->liczbaB;
        }
        return null;
    }
    public function iloczyn()
    {
        if(is_numeric($this->liczbaA) && is_numeric($this->liczbaB)){
              return $this->liczbaA * $this->liczbaB;
        }
        return null;
    }
    public function iloraz()
    {
        if(is_numeric($this->liczbaA) && is_numeric($this->liczbaB) && $this->liczbaB!=0){
            return $this->liczbaA / $this->liczbaB;
        }
        return "błąd";
    }
    public function reszta()
    {
        if(is_numeric($this->liczbaA) && is_numeric($this->liczbaB) && $this->liczbaB!=0){
              return $this->liczbaA % $this->liczbaB;
        }
        return "błąd";
    }
    public function potega()
    {
        if(is_numeric($this->liczbaA) && is_numeric($this->liczbaB)){
              return $this->liczbaA ** $this->liczbaB;
        }
        return null;
}
}

?>
<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Arytmetyka</title>
</head>
<body>
    <?php
    $d = new Arytmetyka();
    $d->liczbaA = 10;
    $d->liczbaB = -1;
    ?>
    <ul style="list-style-type: circle">
    <li>Suma liczb <b><?= $d->liczbaA?></b> i <b><?=$d->liczbaB?></b> jest równa <b><?=$d->suma()?></b></li>
    <li>Różnica liczb <b><?= $d->liczbaA?></b> i <b><?=$d->liczbaB?></b> jest równa <b><?=$d->roznica()?></b></li>
    <li>Iloczyn liczb <b><?= $d->liczbaA?></b> i <b><?=$d->liczbaB?></b> jest równy <b><?=$d->iloczyn()?></b></li>
    <li>Iloraz liczb <b><?= $d->liczbaA?></b> i <b><?=$d->liczbaB?></b> wynosi <b><?=$d->iloraz()?></b></li>
    <li>Reszta z dzielenia liczby <b><?= $d->liczbaA?></b> przez <b><?=$d->liczbaB?></b> jest równa <b><?=$d->reszta()?></b></li>
    <li>Liczba <b><?= $d->liczbaA?></b> do potęgi <b><?=$d->liczbaB?></b> jest równa <b><?=$d->potega()?></b></li>
</ul>
</body>
</html>