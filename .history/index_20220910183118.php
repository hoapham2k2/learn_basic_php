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

    $array01 = [
        [
            'name' => 'John',
            'age' => 19
        ],
        [
            'name' => 'Jane',
            'age' => 20,
            'address' => 'New York'
        ],
        [
            'name' => 'Jack',
            'age' => 21
        ]
    ];
    print_r(json_encode($array01));
    ?>
</body>

</html>