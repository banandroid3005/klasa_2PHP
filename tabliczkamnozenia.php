<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<style>
    table{
        border: 1px solid black;
        font-family: Verdana;
        font-size: large;
        border-collapse: collapse;
    }
    th{
        border: 1px dashed black;
        padding: 5px;
        background-color: burlywood;
    }
    td{
        border: 1px dashed black;
        padding: 5px;
        background-color: beige;
        text-align: center;
    }
    
    </style>
<body>

    <table>
    <caption>Tabliczka Mnożenia</caption>
        <tr>
        <?php
        for($i=0;$i<11;$i++){
            echo "<th>";
            if($i==0){
                echo "x";
            }else{
            echo $i."</th>";
            }
        }

        for($i=1;$i<11;$i++){
echo "<tr>";
            for($j=0;$j<11;$j++){
                if($j==0){
                    echo "<th>".$i."</th>";
                }else{
                    if($i==$j){
                        echo "<td style='background-color: bisque;' >";
                        echo $i*$j."</td>";
                    }else{
                    echo "<td>".$i*$j."</td>";
                    }
                
            }
        }
        echo "</tr>";
    }
        ?>
</table>
</body>
</html>