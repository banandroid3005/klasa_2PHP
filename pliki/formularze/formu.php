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
            color: red;
            border: solid 2px red;
        }

    </style>
</head>
<body>
    <?php
    $validform = true;
    $error = [];
    $data = [];
    $data = [
        'naz' => '',
        'wyb' => [],
        'rad' => '',
        'em' => '',
        'te' => '',
        'zg' => ''
    ];
    if($_SERVER['REQUEST_METHOD'] === 'POST'){


        $data['naz'] = trim($_POST['naz']);
        $data['wyb'] = isset($_POST['wyb']) ? $_POST['wyb'] : [];
        $data['rad'] = $_POST['rad'] ?? '';
        $data['em'] = trim($_POST['em']);
        $data['text'] = trim($_POST['te']);
        $data['zg'] = isset($_POST['zg']) ? 'Tak' : 'Nie';

        if(empty($data['naz'])){
            $error['naz'] = "Podaj nazwę produktu";
            $validform = false;
        }

        if(empty($data['wyb'])){
            $error['wyb'] = "Zaznacz przynajmniej jedną opcje";
            $validform = false;
        }

        if(empty($data['rad'])){
            $error['rad'] = "Zaznacz jedną opcje";
            $validform = false;
        }

        if (!filter_var($data['em'], FILTER_VALIDATE_EMAIL)) {
            $error['em'] = 'Podaj poprawny adres email';
            $validform = false;
        }

        if (strlen($data['te']) < 15) {
            $error['te'] = 'Dodatkowe informacje muszą mieć co najmniej 15 znaków';
            $validform = false;
        }

        if ($data['zg'] === 'Nie') {
            $error['zg'] = 'Musisz wyrazić zgodę na przetwarzanie danych';
            $validform = false;
        }

        /*if(empty(trim($_POST['naz']))){
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
*/
       /* if($validform){
            $filehandle =  fopen("plik.txt","w");
            fwrite($filehandle,$nazwapro."\n",$check."\n",$rad."\n",$em."\n",$text."\n",$zg."\n");
            fclose($filehandle);
                }
            */
            }
    ?>
    <form method="post">
        <p class="<?=$error['naz'] ? 'error' : ''?>">
            <label for="naz">Nazwa towaru</label> <o>*</o><br>
            <input type="text" name="naz" id="naz" class="<?=$nazwapro ? 'error' : ''?>" value="<?=$_POST['naz'] ?? ''?>"><br>

            <div class="error"> <?= $error['naz'] ?? '' ?> </div>

        </p>
        <p class="<?=$error['wyb'] ? 'error' : ''?>">
            Wybierz opcje pakowania:  <o>*</o><br>
            <input type="checkbox" name="wyb[]" id="1" <?= in_array('koperta', $data['wyb']) ? 'checked' : '' ?>> 
            <label for="1">koperta</label><br>

            <input type="checkbox" name="wyb[]" id="2"  value="folia" <?= in_array('folia', $data['wyb']) ? 'checked' : '' ?>>
            <label for="2">folia</label><br>

            <input type="checkbox" name="wyb[]" id="3"  value="folia bąbelkowa" <?= in_array('folia bąbelkowa', $data['wyb']) ? 'checked' : '' ?>>
            <label for="3">folia bąbelkowa</label><br>

            <input type="checkbox" name="wyb[]" id="4"  value="karton" <?= in_array('karton', $data['wyb']) ? 'checked' : '' ?>>
            <label for="4">karton</label><br>

            <input type="checkbox" name="wyb[]" id="5"  value="karton z usztywnieniem" <?= in_array('karton z usztywnnieniem', $data['wyb']) ? 'checked' : '' ?>>
            <label for="5">karton z usztywnieniem</label><br>
            <div class="error"> <?= $error['wyb'] ?? '' ?> </div>
        </p>
        <p class="<?$error['rad'] ? 'error' : ''?>">
            Podaj wagę paczki: <o>*</o><br>
            <input type="radio" name="rad" id="11"  value="do 2 kg" <?= $data['rad'] === 'do 2 kg' ? 'checked' : '' ?>>
            <label for="11">do 2 kg</label><br>

            <input type="radio" name="rad" id="12" value="od 2 kg do 5 kg" <?= $data['rad'] === 'do 2 kg' ? 'checked' : '' ?>>
            <label for="12">od 2 kg do 5 kg</label><br>

            <input type="radio" name="rad" id="13" value="od 5 kg do 10 kg" <?= $data['rad'] === 'do 2 kg' ? 'checked' : '' ?>>
            <label for="13">od 5 kg do 10 kg</label><br>

            <input type="radio" name="rad" id="14"  value="od 10 kg do 15 kg" <?= $data['rad'] === 'do 2 kg' ? 'checked' : '' ?>>
            <label for="14">od 10 kg do 15 kg</label><br>
            <div class="error"> <?= $error['rad'] ?? '' ?> </div>
        </p>

        <p class="<?=$error['em'] ? 'error' : ''?>">

            <label for="33">Email kontaktowy <o>*</o></label><br>
            <input type="email" name="em" id="33" class="<?=$em ? 'error' : ''?>" value="<?=$_POST['em'] ?? ''?>"><br>
            <div class="error"> <?= $error['em'] ?? '' ?> </div>

        </p>
        <p class="<?=$error['te'] ? 'error' : ''?>">
            <label for="44">Dodatkowe informacje <o>*</o></label><br>
            <textarea rows="3" cols="20" name="te" id="44" class="<?=$text ? 'error' : ''?>" value="<?=$_POST['te'] ?? ''?>"></textarea><br>
            <div class="error"> <?= $error['te'] ?? '' ?> </div>
        </p>
        <p class="<?=$error['zg'] ? 'error' : ''?>">
            <input type="checkbox" name="zg" id="55" class="<?=$zg ? 'error' : ''?>" value="<?=$_POST['zg'] ?? ''?>"><label for="55"> Zgoda na przetwarzanie danych</label> <o>*</o><br>
            <div class="error"> <?= $error['zg'] ?? '' ?> </div>
        </p>
        <p>
            <input type="submit" value="Wyślij">
        </p>
    </form>

</body>
</html>