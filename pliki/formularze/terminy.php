<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Terminy</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Comfortaa:wght@300..700&display=swap" rel="stylesheet">
    <style>
        body{
            background-color: #fff7d1;
            padding: 100px;
            font-family: "Comfortaa", serif;
            font-optical-sizing: auto;
            font-weight: 400;
            font-style: normal;
        }
        table{
            background-color: #ffecc8;
            border-collapse: collapse;
        }
        td{
            border: 1px solid gray;
            padding: 10px;
            text-align: center;
        }
        input{
            background-color: #ffd09b;
            border: solid #ffb0b0;
        }
        input[type=checkbox]{
            accent-color: #ffd09b;
            outline: #ffb0b0;
            outline-offset: -1px;
            transform: scale(2);
        }

    </style>
</head>
<body>
    <form method="post">
        <table>
            <caption>Terminy</caption>
            <?php
                $plik = false;
                for($i=1;$i<=5;$i++){
                    $termin = "termin_".$i;
                    $month = "Rok_".$i;
                    $checked = (in_array($termin,$_POST['termin'] ?? []) && isset($_POST[$month]) ? 'checked' : '');
                    $plik = ($plik || $checked);
            ?>
            <tr>
                <td>
                    <label for="<?=$termin?>"> Termin <?=$i?></label>
                </td>
                <td>
                    <input type="checkbox" name="termin[]" id="<?=$termin?>" value = "<?=$termin?>" <?=$checked?>>
                </td>
                <td>
                    <input type="month" name="<?=$month?>" id = "termin_miesiaca_"<?=$i?> value="<?=in_array($termin,($_POST['termin'] ?? [])) && $_POST[$month] ? $_POST[$month] : ''?>">
                </td>
            </tr>
            <?php
                }
            ?>
                    
            <tr>
                <td colspan="3">
                    <input type="submit" value="Zapisz">
                </td>
            </tr>
        </table>
        <pre>
            <?php 
            if($_SERVER['REQUEST_METHOD'] === 'POST'){
                $j = json_encode($_POST);
                echo $j."<br>";
            ?>
        </pre>
        <pre>
            <?php
               
                    if($plik){
                        echo "Dane zostały przesłane do pliku <br>";
                        $file = 'plik.txt';
                        $filehandle = fopen($file,"w");
                        $wpisz = date("Y-m-d H: i s") . "\n".$j."\n";
                        $file = fwrite($filehandle,$wpisz);
                        $file = fclose($filehandle);
                    }
                }
            ?>
        </pre>
    </form>
</body>
</html>