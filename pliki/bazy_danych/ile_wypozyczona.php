<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        table,
        tr,
        td,
        th {
            border: solid 2px black;
            border-collapse: collapse;
            padding: 5px;
        }
    </style>
</head>

<body>
    <?php
    $servername = "localhost";
    $username = "pakuła";
    $password = "banan123";
    $database = "pakuła";

    $conn = mysqli_connect($servername, $username, $password, $database);


    $sql = "SELECT wypozyczenia.Nr_transakcji, wypozyczenia.Data_wypozyczenia, wypozyczenia.Data_zwrotu, DATEDIFF(IFNULL(wypozyczenia.Data_zwrotu,NOW()), wypozyczenia.Data_wypozyczenia) AS Roznica_dni FROM wypozyczenia ORDER BY Roznica_dni ASC";

    $result = mysqli_query($conn, $sql);

    if (mysqli_num_rows($result) > 0) {
    ?>
        <h1>Wynik</h1>
        <table>
            <tr>
                <th>Numer transakcji</th>
                <th>Data Wypożyczenia</th>
                <th>Data Zwrotu</th>
                <th>Liczba dni</th>
            </tr>
            <?php
            while ($row = mysqli_fetch_assoc($result)) {
            ?>
                <tr>
                    <td><?= $row['Nr_transakcji'] ?></td>
                    <td><?= $row['Data_wypozyczenia'] ?></td>
                    <td><?= $row['Data_zwrotu'] ?></td>
                    <td><?= $row['Roznica_dni'] ?></td>
                </tr>
        <?php
            }
        } else {
            echo "Błędne zapytanie";
        }
        ?>
        </table>
</body>

</html>