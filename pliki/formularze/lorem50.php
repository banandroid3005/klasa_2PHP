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
    
    <?php
        if($_SERVER['REQUEST_METHOD'] === 'POST'){
        ?>
         <fieldset>
            <legend>lorem50</legend>
            <?php
            
    $a = $_POST['tekst'];
    echo "<p>";
    echo "Oto wpisany tekst: ";
    ?>
    </p><p style="color: red; font-style: italic;">
    <?php
            echo $a;
            echo "</p>";
            echo "</fieldset>";
    }else{
?>
     <form method="post">
     <fieldset>
            <legend>lorem50</legend>
    <textarea cols = "50" rows="5" name="tekst">

    </textarea>
    <br>
    <input type="submit" value="Wyślij">
        </fieldset>
   
    </p>
      
        <?php
    }
    ?>
    </form>
</body>
</html>