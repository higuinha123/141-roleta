<?php
session_start();      // inicia a sessão (se já não estiver ativa)
session_unset();      // limpa todas as variáveis de sessão
session_destroy();    // destrói a sessão

// redireciona para a página de login ou home
header("Location: ../index.php");
exit;