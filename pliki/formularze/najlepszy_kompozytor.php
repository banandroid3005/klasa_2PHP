<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
fieldset{
    border: solid 3px blue;
}
legend{
    border-top: solid blue;
    border-bottom: solid blue;
    padding: 10px;
}
        </style>
</head>
<body>
<?php
        if($_SERVER['REQUEST_METHOD'] === 'POST'){
            $a = $_POST['rad'];
        ?>
        <fieldset>
            <legend>Najlepszy kompozytor</legend>
            <p>Według ciebie najlepszym kompozytorem jest: <?=$a?></p>
        </fieldset>
        <?php
        }else{
        ?>
        <form method="post">
        <fieldset>
            <legend>Najlepszy kompozytor</legend>
            <p>
                
            <input type="radio" name="rad" id="ale" value="Alexander Borodin" required>
            <label for="ale">Alexander Borodin</label><br>
            <input type="radio" name="rad" id="fry" value="Fryderyk Chopin" required>
            <label for="fry">Fryderyk Chopin</label><br>
            <input type="radio" name="rad" id="edv" value="Edvard Grieg" required>
            <label for="edv">Edvard Grieg</label><br>
            <input type="radio" name="rad" id="sta" value="Stanisław Moniuszko" required>
            <label for="sta">Stanisław Moniuszko</label><br>
            <input type="radio" name="rad" id="giu" value="Giuseppe Verdi" required>
            <label for="giu">Giuseppe Verdi</label><br>
            <input type="radio" name="rad" id="ric" value="Richard Wagner" required>
            <label for="ric">Richard Wagner</label><br>
        </p>
        <input type="submit" value="Wybierz swojego ulubionego kompozytora">
        </fieldset>
        </form>
        <?php
        }
        ?>
</body>
</html>