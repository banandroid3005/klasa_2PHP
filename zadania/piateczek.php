<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<style>
table,tr,td{
    border-collapse: collapse;
    border: 1px solid rosybrown;
    padding: 10px;
    }


    </style>
<body>
    <table>
<?php
$tab=array("poniedziałek","wtorek","środa","czwartek","piątek","sobota","niedziela");
foreach($tab as $d){
    if($d=="piątek"){
        echo "<tr><td style='background-color: sandybrown'>{$d}</td></tr>";
    }else{
    echo "<tr><td>{$d}</td></tr>";
    }
}
?>
</table>
</body>
</html>