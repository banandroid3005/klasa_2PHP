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
    <form method="post">
        <label for="adres">http/ip-api.com/json</label>
        <input id="adres" type="text" name="adres" required>
        <input type="submit" name="wyslij" value="Sprawdź IP">
    </form>
    <?php
    $url = "http/ip-api.com/json";
        if($_SERVER["REQUEST_METHOD"] == "POST"){
            $json = file_get_contents($url,$_POST['adres']);
            echo json_encode($json);
            echo "\n";
            print_r($json);
        }
    ?>
</body>
</html>