<?php
session_start();
if (isset($_SESSION['email'])) {
    echo "email: $_SESSION[email]";
    echo "<a href='./logout.php'>Log out </a>";
} else {
    echo "you are not logged in";
}
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h1>this is dashboard</h1>

</body>

</html>