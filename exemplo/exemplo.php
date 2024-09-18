<?php
session_start();
if (isset($_SESSION['user_id'])) {
    header('Location: dashboard.php');
    exit;
}
?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <title>Login</title>
</head>
<body>
    <h2>Login</h2>
    <form action="login.php" method="POST">
        <label for="username">Usuário:</label>
        <input type="text" id="username" name="username" required>
        <br>
        <label for="password">Senha:</label>
        <input type="password" id="password" name="password" required>
        <br>
        <button type="submit">Entrar</button>
    </form>
    <p>Ainda não tem uma conta? <a href="register.php">Cadastre-se</a></p>
</body>
</html>
