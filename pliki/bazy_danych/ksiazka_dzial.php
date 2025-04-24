<!DOCTYPE html>
<html lang="en">
<head> 
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dział</title>
</head>
<body>
    <?php
    $servername = "localhost";
    $username = "pakuła";
    $password = "banan123";
    $database = "pakuła";
    
    $conn = mysqli_connect($servername,$username,$password,$database);

    $sql = "SELECT ksiazki.Tytul, ksiazki.Imie, ksiazki.Nazwisko, ksiazki.Wydawnictwo, ksiazki.Miejsce_wyd, ksiazki.Objetosc_ks, ksiazki.Rok_wyd, ksiazki.Cena, dzialy.Nazwa
    FROM ksiazki JOIN dzialy ON ksiazki.Id_dzial = dzialy.Id_dzial";

    $result = mysqli_query($conn,$sql);

    if(mysqli_num_rows($result) > 0) {
        ?>
        <h1>Wynik</h1>
        <?php
        while($row = mysqli_fetch_assoc($result)){
            ?>
            <p><?=$row['Tytul']?> - <?=$row['Imie']?> <?=$row['Nazwisko']?>, wydawnictwo <?=$row['Wydawnictwo']?> (<?=$row['Miejsce_wyd']?> <?=$row['Rok_wyd']?>), <?=$row['Objetosc_ks']?>str. Cena: <?=$row['Cena']?> zł (dział <?=$row['Nazwa']?>)</p>
            <?php
        }
    }
    ?>
</body>
</html>