<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<style>
    table{
        border:solid 1px lightgray;
        border-top: none;
    }
    td{
        padding: 7px;
        border-top:solid 1px lightgray;
    }
    legend{
        text-align: center;
    }
    .sub{
        text-align: center;
        justify-content: center;
    }
</style>
<body>
    <table>
        <legend>Oceny</legend>
    <?php
        for($i = 1;$i<=50;$i++){

    ?>
    <tr>
    <td>
        <label for="uczen_<?=$i?>">Uczeń <?=$i?></label>
        <input type="text" name="uczen_<?=$i?>">
    </td>
        </tr>
    <?php
        }
    ?>
    
    <tr>
        <div class="sub"><td colspan="2"><input type="submit" name="wyslij" value="Zapisz"></td></div>
    </tr>
    </table>
</body>
</html>