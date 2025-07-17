<?php
$senhaDigitada = 'pedro'; // senha que você usou no cadastro
$hashSalvo = '$2y$10$qwgWUJ6jD2QZoiGDSbZaLOb'; // copie o hash exato do banco

if (password_verify($senhaDigitada, $hashSalvo)) {
    echo "Senha correta!";
} else {
    echo "Senha incorreta!";
}
