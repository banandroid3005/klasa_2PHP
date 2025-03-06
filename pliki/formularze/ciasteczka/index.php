<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Strona główna</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Comfortaa:wght@300..700&family=Merriweather:ital,wght@0,300;0,400;0,700;0,900;1,300;1,400;1,700;1,900&display=swap" rel="stylesheet">
    <style>
        body {
            font-family: 'Merriweather', serif;
            background-color: #f9f9f9;
            color: #333;
            margin: 0;
            padding: 0;
            justify-content: center;
            align-items: center;
            height: 1080px;
            text-align: center;
        }

        .g {
            background-color: #fff;
            border-radius: 15px;
            box-shadow: 0 4px 20px rgba(0, 0, 0, 0.1);
            padding: 40px;
            width: 90%;
            max-width: 700px;
            margin-left: 900px;
            box-sizing: border-box;
            transition: transform 0.3s ease-in-out;
            height: 400px;
            display: flex;
            flex-direction: column; 
            justify-content: flex-start; 
        }

        .g:hover {
            transform: translateY(-10px);
        }

        h1 {
            color: #2c3e50;
            font-size: 40px;
            font-weight: 700;
            margin-bottom: 20px;
            text-transform: uppercase;
            letter-spacing: 1px;
        }

        p {
            font-size: 18px;
            color: #555;
            line-height: 1.8;
            margin-top: 20px;
            margin-bottom: 10px;
            display: block;
        }
    </style>
</head>

<body>

    <?php include 'menu.php'; ?>
    <br>
    <h1>Strona główna</h1>
    <div class="g">
        <p>Jakie ciastko powinno być ustawione?</p>
        <p>
            <?php
            if (isset($_SESSION['ciastko'])) {
                echo $_SESSION['ciastko'];
            } else {
                echo "Może kiedyś się dowiesz";
            }
            ?>
        </p>
    </div>

    <?php include 'stopka.php'; ?>

</body>

</html>