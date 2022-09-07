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
    $congi = 'mèo';
    $caygi = 'cau';

    $str = <<<'CONMEO'
     Con $congi mà trèo cây $caygi,
     Hỏi thăm chú chuột đi đâu vắng nhà. 
     Chú chuột đi chợ đường xa.
     Mua mắm mua muối giỗ cha chú $congi.
     CONMEO;

    echo $str;



    ?>
</body>

</html>