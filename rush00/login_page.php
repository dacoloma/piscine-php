<!DOCTYPE html>
<html>

<head>
    <title>RUSH00</title>
    <meta charset="UTF-8">
    <link rel="stylesheet" type="text/css" href="style.css">
</head>

<body>
    <header>
        <?php
        include("includes/header.inc.php");
        ?>
    </header>
    <div class="container login">
        Sign in
        <form action="login.php" method="post">
            Identifiant: <input type="text" name="login" value="" />
            <br />Mot de passe: <input type="password" name="oldpw" value="" />
            <br />
            <input type="submit" name="submit" value="OK">
        </form>
    </div>
</body>

</html>