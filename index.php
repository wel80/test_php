<?php
    $cites = [
        1 => 'Меня трудно найти, легко потерять и невозможно забыть',
        3 => 'Подошёл, взял за руку, уверенно сказал "моя" и увёл',
        50 => 'Я ангел. Но когда мне обрезают крылья приходится летать на метле',
        6 => 'Когда меня спрашивают, что важнее, еда или любовь, я молчу, потому что ем.'
    ];

    $rand_key = array_rand($cites);
    $random_cite = $cites[$rand_key];

    $price = 15445.2565;

    function price_format($cost) {
        $cost_ceil = ceil($cost);
        if ($cost_ceil >= 1000) {
            $cost_format = number_format($cost_ceil, 0, ',', ' ');
        } else {
            $cost_format = $cost_ceil;
        }
        print ($cost_format . ' <b class="rub">р</b>');
    }
?>

<!DOCTYPE HTML>
<html lang="ru">
    <head>
        <meta charset="utf-8">
        <title>TEST</title>
        <link rel="stylesheet" href="style.css">
    </head>
    <body>
        <div class="cite">
            <h1>Случайная цитата:</h1>
            <h3>"<?php print ($random_cite); ?>"</h3>
        </div>
        <div class="container">
            <div class="price">
                <h1>Цена</h1>
                <span class="lot__cost"><?php price_format($price); ?></span>
            </div>
        </div>
        <div class="cite">
            <h1>Все цитаты:</h1>
            <?php
                print ('<h3>"' . reset($cites) . '"</h3>');
                while (next($cites)) {
                    print ('<h3>"' . current($cites) . '"</h3>');
                }
            ?>
        </div>
    </body>
</html>