<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<style>
    fieldset{
        margin-top: 20px;
    }
    fieldset,legend,th,td{
        border: 2px dashed green;
        padding: 8px;
    }
</style>
<body>
    <?php
        $j = array("Armenia"=>"2,5%","Liban"=>"16,1%","Mongolia"=>"9,6%");
        $j = json_encode($j);
        $j2 = json_decode($j,true);
    ?>
    <fieldset>
        <legend>Tekst w formacie JSON</legend>
        <code><?=$j?></code>
    </fieldset>
    <fieldset>
        <legend>Tablica PHP</legend>
    <pre>
            <?php print_r($j2);?>
        </pre>
    </fieldset>
    <fieldset>
        <legend>Tabela HTML</legend>
    <table>
        <tr>
            <th>Kraj</th>
            <tr>
            <?php
            foreach($j2 as $element){
                if($element == "Armenia" || $element == "Liban" || $element = "Mongolia"){
                echo "<tr><td>";
                echo $element;
                echo "</td></tr>";
                }
            }
        ?>
        </tr>
        <tr>
            <th>Inflacja</th>
        <?php
            foreach($j2 as $element){
                if($element == "2,5%" || $element == "16,1%" || $element == "9,6%"){
                echo "<td>";
                echo $element;
                echo "</td></tr>";
                }
            }
        ?>
        </tr>
    </table>
    </fieldset>
</body>
</html>