<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
label{
    padding-right: 15px;
}
        </style>
</head>
<body>
    <form>
 <?php
    foreach(range('a','z') as $litery){
        ?>
        <input type="checkbox" id="litery_<?=$litery?>" name="<?=$litera?>">
        <label for="litery_<?=$litery?>"><?=$litery?></label>
        
        <?php 
    }
    
?>
<input type="submit" value="Wyslij">
    </form>
</body>
</html>