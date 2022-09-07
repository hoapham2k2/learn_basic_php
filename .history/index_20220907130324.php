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
    //định nghĩa hằng số với hàm define
    // define(string $NAME, mixed $VALUE) : bool;
    define("FIRSTWEEKDAY", 'MONDAY');


    echo "in hang so: ", FIRSTWEEKDAY, PHP_EOL;         //Lấy hằng số bằng cách chỉ ra tên

    $firstweek = 'FIRSTWEEKDAY';    //firstweek là biến, firstweekday là hằng số
    echo "in bien firstweek: ", constant($firstweek), PHP_EOL; // Lấy hằng số có tên lưu trong biến $firstweek


    //PHP 7.0 da cho phep khai bao hang so nhu sau
    const SECONDWEEKDAY = 'TUESDAY';
    echo "in hang so: ", SECONDWEEKDAY, PHP_EOL;         //Lấy hằng số bằng cách chỉ ra tên
    ?>
</body>

</html>