<?php
session_start();
include 'menu.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Strona główna</title>
</head>
<body>
    <h1>Strona domowa</h1>
    <?php
    if(isset($_SESSIOJ['im'])){
        echo "Witaj ".$_SESSION['im']."<br>";
        $_SESSION['czy'] = true;
    }else{
        echo "Witaj gościu <br>";
        $_SESSION['czy'] = false;
    }
    ?>
</body>
</html>