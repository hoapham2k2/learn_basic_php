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
    $a = 29;
    $b = 43;

    $c = $a + $b;
    echo "Kết quả phép cộng: $c <br/>";
    $c = $a - $b;
    echo "Kết quả phép trừ: $c <br/>";
    $c = $a * $b;
    echo "Kết quả phép nhân: $c <br/>";
    $c = $a / $b;
    echo "Kết quả phép chia: $c <br/>";
    $c = $a % $b;
    echo "Phần dư phép chia: $c <br/>";

    $c = $a++;
    echo "Thêm một vào $c: $a <br/>";

    $c = $a--;
    echo "Giảm $a đi 1: $c <br/>";
    ?>
</body>

</html>