<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Napisana przez</title>
</head>
<body>
    <?php
$servername = "localhost";
$username = "pakula";
$password = "banan123";
$database = "pakula";

$conn = mysqli_connect($servername,$username,$password,$database);
/* 
if ($conn->connect_error) {
  die("Nie połączono: " . $conn->connect_error);
}

echo "Udane połączenie";
*/

$sql = "SELECT ksiazki.tytul, ksiazki.imie, ksiazki.nazwisko FROM ksiazki;";

$result = mysqli_query($conn,$sql);

if(mysqli_num_rows($result) > 0){
    ?>
    <h1>Wynik</h1>
    <?php
    while($row = mysqli_fetch_assoc($result)){
        ?>
    <p>Książka <i>"<?=$row['tytul']?>"</i> została napisana przez <strong><?=$row['imie']?> <?=$row['nazwisko']?></strong></p>
    <?php
    }
}

$conn->close();
?>
</body>
</html>