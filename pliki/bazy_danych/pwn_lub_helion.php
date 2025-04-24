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
            border: solid 1px black;
            border-collapse: collapse;
            padding: 5px;
        }

        th {
            background-color: wheat;
        }

        td {
            background-color: blanchedalmond;
        }

        table {
            margin-left: auto;
            margin-right: auto;
            text-align: center;
            animation: fadeIn ease-in-out 0.5s;
            max-width: 800px;
            border: none;
        }

        h1 {
            text-align: center;
            animation: fadeIn ease-in-out 0.5s;
        }

        @keyframes fadeIn {
            from {
                opacity: 0;
            }

            to {
                opacity: 1;
            }
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


    $sql = "SELECT ksiazki.Sygnatura, ksiazki.Tytul, CONCAT(ksiazki.Imie,' ',ksiazki.Nazwisko) AS Autor, ksiazki.Wydawnictwo, ksiazki.Rok_wyd, LEFT(ksiazki.Cena,2) AS Zlote, RIGHT(ksiazki.Cena,2) AS Grosze FROM ksiazki WHERE (ksiazki.Wydawnictwo = 'PWN' or ksiazki.Wydawnictwo = 'Helion') and (ksiazki.Rok_wyd > 1990 and ksiazki.Rok_wyd < 2011) ORDER BY ksiazki.Rok_wyd ASC";

    $result = mysqli_query($conn, $sql);

    if (mysqli_num_rows($result) > 0) {
    ?>
        <h1>Wynik</h1>
        <table>
            <tr>
                <th>Sygnatura</th>
                <th>Tytuł</th>
                <th>Autor</th>
                <th>Wydawnictwo</th>
                <th>Rok wydania</th>
                <th>Cena</th>
            </tr>
            <?php
            while ($row = mysqli_fetch_assoc($result)) {
            ?>
                <tr>
                    <td><?= $row['Sygnatura'] ?></td>
                    <td><?= $row['Tytul'] ?></td>
                    <td><?= $row['Autor'] ?></td>
                    <td><?= $row['Wydawnictwo'] ?></td>
                    <td><?= $row['Rok_wyd'] ?></td>
                    <td><?= $row['Zlote'] ?> zł <?= $row['Grosze'] ?> gr</td>
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