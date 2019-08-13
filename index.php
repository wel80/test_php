<?php
    $cites = [
        1 => 'Меня трудно найти, легко потерять и невозможно забыть',
        3 => 'Подошёл, взял за руку, уверенно сказал "моя" и увёл',
        50 => 'Я ангел. Но когда мне обрезают крылья приходится летать на метле',
        6 => 'Когда меня спрашивают, что важнее, еда или любовь, я молчу, потому что ем.',
        34 => 'дгшифытжуфитх щдлтфыдажт  ыфатщ'
    ];

    $rand_key = array_rand($cites);
    $random_cite = $cites[$rand_key];

    define('CURRENCY_LIST', array(
        'rub' => '&#x584;',
        'usd' => '&#36;',
        'eur' => '&euro;'
    ));

    $price_list = [
        1487.254,
        45784.2458,
        125.245,
        2564.598845
    ];

    $iso_rand = 'EUR';
    $price_key_rand = array_rand($price_list);
    $price = $price_list[$price_key_rand] ;

    function price_format($cost, $iso = 'rub') {
        $cost_ceil = ceil($cost);
        $iso_lowercase = strtolower($iso);

        if ($cost_ceil >= 1000) {
            $cost_format = number_format($cost_ceil, 0, ',', ' ');
        } else {
            $cost_format = $cost_ceil;
        }
        print ($cost_format . ' <b class="' . $iso_lowercase . '">' . CURRENCY_LIST[$iso_lowercase] . '</b>');
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
                <span class="lot__cost"><?php price_format($price, $iso_rand); ?></span>
            </div>
        </div>
        <div class="cite">
            <h1>Все цитаты:</h1>
            <?php
                $cites_filter = array_filter($cites, function($item) {
                    if (strpos($item, 'я') === false) {
                        return false;
                    } else {
                        return true;
                    };
                });

                array_map(function($item) {
                    print ('<h3>"' . $item . '"</h3>');
                }, $cites_filter);
            ?>
        </div>
    </body>
</html>