<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h1>Test</h1>
    <?php
    // echo "Hello World";

    $array01 = [1, 2, 3, 4, 5];
    $array02 = [$array01, "b", "c", "d", "e"];
    $array03 = array_combine($array02, $array01);
    $array03 = array_flip($array03);

    const TEST = "test";
    echo TEST;
    print_r($array03[1]);

    ?>
</body>

</html>