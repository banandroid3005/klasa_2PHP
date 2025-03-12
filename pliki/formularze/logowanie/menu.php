<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Comfortaa:wght@300..700&family=Merriweather:ital,wght@0,300;0,400;0,700;0,900;1,300;1,400;1,700;1,900&display=swap" rel="stylesheet">

<style>
    div {
        display: flex;
        justify-content: center;
        align-items: center;
        padding: 30px 50px;
        background-color: #2c3e50;
        box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
        width: 100%;
        margin: 0 auto;
    }

    div a {
    margin: 0 20px;
    padding: 12px 25px;
    font-size: 18px;
    font-weight: 600;
    text-decoration: none;
    color: #fff;
    background-color: #3498db;
    border-radius: 30px;
    transition: background-color 0.3s, transform 0.3s;
}

div a:hover {
    background-color: #2980b9;
    transform: scale(1.05);
    box-shadow: 0 4px 15px rgba(0, 91, 187, 0.4);
}

div a:active {
    transform: scale(0.98);
}


div a:focus {
    background-color: #1abc9c; 
    color: white;
    text-decoration: underline; 
}

</style>

<div>
    <a href="index.php" class="active">Strona główna</a>
    <a href="strona_logowania.php">Logowanie</a>
    <a href="strona_administracyjna.php">Panel administracyjny</a>
</div>