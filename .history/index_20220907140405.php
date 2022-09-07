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


    ?>
</body>

</html>