<?php session_start()?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Noto+Sans+Gunjala+Gondi:wght@400..700&display=swap" rel="stylesheet">
    <title>Odpowiedź</title>
</head>
<body class="light-mode">
    <div class="theme-switch">
        <label for="theme-toggle">Ciemny motyw</label>
        <input type="checkbox" id="theme-toggle">
    </div>
    <?php
        if($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['user_answer'])){
    ?>
    <div class="container2">
        <div class="text">
        <h1>Odpowiedź</h1>
        <p>Trudność: <?=$_SESSION['difficulty']?></p>
        <p>Kategoria <?= $_SESSION['category']?></p>
        <p>Pytanie: <?=$_SESSION['question']?></p> 
        <p>Wybrałeś: <?=$_POST['user_answer']?></p>
        <p><?php if($_POST['user_answer'] == $_SESSION['correct_answer']){
             echo "<p class = dobre> Poprawna odpowiedź"; 
            }else{
                echo "<p class = zle>Niepoprawna odpowiedź </p>";
                echo "<p class = zle> Poprawna odpowiedź to: <span class=zie>{$_SESSION['correct_answer']}</span>";
            }
            ?></p>
    <?php
        }
        ?>
        <a href="pytanie.php">Kolejne pytanie</a>
        </div>
        <img src="baranek.jfif" alt="Coś się zepsuło">
    
        </div>
        <?php
            include 'footer.php';
            session_destroy();
        ?>
        <script>
        const themeToggle = document.getElementById('theme-toggle');
        const body = document.body;

 
        if (localStorage.getItem('theme') === 'dark') {
            body.classList.remove('light-mode');
            body.classList.add('dark-mode');
            themeToggle.checked = true;
        }

        themeToggle.addEventListener('change', () => {
            if (themeToggle.checked) {
                body.classList.remove('light-mode');
                body.classList.add('dark-mode');
                localStorage.setItem('theme', 'dark'); 
            } else {
                body.classList.remove('dark-mode');
                body.classList.add('light-mode');
                localStorage.setItem('theme', 'light'); 
            }
        });
    </script>
</body>
</html>