<?php
include_once 'Prostopadloscian.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Przekątna prostopadłościanu</title>
<style>
    p{
        background-color: plum;
        padding: 30px;
        text-align: right;
    }
</style>
</head>
<?php
$obj = new Prostopadloscian($tmp = 1,$tmp2 = 2,$tmp3 = 3);
?>
<body>
  <p>Przekątna prostopadłościanu o krawędziach <?=$tmp?>, <?=$tmp2?> i <?=$tmp3?> wynosi <?=$obj->przekatnaBryly()?>  
</body>
</html>