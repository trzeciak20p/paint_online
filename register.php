<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Rejestracja</title>
    <link rel="stylesheet" href="style.css">
    <link rel="icon" href="img/icon.png" sizes="32X32">
</head>

<body>

    <nav>
        <ul>
            <a href="index.php"><li>Strona Główna</li></a>
            <a href="forum.php"><li>Prace</li></a>
            <a href="projects.php"><li>Twoje Projekty</li></a>
        </ul>
        <?php 
        require('nav_login_icon.php'); 
        ?>
    </nav>

    <main class="pls_center">

        <form class="f_border" method="POST" action="register_validator.php">

            <label>
                <h2>Login</h2>
                <input type="text" name="login" required="required">
            </label>
            <label>
                <h2>Hasło</h2>
                <input type="password" name="password" required="required">
            </label>
            <label>
                <h2>Podaj hasło ponownie</h2>
                <input type="password" name="password2" required="required">
            </label>
            <span class="info">(nazwa użytkownika i hasło nie będą zawierać spacji)</span>

            <label class="captcha">
                <input type="checkbox" name="captcha" required="required"> Nie jestem robotem
            <label>

            <input type="submit" name="submit" value="Zarejestruj">

            <a href="login.php">Masz już konto? Zaloguj się.</a>

        <form>

    <main>

</body>
</html>
