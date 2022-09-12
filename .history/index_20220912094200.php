<?php
if (isset($_POST['submit'])) {
    $email = filter_input(INPUT_POST, 'email', FILTER_SANITIZE_EMAIL);
    $password = $_POST['password'];
    if (
        $email == 'phamquanghoaz@gmail.com' &&
        $password == 123456
    ) {
        header('Location: dashboard.php');
    }
}


// if (isset($_POST['submit'])) {
//     header('Location: dashboard.php');
// }
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

    <form action="<?php echo $_SERVER['PHP_SELF'] ?>" method="POST">
        <h1>this is login form</h1>
        <div>
            <label for="name">username</label>
            <input type="email" name="email">
        </div>
        <div>
            <label for="name">password</label>
            <input type="password" name="password">
        </div>
        <input type="submit" value="Log in" name="submit">
    </form>


</body>

</html>