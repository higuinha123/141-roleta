<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0"> 
    <title>By At Home</title>
    <link rel="stylesheet" href="../css/cadastro.css">
    <script defer src="../js/templateLoader.js"></script>
    <link rel="stylesheet" href="../css/headerTemplateCss.css">
</head>

<body>

<?php 

require_once '../config/database.php';

$banco = new Banco();
$conexao = $banco->conectar();


// opcional: fechar conexão
$banco->fecharConexao();



?>

    <header id="header">

    </header>

    <main class="main-content">
        <div class="form-container">
            <h1 class="form-title">Cadastro</h1>
            
            <form id="cadastroForm" action="../pages/cadastroUsuario.php?acao=cadastrar" method="post">
                <div class="form-group">
                    <input type="text" name='nome' class="form-input" placeholder="Nome completo" required>
                </div>
                
                <div class="form-group">
                    <input type="text" name='email' class="form-input" placeholder="Email" required>
                </div>
                
                <div class="form-group">
                    <input type="password" name='senha' class="form-input" placeholder="Senha" required>
                </div>
                
                <div class="form-group">
                    <input type="tel" name='cpf' class="form-input" placeholder="CPF" required>
                </div>

                <div class="question-section">
                    <h2 class="question-title">Quais são do seu interesse?</h2>
                    <div class="options-grid">
                        <button type="button" class="option-button" data-category="opcoes" data-value="1">Bebidas</button>
                        <button type="button" class="option-button" data-category="opcoes" data-value="2">Snacks</button>
                        <button type="button" class="option-button" data-category="opcoes" data-value="3">Chocolate</button>
                        <button type="button" class="option-button" data-category="opcoes" data-value="4">Congelados</button>
                        <button type="button" class="option-button" data-category="opcoes" data-value="5">Temperos</button>
                        <button type="button" class="option-button" data-category="opcoes" data-value="6">Higiene</button>
                        <button type="button" class="option-button" data-category="opcoes" data-value="7">Outros</button>
                    </div>
                </div>

                <div class="question-section">
                    <h2 class="question-title">O que você faz?</h2>
                    <div class="options-grid">
                        <button type="button" class="option-button" data-category="interesses" data-value="1">Trabalho</button>
                        <button type="button" class="option-button" data-category="interesses" data-value="2">Videogame</button>
                        <button type="button" class="option-button" data-category="interesses" data-value="3">Corrida</button>
                        <button type="button" class="option-button" data-category="interesses" data-value="4">Futebol</button>
                        <button type="button" class="option-button" data-category="interesses" data-value="5">Estudos</button>
                        <button type="button" class="option-button" data-category="interesses" data-value="6">Churrasco</button>
                        <button type="button" class="option-button" data-category="interesses" data-value="7">Outros</button>
                    </div>
                </div>


                <input type="submit" class="submit-button">
            </form>
        </div>
    </main>

    <script>
    document.addEventListener("DOMContentLoaded", function () {
    const form = document.getElementById('cadastroForm');

    // Alternar visual dos botões (selecionado ou não)
    document.querySelectorAll('.option-button').forEach(button => {
        button.addEventListener('click', function () {
            this.classList.toggle('selected');
        });
    });

    form.addEventListener('submit', function (e) {
    e.preventDefault(); // impede envio automático

    const inputs = form.querySelectorAll('.form-input');
    const selectedOptions = {
        opcoes: [],
        interesses: []
    };

    // coleta os botões selecionados
    document.querySelectorAll('.option-button.selected').forEach(button => {
        const category = button.dataset.category;
        const value = button.dataset.value;
        selectedOptions[category].push(value);
    });

    let isValid = true;
    inputs.forEach(input => {
        if (!input.value.trim()) {
            isValid = false;
            input.style.borderColor = '#ff4444';
        } else {
            input.style.borderColor = '#e0e0e0';
        }
    });

    if (selectedOptions.opcoes.length === 0 || selectedOptions.interesses.length === 0) {
        isValid = false;
        alert('Por favor, selecione pelo menos uma opção em cada categoria.');
    }

    if (!isValid) return;

    // Remove inputs ocultos antigos (caso o usuário envie duas vezes)
    form.querySelectorAll('input[type="hidden"]').forEach(el => el.remove());

    // Adiciona novos inputs escondidos com os valores
    selectedOptions.opcoes.forEach(value => {
        const input = document.createElement('input');
        input.type = 'hidden';
        input.name = 'opcoes[]';
        input.value = value;
        form.appendChild(input);
    });

    selectedOptions.interesses.forEach(value => {
        const input = document.createElement('input');
        input.type = 'hidden';
        input.name = 'interesses[]';
        input.value = value;
        form.appendChild(input);
    });

    // Agora envia o formulário de forma manual
    form.submit();
});

});

</script>


</body>
</html>
