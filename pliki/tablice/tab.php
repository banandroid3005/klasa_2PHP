<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<style>

table,tr ,td,th{
border: 1px dotted black;
border-collapse: collapse;
}
th,td{
    padding: 3px;
}
</style>
<body>
    <pre>
    <?php
   $tab = array(
        "Skazani na Shawshank" => "dramat ",
        "Nietykalni" => "biograficzny ",
        "Władca Pierścieni  Powrót króla" => "fantasy ",
        "Pulp Fiction" => "gangsterski ",
        "Siedem" => "kryminał ",
        "Podziemny krąg" => "thriller ",
        "Django" => "western ",
        "Król Lew" => "animacja ",
        "Avengers: Wojna Bez Granic" => "akcja ",
        "Dobry, zły i brzydki" => "western "
   );
   print_r($tab);
   $numer = $tab;
   asort($numer);
   $klucz = $tab;
   ksort($klucz);
   $malej = $tab;
   asort($malej);
   $malek = $tab;
   krsort($malek);
   ?>
   </pre>
   <table>
    <caption>Tablica posortowana rosnąco według wartości</caption>
  <tr>
    <th>Klucz</th>
    <th>Wartość</th>
</tr>
    <?php
    asort($tab);
    echo "<tr>";
    foreach($numer as $numer => $wartość){
        echo "<td>{$numer}</td><td>{$wartość}</td></tr>";
    }
?>
</tr>
</table>
<br>
<br>
<br>
<table>
<caption>Tablica posortowana rosnąco według kluczy</caption>
<tr>
    <th>Klucz</th>
    <th>Wartość</th>
</tr>
<?php
ksort($tab);
echo "<tr>";
    foreach($klucz as $klucz => $wartość){
        echo "<td>{$klucz}</td><td>{$wartość}</td></tr>";
    }
?>
</table>
<br>
<br>
<br>
<table>
<caption>Tablica posortowana malejąco według wartości</caption>
<tr>
    <th>Klucz</th>
    <th>Wartość</th>
</tr>
    <?php
arsort($tab);
echo "<tr>";
    foreach($malej as $malej => $wartość){
        echo "<td>{$malej}</td><td>{$wartość}</td></tr>";
    }
?>
</table>
<br>
<br>
<br>
<table>
<caption>Tablica posortowana malejąco według kluczy</caption>
<tr>
    <th>Klucz</th>
    <th>Wartość</th>
</tr>
<?php
krsort($tab);
echo "<tr>";
    foreach($malek as $malek => $wartość){
        echo "<td>{$malek}</td><td>{$wartość}</td></tr>";
    }
?>
</table>
</body>
</html>