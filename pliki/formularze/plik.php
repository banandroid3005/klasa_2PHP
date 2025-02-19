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
fieldset{
    border: 2px solid blue;
}
        </style>
</head>
<body>
    <fieldset>
        <legend>Alfabet</legend>
    <form method= "post">
 <?php
    foreach(range('a','z') as $litera){
        $checked = (isset($_POST['litera']) && in_array($litera, $_POST['litera'])) ? 'checked' : '';
        ?> 
        <input type="checkbox" name="litera[]" id="<?=$litera?>" value="<?=$litera?>" <?=$checked?>>
        <label for="<?=$litera?>"><?=$litera?></label>
        <?php } ?>
        <br><input type="submit" value="Wybierz">
        <?php 
        
    if($_SERVER["REQUEST_METHOD"]=="POST" && isset($_POST['litera'])){
        $i=$_POST['litera'];
        $p = 1;
        if(!empty($_POST['litera'])){
            if(count($_POST['litera']) > 1){
                echo "Te litery zostały wybrane: ";
                foreach($_POST['litera'] as $litera){
                    if($p == count($_POST['litera'])){
                        echo $litera.".";
                    } else{
                        echo $litera.", ";
                    }
                    $i++;
                }
            } else{
                echo "Ta litera została wybrana : ".$i.".";
                }
            }
        }else{
            echo "Żadna litera nie została wybrana";
        }


    
?>
    </form>
    </fieldset>
</body>
</html>