<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h1>Index</h1>

    <?php
    $str = 'Chào';
    echo strlen($str) . "<br>";
    //OUT: 5

    echo mb_strlen($str) . "<br>";
    //OUT: 4

    $str = 'Hello World PHP!';
    echo str_word_count($str) . "<br>";
    //OUT: 3

    $words = array(
        'desserts', 'live', 'knits',
        'sports', 'pupils', 'raw',
        'smart', 'snug', 'lived',
        'god', 'time', 'deliver', 'star'
    );

    foreach ($words as $word)
        echo $word . ' - ' . strrev($word) . "<br>";
    //OUT:

    // desserts - stressed
    // live - evil
    // knits - stink
    // sports - strops
    // pupils - slipup
    // raw - war
    // smart - trams
    // snug - guns
    // lived - devil
    // god - dog
    // time - emit
    // deliver - reviled
    // star - rats

    $str = 'Hello World!';
    echo strtolower($str) . "<br>";
    //OUT: hello world!

    $str = 'Hello World!';
    echo strtoupper($str) . "<br>";
    //OUT: HELLO WORLD!

    $str = 'Learn PHP!';
    echo strtr($str, 'LP', 'lp') . " <br>";
    //OUT: learn pHp!


    $str = 'Lập bà lập bập!';
    $ar = array('ậ' => 'a', 'à' => 'a');
    echo strtr($str, $ar) . "<br>";
    //OUT: Lap ba lap bap!

    $str = 'Lap ba lap bap!';
    echo mb_substr($str, 7);
    //OUT: lap bap!
    $str = 'Lập bà lập bập!';
    echo mb_substr($str, 7);
    //OUT: lập bập!
    ?>
</body>

</html>