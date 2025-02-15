<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
fieldset{
    border: solid 2px black;
}
        </style>
</head>
<body>
    <fieldset>
        <legend>Roczniki</legend>
    <form action="" method="post">
    <?php

for($i=2010;$i<2026;$i++){
    echo "<input type=radio name=rok id={$i}> Rok ". $i."<br>";
}
?>

    </form>
    </fieldset>

    </body>
</html>