<?php
echo '$_POST<br>';
var_dump($_POST);
echo '$_GET<br>';
var_dump($_GET);

?>

<form action="first.php" method="post">
    <p>Name: <br> <input type="text" name="name" /></p>
    <p>Age: <br> <input type="text" name="age" /></p>
    <p><input type="submit" name="submit" value="Gửi đi" /></p>
</form>