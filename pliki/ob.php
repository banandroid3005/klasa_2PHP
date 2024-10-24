<?php

class Dzielenie{
    public $liczbaA;
    public $liczbaB;

    public function dzielenie()
    {
        if(is_numeric($this->liczbaA) && is_numeric($this->liczbaB) && $this->liczbaB>0){
            return $this->liczbaA / $this->liczbaB;
        }
        return null;
    }

}

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

    $obiekt = new Dzielenie();
    $obiekt->liczbaA = 10;
    $obiekt->liczbaB = 2;

    ?>
    <p>Dzielenie: <?= $obiekt->liczbaA?> / <?= $obiekt->liczbaB?> = <?= $obiekt->dzielenie()?></p>
</body>
</html>