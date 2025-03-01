<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>JSON trudniejszy</title>
</head>
<body>
    <h4>Sprawdź przybliżoną lokalizację adresu IP v 4</h4>
    <p>
    <form method="post">
        <label for="adres">https://ip-api.com/json</label>
        <select name="adres" id="adres" onchange="this.form.submit()" required>
            <option>Wybierz adres IP</option>
            <?php
                for($i=1;$i<=10;$i++){
                    $ip = "$i.$i.$i.$i";
                    $selected = (isset($_POST['adres']) && $_POST['adres'] == $ip) ? 'selected' : '';
                    echo "<option value='$ip' $selected>$ip</option>";
                }
            ?>
            <option value="111.111.111.111" <?php echo (isset($_POST['adres']) && $_POST['adres'] == "111.111.111.111") ? 'selected' : ''; ?>>111.111.111.111</option>
            <option value="222.222.222.222" <?php echo (isset($_POST['adres']) && $_POST['adres'] == "222.222.222.222") ? 'selected' : ''; ?>>222.222.222.222</option>
        </select>
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