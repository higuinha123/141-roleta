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
            
            <form id="cadastroForm" action="../pages/cadastroUsuario.php?acao=cadastrar" method="post" target="_blank">
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
                        <button type="button" class="option-button" data-category="opcoes" data-value="bebidas">Bebidas</button>
                        <button type="button" class="option-button" data-category="opcoes" data-value="snacks">Snacks</button>
                        <button type="button" class="option-button" data-category="opcoes" data-value="chocolate">Chocolate</button>
                        <button type="button" class="option-button" data-category="opcoes" data-value="congelados">Congelados</button>
                        <button type="button" class="option-button" data-category="opcoes" data-value="temperos">Temperos</button>
                        <button type="button" class="option-button" data-category="opcoes" data-value="higiene">Higiene</button>
                        <button type="button" class="option-button" data-category="opcoes" data-value="outros">Outros</button>
                    </div>
                </div>

                <div class="question-section">
                    <h2 class="question-title">O que você faz?</h2>
                    <div class="options-grid">
                        <button type="button" class="option-button" data-category="interesses" data-value="trabalho">Trabalho</button>
                        <button type="button" class="option-button" data-category="interesses" data-value="videogame">Videogame</button>
                        <button type="button" class="option-button" data-category="interesses" data-value="corrida">Corrida</button>
                        <button type="button" class="option-button" data-category="interesses" data-value="futebol">Futebol</button>
                        <button type="button" class="option-button" data-category="interesses" data-value="estudos">Estudos</button>
                        <button type="button" class="option-button" data-category="interesses" data-value="churrasco">Churrasco</button>
                        <button type="button" class="option-button" data-category="interesses" data-value="outros">Outros</button>
                    </div>
                </div>

                <input type="submit" class="submit-button">
            </form>
        </div>
    </main>

    <script>
    // Alterna visualmente a seleção dos botões
    document.querySelectorAll('.option-button').forEach(button => {
        button.addEventListener('click', function () {
            this.classList.toggle('selected');
        });
    });

    document.getElementById('cadastroForm').addEventListener('submit', function (e) {
        const inputs = this.querySelectorAll('.form-input');
        const selectedOptions = {
            opcoes: [],
            interesses: []
        };

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

        if (!isValid) {
            e.preventDefault();
            return;
        }

        // ✅ Cria <input type="hidden"> com os valores selecionados
        selectedOptions.opcoes.forEach(value => {
            const input = document.createElement('input');
            input.type = 'hidden';
            input.name = 'opcoes[]';
            input.value = value;
            this.appendChild(input);
        });

        selectedOptions.interesses.forEach(value => {
            const input = document.createElement('input');
            input.type = 'hidden';
            input.name = 'interesses[]';
            input.value = value;
            this.appendChild(input);
        });

        // Deixa o form ser enviado normalmente
    });

    // Máscara para CPF
    document.querySelector('input[placeholder="CPF"]').addEventListener('input', function (e) {
        let value = e.target.value.replace(/\D/g, '');
        value = value.replace(/(\d{3})(\d)/, '$1.$2');
        value = value.replace(/(\d{3})(\d)/, '$1.$2');
        value = value.replace(/(\d{3})(\d{1,2})$/, '$1-$2');
        e.target.value = value;
    });
</script>


</body>
</html>
