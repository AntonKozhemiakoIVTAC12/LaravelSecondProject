<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login and Registration</title>
    <!-- Подключение внешнего файла стилей -->
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
</head>
<body>
<div class="container">
    <h2>Login</h2>
    <form action="#" method="post">
        <label for="loginUsername">Username:</label>
        <input type="text" id="loginUsername" name="loginUsername" required>

        <label for="loginPassword">Password:</label>
        <input type="password" id="loginPassword" name="loginPassword" required>

        <button type="submit">Login</button>
    </form>

    <hr>

    <h2>Registration</h2>
    <form action="#" method="post">
        <label for="registerUsername">Username:</label>
        <input type="text" id="registerUsername" name="registerUsername" required>

        <label for="registerPassword">Password:</label>
        <input type="password" id="registerPassword" name="registerPassword" required>

        <label for="confirmPassword">Confirm Password:</label>
        <input type="password" id="confirmPassword" name="confirmPassword" required>

        <button type="submit">Register</button>
    </form>
</div>
</body>
</html>
