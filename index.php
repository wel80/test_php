<?php
    $cites = [
        'Меня трудно найти, легко потерять и невозможно забыть',
        'Подошёл, взял за руку, уверенно сказал "моя" и увёл',
        'Я ангел. Но когда мне обрезают крылья приходится летать на метле',
        'Когда меня спрашивают, что важнее, еда или любовь, я молчу, потому что ем.'
    ];

    $rand_key = array_rand($cites);
    $random_cite = $cites[$rand_key];
?>

<!DOCTYPE HTML>
<html lang="ru">
    <head>
        <meta charset="utf-8">
        <title>TEST</title>
        <link rel="stylesheet" href="style.css">
    </head>
    <body>
        <h1>Случайная цитата</h1>
        <h3>
            "<?php
                print ($random_cite);
            ?>"
        </h3>
    </body>
</html>