<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form method="post">
        <input type="text" placeholder="Login" name="login">
        <input type="password" placeholder="Hasło" name="password">
        <input type="submit" value="Zaloguj się" name="submit">
    </form>
</body>
<?php
if(isset($_POST['submit']))
{
    if($_POST['login'] == "admin")
    {
        if($_POST['password'] == "test")
        echo "Zalogowano!";
        else 
        echo "Hasło jest niepoprawne!";
    }
    else 
    echo "Login jest niepoprawny!";
}
?>
</html>