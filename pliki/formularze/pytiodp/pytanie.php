<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Noto+Sans+Gunjala+Gondi:wght@400..700&display=swap" rel="stylesheet">
    <title>Pytanie</title>
</head>

<body class="light-mode">
    <div class="theme-switch">
        <label for="theme-toggle">Ciemny motyw</label>
        <input type="checkbox" id="theme-toggle">
    </div>
    <?php
    $url = 'https://opentdb.com/api.php?amount=1&type=multiple';
    //$json = file_get_contents($url);
    $json='{"response_code":0,"results":[{"type":"multiple","difficulty":"hard","category":"Entertainment: Japanese Anime &amp; Manga","question":"In the anime Initial D, how does Takumi Fujiwara describe a drift?","correct_answer":". . . the front tires slide so the car won; t face the inside","incorrect_answers":[". . . the wheels lose traction, making the car slide sideways",". . . the car oversteers through a curve, causing it to turn faster",". . . you turn a lot"]}]}';
    if ($json) {
        $data = json_decode($json, true);
        if ($data['response_code'] == 0) {
            $difficulty = $data['results'][0]['difficulty'];
            $category = $data['results'][0]['category'];
            $question = $data['results'][0]['question'];
            $correctAnswer = $data['results'][0]['correct_answer'];
            $answers = $data['results'][0]['incorrect_answers'];
            $answers[] = $correctAnswer;
            shuffle($answers);
            $_SESSION['difficulty'] = $difficulty;
            $_SESSION['category'] = $category;
            $_SESSION['question'] = $question;
            $_SESSION['correct_answer'] = $correctAnswer;
        }
    }
    ?>
    <div class="container1">
        <div class="text">
            <form action="odpowiedz.php" method="post">
                <h1>Quiz z OpenTDB</h1>
                <p>Trudność: <?= $difficulty ?></p>
                <p>Kategoria: <?= $category ?></p>
                <p>Pytanie: <?= $question ?></p>
                <p>
                    <?php foreach ($answers as $answer) { ?>
                        <input type="radio" name="user_answer" id="user_answer_<?= htmlspecialchars($answer) ?>" value="<?= htmlspecialchars($answer) ?>" required>
                        <label for="user_answer_<?= htmlspecialchars($answer) ?>"><?= htmlspecialchars($answer) ?></label><br>
                    <?php } ?>
                </p>
                <button type="submit">Sprawdź odpowiedź</button>
            </form>
        </div>
        <img src="jaj.jfif" alt="Coś się zepsuło">
    </div>
    <?php include 'footer.php'; ?>
    <script>
        const themeToggle = document.getElementById('theme-toggle');
        const body = document.body;

        if (localStorage.getItem('theme') === 'dark') {
            body.classList.remove('light-mode');
            body.classList.add('dark-mode');
            themeToggle.checked = true;
        }

        themeToggle.addEventListener('change', () => {
            if (themeToggle.checked) {
                body.classList.remove('light-mode');
                body.classList.add('dark-mode');
                localStorage.setItem('theme', 'dark');
            } else {
                body.classList.remove('dark-mode');
                body.classList.add('light-mode');
                localStorage.setItem('theme', 'light');
            }
        });
    </script>
</body>

</html>