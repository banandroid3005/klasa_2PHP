<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
 
    <PRE>
        <?php
            $parzyste = RANGE(0,12,2);
          print_r($parzyste);
          ?>
          </PRE>
        <p>
          <?php
          $dziesiatki = RANGE(-10,100,10);
          foreach($dziesiatki as $element){
            echo $element. " ";
          }
        ?>
        </p>
        <p>
                <?php
                    $polowki = Range(-5.5,5.5,0.5);
                    foreach($polowki as $element){
                        echo $element. " ";
                    }
                ?>
                </p>
                <p>
                    <?php
                    $litery_od_em = Range("m","u");
                    foreach($litery_od_em as $element){
                        echo $element. " ";
                    }
        ?></p>
        <p>
                    <?php
                    $litery_wstecz = Range("X","E");
                    foreach($litery_wstecz as $element){
                        echo $element. " ";
                    }
        ?></p>

</body>
</html>