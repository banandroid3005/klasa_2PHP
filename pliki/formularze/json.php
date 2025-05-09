<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>JSON</title>
</head>
<body>
    <h4>Sprawdź przybliżoną lokalizację adresu IP v 4</h4>
    <p>
    <form method="post">
        <label for="adres">https://ip-api.com/json</label>
        <input id="adres" type="text" name="adres" required>
        <input type="submit" name="wyslij" value="Sprawdź IP">
    </form>
        </p>
    <p>
    <?php
        if($_SERVER["REQUEST_METHOD"] === "POST"){
            $ip = trim($_POST['adres']);
            $url = "http://ip-api.com/json/" . $ip;
            $json = file_get_contents($url);
            echo "JSON: ".$json;
            echo "\n";
            $json = json_decode($json,true);
            echo "<pre>";
            print_r($json);
            echo "</pre>";
        }
    ?>
    </p>
</body>
</html>