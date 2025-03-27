<?php session_start()?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Document</title>
</head>
<body>
    <?php
        if($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['user_answer'])){
    ?>
    <div class="container">
        <h1>Odpowiedź</h1>
        <p>Trudność: <?=$_SESSION['difficulty']?></p>
        <p>Kategoria <?= $_SESSION['category']?></p>
        <p>Pytanie: <?=$_SESSION['question']?></p>
        <p>Wybrałeś: <?=$_POST['user_answer']?></p>
        <p><?php if($_POST['user_answer'] == $_SESSION['correct_answer']){
             echo "Poprawna odpowiedź"; 
            }else{
                echo "Niepoprawna odpowiedź <br>";
                echo "Poprawna odpowiedź to: {$_SESSION['correct_answer']}";
            }
            ?></p>
    <?php
        }
        ?>
        <a href="pytanie.php">Kolejne pytanie</a>
        </div>
        <?php
            session_destroy();
        ?>
</body>
</html>