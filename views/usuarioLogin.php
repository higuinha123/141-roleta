<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <title>Login</title>
    <link rel="stylesheet" href="../css/login.css">
</head>
<body>
    <header class="header">
        <div class="logo">
            <div class="logo-icon">b</div>
            <span>By At Home</span>
        </div>
        <div class="user-icon">
            <span class="icon-user"></span>
        </div>
    </header>

    <main class="main-content">
        <div class="login-container">
            <form method="post" action="../pages/login.php">
                <div class="form-group">
                    <label for="email">CPF</label>
                    <input type="email" id="email" name="email" required>
                </div>

                <div class="form-group">
                    <label for="senha">Senha</label>
                    <input type="password" id="senha" name="senha" required>
                </div>

                <div class="forgot-password">
                    <a href="#">Esqueci a senha</a>
                </div>

                <div class="social-login">
                    <div class="social-login-text">Ou faça login com</div>
                    <div class="social-buttons">
                        <button type="button" class="social-button google-btn">
                            <span class="icon-google"></span>
                        </button>
                        <button type="button" class="social-button email-btn">
                            <span class="icon-email"></span>
                        </button>
                    </div>
                </div>

                <button type="submit" class="login-button">Login</button>
            </form>
        </div>
    </main>
</body>
</html>
<?php

