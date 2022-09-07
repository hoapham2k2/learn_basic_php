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
    $so_nguyen = 10;
    $so_thuc = 10.5;
    $chuoi = "Hello World";
    $mang = array(1, 2, 3, 4, 5);
    $mang2 = array("a" => $mang, "b" => 2, "c" => 3);
    $boolean_true = true;
    $boolean_false = false;
    $varible_null = null;
    echo "so nguyen", $so_nguyen;
    echo "<br>";
    echo $so_thuc;
    echo "<br>";
    echo $chuoi;
    echo "<br>";
    echo $mang[0];
    echo "<br>";
    echo $mang2["a"];
    echo "<br>";
    echo $boolean_true;
    echo "<br>";
    echo $boolean_false;
    echo "<br>";
    echo $varible_null;
    echo "<br>";
    ?>
</body>

</html>