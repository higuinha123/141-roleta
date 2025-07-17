<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Buy At Home</title>
    <?php include 'templates/headerTemplate.php'; ?>
    <link rel="stylesheet" href="css/headerTemplateCss.css">
    <link rel="stylesheet" href="css/index.css">
</head>

<body>
    <header id="header"></header>
    <div class="first">
        <div class="titleOfertas">
            <h1 id="bomDia">Bom dia, <strong><?= htmlspecialchars($nome) ?>!</strong></h1>
            <h1>Confira as nossas <strong>ofertas</strong></h1>
        </div>
        
        <div class="slider-container">
            <div class="slider-item">
                <img src="img/oreo.webp" alt="Produto 1">
                <div class="info">
                    <strong>Biscoito Oreo</strong>
                    <div class="preco">
                        <br><p class="precoRiscado">R$ 12,00</p><p>R$ 9,00</p>
                    </div>
                </div>
            </div>
            <div class="slider-item">
                <img src="img/monster.webp" alt="Produto 2">
                <div class="info">
                    <strong>Monster Energy</strong>
                    <div class="preco">
                        <br><p class="precoRiscado">R$ 12,00</p><p>R$ 9,00</p>
                    </div>
                </div>
            </div>
            <div class="slider-item">
                <img src="img/leite.jpeg" alt="Produto 3">
                <div class="info">
                    <strong>Leite Elegê</strong>
                    <div class="preco">
                        <br><p class="precoRiscado">R$ 12,00</p><p>R$ 9,00</p>
                    </div>
                    </div>
            </div>
            <div class="slider-item">
                <img src="img/kitkat.webp
                " alt="Produto 4">
                <div class="info">
                    <strong>Kit Kat</strong>
                    <div class="preco">
                        <br><p class="precoRiscado">R$ 12,00</p><p>R$ 9,00</p>
                    </div>
                </div>
            </div>
            <div class="slider-item">
                <img src="img/snickers.webp" alt="Produto 5">
                <div class="info">
                    <strong>Snickers</strong>
                    <div class="preco">
                        <br><p class="precoRiscado">R$ 12,00</p><p>R$ 9,00</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
        
 
  <div class="separador"></div>


 

  <section class="listaCompras">

      <h1>Lista de Compras</h1>
      
      <div class="input-container">
          <input type="text" id="item-input" placeholder="Ex: Leite, Pão, Ovos..." />
          <button onclick="adicionarItem()">Adicionar</button>
        </div>
        
        <ul id="lista">
        
        </ul>
        <button class="finalizarCompra">Finalizar</button>
    </section>
        
        <script>
            function adicionarItem() {
                const input = document.getElementById('item-input');
                const texto = input.value.trim();
                if (texto === '') return;
                
                const li = document.createElement('li');
                li.innerHTML = `
                <span>${texto}</span>
                <div class="acoes">
                    <button class="check-btn" onclick="marcarItem(this)">✔</button>
                    <button onclick="removerItem(this)">✖</button>
                    </div>
                    `;
                    
                    document.getElementById('lista').appendChild(li);
                    input.value = '';
                }
                
                function marcarItem(botao) {
                    const li = botao.closest('li');
                    li.classList.toggle('comprado');
                }
                
                function removerItem(botao) {
                    const li = botao.closest('li');
                    li.remove();
                }
                </script>


</body>
</html>