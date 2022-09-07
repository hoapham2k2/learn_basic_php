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
    echo mb_substr($str, 7) . "<br>";
    //OUT: lap bap!
    $str = 'Lập bà lập bập!';
    echo mb_substr($str, 7) . "<br>";
    //OUT: lập bập!


    //     trim	Loại bỏ khoảng trắng của chuỗi.
    // is_string($var)	Kiểm tra xem $var có phải là chuỗi.
    // empty($var)	Nếu chuỗi rỗng trả về true. Chuỗi rỗng như "", null, '0'



    // Ví dụ, mẩu tin dài, chỉ giữ lại 20 từ đầu tiên và dấu ...
    function truncateString($str, $maxChars = 20, $holder = "...")
    {
        if (strlen($str) > $maxChars) {
            return trim(substr($str, 0, $maxChars)) . $holder;
        } else {
            return $str;
        }
    }
    $testString = "Hello World! I'm a PHP developer.";
    echo  mb_strlen(truncateString($testString, 40));
    ?>
</body>

</html>