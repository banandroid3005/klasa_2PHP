<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Suma parzystych dwucyfrowych</title>
</head>
<body>
    <p>
        <?php
        $x=0;
        for($i=10;$i<100;$i++){
            if($i%2==0){
                echo $i;
                if($i != 98){
                    echo " | ";
                }
                    $x = $i+$x;
            }
        }
        ?>
</p>
<p>Suma powyższych liczb wynosi <?= $x?></p>
    
</body>
</html>