<?php
$email = $_GET['email'] ?? '';
$password = $_GET['password'] ?? '';
echo "Email: $email";
echo "Password: $password";
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

    <form action="<?php echo $_SERVER['PHP_SELF'] ?>" method="GET">
        <h1>this is login form</h1>
        <div>
            <label for="name">username</label>
            <input type="email" name="email">
        </div>
        <div>
            <label for="name">password</label>
            <input type="password" name="password">
        </div>
        <input type="submit" value="Log in">
    </form>


</body>

</html>