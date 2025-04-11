<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Połączenie z bazą</title>
</head>
<body>
<?php
$servername = "localhost";
$username = "pakuła";
$password = "banan123";
$database = "pakuła";

$conn = new mysqli($servername, $username, $password, $database);

if ($conn->connect_error) {
  die("Nie połączono: " . $conn->connect_error);
}

echo "Udane połączenie";

$conn->close();

?>

</body>
</html>