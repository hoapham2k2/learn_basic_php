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
    $names = ["An", "Minh", "Nguyên"];
    foreach ($names as $k => $name) {
        echo "chỉ số $k; giá trị $name", PHP_EOL;
    }
    /*
          chỉ số 0; giá trị An
          chỉ số 1; giá trị Minh
          chỉ số 2; giá trị Nguyên
      */
    foreach ($names as $name) {
        echo "$name ";
    }
    ?>
</body>

</html>