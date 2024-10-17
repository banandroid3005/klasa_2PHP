<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<style>
o{
    color: magenta;
}
    </style>
<body>
    <h3>
<?php

$tab=(mb_str_split("Płyta głowna ATX"));
foreach($tab as $lit){
    
    if($lit=="a" || $lit=="A"){
        echo "<o>";
        echo $lit;
        echo "</o>";
    }else{
        echo $lit;
    }
}
?>
</h3>
</body>
</html>