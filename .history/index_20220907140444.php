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

    ?>
</body>

</html>