<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        o{
            color: red;
        }
        form{
           background-color: lightgreen;
           padding: 10px;
        }
        #error{
            border: solid 2px red;
        }
        span{
            color: red;  
              }
    </style>
</head>
<body>
    <?php
    $validform = true;
    $nazwapro = '';
    $check = '';
    $rad = '';
    $em ='';
    $text = '';
    $zg = '';
    if($_SERVER['REQUEST_METHOD'] === 'POST'){

        if(empty(trim($_POST['naz']))){
            $nazwapro = "Podaj poprawną nazwę";
            $validform = false;
        }else{
            $_POST['naz'] = htmlspecialchars($_POST['naz']);
        }

        if(!isset($_POST['wyb'])){
            $check = (isset($_POST['wyb']) && in_array($wyb, $_POST['wyb'])) ? 'Nie zanzaczono' : '';
            $validform = false;
            
        }else{
            $_POST['wyb'] = htmlspecialchars($_POST['wyb']);
        }

        if(!isset($_POST['rad'])){
            $rad = (isset($_POST['rad']) && in_array($rad, $_POST['rad'])) ? 'Nie zaznaczono' : '';
            $validform = false;
        }else{
            $_POST['rad'] = htmlspecialchars($_POST['rad']);
        }

        if(empty(trim($_POST['em']))){
            $em = "Podaj poprawny e-mail";
            $validform = false;
            
        }else{
            $_POST['em'] = htmlspecialchars($_POST['em']);
        }

        if(empty($_POST['te'])){
            $text = "Uzupełnij dodatkowe informacje";
            $validform = false;
        }else{
            $_POST['te'] = htmlspecialchars($_POST['te']);
        }

        if(!isset($_POST['zg'])){
            $zg = "Zaznacz zgodę";
            $validform = false;
        }else{
            $_POST['zg'] = htmlspecialchars($_POST['zg']);
        }

       /* if($validform){
            $filehandle =  fopen("plik.txt","w");
            fwrite($filehandle,$nazwapro."\n",$check."\n",$rad."\n",$em."\n",$text."\n",$zg."\n");
            fclose($filehandle);
                }
            */
            }
    ?>
    <form method="post">
        <p>
            <label for="naz">Nazwa towaru</label> <o>*</o><br>
            <input type="text" name="naz" id="naz" class="<?=$nazwapro ? 'error' : ''?>" value="<?=$_POST['naz'] ?? ''?>"><br>

            <?=$nazwapro ? "<span>".$nazwapro."</span>" : ''?>

        </p>
        <p>
            Wybierz opcje pakowania:  <o>*</o><br>
            <input type="checkbox" name="wyb" id="1" class="<?=$check ? 'error' : ''?>" value="<?=$_POST['wyb'] ?? ''?>" <?=(in_array("wyb",($_POST['wyb'])) ?? []) 'checked' : ''?>>
            <label for="1">koperta</label><br>

            <input type="checkbox" name="wyb" id="2" class="<?=$check ? 'error' : ''?>" value="<?=$_POST['wyb'] ?? ''?>" <?=(in_array("wyb",($_POST['wyb'])) ?? []) 'checked' : ''?>>
            <label for="2">folia</label><br>

            <input type="checkbox" name="wyb" id="3" class="<?=$check ? 'error' : ''?>" value="<?=$_POST['wyb'] ?? ''?>" <?=(in_array("wyb",($_POST['wyb'])) ?? []) 'checked' : ''?>>
            <label for="3">folia bąbelkowa</label><br>

            <input type="checkbox" name="wyb" id="4" class="<?=$check ? 'error' : ''?>" value="<?=$_POST['wyb'] ?? ''?>" <?=(in_array("wyb",($_POST['wyb'])) ?? []) 'checked' : ''?>>
            <label for="4">karton</label><br>

            <input type="checkbox" name="wyb" id="5" class="<?=$check ? 'error' : ''?>" value="<?=$_POST['wyb'] ?? ''?>" <?=(in_array("wyb",($_POST['wyb'])) ?? []) 'checked' : ''?>>
            <label for="5">karton z usztywnieniem</label><br>
            <?=$check ? "<span>".$check."</span>" : ''?>
        </p>
        <p>
            Podaj wagę paczki: <o>*</o><br>
            <input type="radio" name="rad" id="11" class="<?=$rad ? 'error' : ''?>" value="<?=$_POST['rad'] ?? ''?>" <?=(isset($_POST['rad']) && in_array($rad, $_POST['rad'])) ? 'checked' : ''?>>
            <label for="11">do 2 kg</label><br>

            <input type="radio" name="rad" id="12" class="<?=$rad ? 'error' : ''?>" value="<?=$_POST['rad'] ?? ''?>"<?=(isset($_POST['rad']) && in_array($rad, $_POST['rad'])) ? 'checked' : ''?>>
            <label for="12">od 2 kg do 5 kg</label><br>

            <input type="radio" name="rad" id="13" class="<?=$rad ? 'error' : ''?>" value="<?=$_POST['rad'] ?? ''?>" <?=(isset($_POST['rad']) && in_array($rad, $_POST['rad'])) ? 'checked' : ''?>>
            <label for="13">od 5 kg do 10 kg</label><br>

            <input type="radio" name="rad" id="14" class="<?=$rad ? 'error' : ''?>" value="<?=$_POST['rad'] ?? ''?>" <?=(isset($_POST['rad']) && in_array($rad, $_POST['rad'])) ? 'checked' : ''?>>
            <label for="14">od 10 kg do 15 kg</label><br>
            <?=$rad ? "<span>".$rad."</span>" : ''?>
        </p>

        <p>

            <label for="33">Email kontaktowy <o>*</o></label><br>
            <input type="email" name="em" id="33" class="<?=$em ? 'error' : ''?>" value="<?=$_POST['em'] ?? ''?>"><br>
            <?=$em ? "<span>".$em."</span>" : ''?>

        </p>
        <p>
            <label for="44">Dodatkowe informacje <o>*</o></label><br>
            <textarea rows="3" cols="20" name="te" id="44" class="<?=$text ? 'error' : ''?>" value="<?=$_POST['te'] ?? ''?>"></textarea><br>
            <?=$text ? "<span>".$text."</span>" : ''?>
        </p>
        <p>
            <input type="checkbox" name="zg" id="55" class="<?=$zg ? 'error' : ''?>" value="<?=$_POST['zg'] ?? ''?>"><label for="55"> Zgoda na przetwarzanie danych</label> <o>*</o><br>
            <?=$zg ? "<span>".$zg."</span>" : ''?>
        </p>
        <p>
            <input type="submit" value="Wyślij">
        </p>
    </form>

</body>
</html>