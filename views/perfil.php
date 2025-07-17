 <!DOCTYPE html>
 <html lang="en">
 <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../css/perfil.css">
 </head>
<body>
    <div class="header">
        <div class="logo">
            <div class="logo-icon">b</div>
            By At Home
        </div>
        <div class="user-info">
            <div class="coins">
                <div class="coin-icon">₿</div>
                <span id="coinCount">3</span>
            </div>
        </div>
    </div>

    <div class="profile-container">
        <div class="profile-card">
            <div class="profile-header">
                <div class="avatar-container">
                    <div class="avatar">
                        CA
                        <div class="avatar-edit" onclick="openEditModal()">
                            ✏️
                        </div>
                    </div>
                </div>
                <div class="profile-info">
                    <h1 class="profile-name">Carlo Ancellotti</h1>
                    <p class="profile-status">Membro Ativo • Online</p>
                    <div class="profile-stats">
                        <div class="stat">
                            <div class="stat-value">43</div>
                            <div class="stat-label">Compras</div>
                        </div>
                        <div class="stat">
                            <div class="stat-value">R$ 2.847</div>
                            <div class="stat-label">Economia</div>
                        </div>
                        <div class="stat">
                            <div class="stat-value">8</div>
                            <div class="stat-label">Cupons</div>
                        </div>
                    </div>
                    <div class="profile-actions">
                        <button class="btn btn-roulette" onclick="spinRoulette()">
                            🎰 Girar Roleta
                        </button>
                        <button class="btn btn-primary" onclick="openEditModal()">
                            ✏️ Editar Perfil
                        </button>
                        <button class="btn btn-secondary" onclick="viewHistory()">
                            📊 Histórico
                        </button>
                    </div>
                </div>
            </div>

            <div class="profile-details">
                <div class="detail-grid">
                    <div class="detail-item">
                        <div class="detail-label">Nome</div>
                        <div class="detail-value">Carlo Ancellotti</div>
                    </div>
                    <div class="detail-item">
                        <div class="detail-label">Telefone</div>
                        <div class="detail-value">(67) 99999-9999</div>
                    </div>
                    <div class="detail-item">
                        <div class="detail-label">Email</div>
                        <div class="detail-value">carlito@gmail.com</div>
                    </div>
                    <div class="detail-item">
                        <div class="detail-label">CPF</div>
                        <div class="detail-value">075.172.891-78</div>
                    </div>
                    <div class="detail-item">
                        <div class="detail-label">Membro desde</div>
                        <div class="detail-value">Janeiro 2024</div>
                    </div>
                    <div class="detail-item">
                        <div class="detail-label">Nível</div>
                        <div class="detail-value">Gold Member</div>
                    </div>
                </div>
            </div>

            <div class="coupons-section">
                <h2 class="section-title">
                    🎟️ Meus Cupons
                </h2>
                <div class="coupon-grid">
                    <div class="coupon" onclick="useCoupon('LIMPEZA20')">
                        <div class="coupon-discount">20% OFF</div>
                        <div class="coupon-description">Produtos de Limpeza</div>
                        <div class="coupon-footer">
                            <span>LIMPEZA20</span>
                            <span>Válido até 30/07</span>
                        </div>
                    </div>
                    <div class="coupon" onclick="useCoupon('COMIDA15')">
                        <div class="coupon-discount">15% OFF</div>
                        <div class="coupon-description">Alimentos e Bebidas</div>
                        <div class="coupon-footer">
                            <span>COMIDA15</span>
                            <span>Válido até 25/07</span>
                        </div>
                    </div>
                    <div class="coupon" onclick="useCoupon('HIGIENE10')">
                        <div class="coupon-discount">10% OFF</div>
                        <div class="coupon-description">Higiene Pessoal</div>
                        <div class="coupon-footer">
                            <span>HIGIENE10</span>
                            <span>Válido até 28/07</span>
                        </div>
                    </div>
                    <div class="coupon coupon-expired">
                        <div class="coupon-discount">25% OFF</div>
                        <div class="coupon-description">Laticínios</div>
                        <div class="coupon-footer">
                            <span>LATICINIOS25</span>
                            <span>Expirado</span>
                        </div>
                    </div>
                </div>
            </div>

            <div class="preferences-section">
                <h2 class="section-title">
                    ❤️ Preferências de Compras
                </h2>
                <div class="preferences-grid">
                    <div class="preference-card">
                        <div class="preference-header">
                            <div class="preference-icon">🧽</div>
                            <div class="preference-info">
                                <h3>Produtos de Limpeza</h3>
                                <p>Categoria preferida</p>
                            </div>
                        </div>
                        <div class="preference-stats">
                            <div class="preference-stat">
                                <div class="preference-stat-value">18</div>
                                <div class="preference-stat-label">Compras</div>
                            </div>
                            <div class="preference-stat">
                                <div class="preference-stat-value">42%</div>
                                <div class="preference-stat-label">Do total</div>
                            </div>
                        </div>
                        <div class="favorite-product">
                            <div class="favorite-product-name">Detergente Ypê</div>
                            <div class="favorite-product-count">Comprou 8 vezes</div>
                        </div>
                    </div>

                    <div class="preference-card">
                        <div class="preference-header">
                            <div class="preference-icon">🍎</div>
                            <div class="preference-info">
                                <h3>Alimentos</h3>
                                <p>Segunda categoria</p>
                            </div>
                        </div>
                        <div class="preference-stats">
                            <div class="preference-stat">
                                <div class="preference-stat-value">12</div>
                                <div class="preference-stat-label">Compras</div>
                            </div>
                            <div class="preference-stat">
                                <div class="preference-stat-value">28%</div>
                                <div class="preference-stat-label">Do total</div>
                            </div>
                        </div>
                        <div class="favorite-product">
                            <div class="favorite-product-name">Arroz Tio João</div>
                            <div class="favorite-product-count">Comprou 6 vezes</div>
                        </div>
                    </div>

                    <div class="preference-card">
                        <div class="preference-header">
                            <div class="preference-icon">🧴</div>
                            <div class="preference-info">
                                <h3>Higiene Pessoal</h3>
                                <p>Terceira categoria</p>
                            </div>
                        </div>
                        <div class="preference-stats">
                            <div class="preference-stat">
                                <div class="preference-stat-value">8</div>
                                <div class="preference-stat-label">Compras</div>
                            </div>
                            <div class="preference-stat">
                                <div class="preference-stat-value">19%</div>
                                <div class="preference-stat-label">Do total</div>
                            </div>
                        </div>
                        <div class="favorite-product">
                            <div class="favorite-product-name">Shampoo Seda</div>
                            <div class="favorite-product-count">Comprou 4 vezes</div>
                        </div>
                    </div>

                    <div class="preference-card">
                        <div class="preference-header">
                            <div class="preference-icon">🥛</div>
                            <div class="preference-info">
                                <h3>Laticínios</h3>
                                <p>Quarta categoria</p>
                            </div>
                        </div>
                        <div class="preference-stats">
                            <div class="preference-stat">
                                <div class="preference-stat-value">5</div>
                                <div class="preference-stat-label">Compras</div>
                            </div>
                            <div class="preference-stat">
                                <div class="preference-stat-value">11%</div>
                                <div class="preference-stat-label">Do total</div>
                            </div>
                        </div>
                        <div class="favorite-product">
                            <div class="favorite-product-name">Leite Itambé</div>
                            <div class="favorite-product-count">Comprou 3 vezes</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Modal de Edição -->
    <div id="editModal" class="modal">
        <div class="modal-content">
            <span class="close" onclick="closeEditModal()">&times;</span>
            <h2>Editar Perfil</h2>
            <form id="editForm">
                <div class="form-group">
                    <label class="form-label">Nome</label>
                    <input type="text" class="form-input" id="editName" value="Carlo Ancellotti">
                </div>
                <div class="form-group">
                    <label class="form-label">Email</label>
                    <input type="email" class="form-input" id="editEmail" value="carlito@gmail.com">
                </div>
                <div class="form-group">
                    <label class="form-label">Telefone</label>
                    <input type="tel" class="form-input" id="editPhone" value="(67) 99999-9999">
                </div>
                <div class="form-group">
                    <button type="submit" class="btn btn-primary">Salvar Alterações</button>
                </div>
            </form>
        </div>
    </div>

    <div id="notification" class="notification"></div>

    <script>
        let coins = 3;

        function updateCoins() {
            document.getElementById('coinCount').textContent = coins;
        }

        function spinRoulette() {
            if (coins <= 0) {
                showNotification('Você não tem moedas suficientes!', 'error');
                return;
            }

            coins--;
            updateCoins();

            const btn = document.querySelector('.btn-roulette');
            btn.style.transform = 'scale(0.95)';
            btn.textContent = '🎰 Girando...';

            setTimeout(() => {
                const prizes = [
                    { text: '🎟️ Cupom 10% OFF Limpeza!', type: 'coupon' },
                    { text: '🎟️ Cupom 15% OFF Alimentos!', type: 'coupon' },
                    { text: '💰 +2 Moedas!', type: 'coins' },
                    { text: '🎉 Frete Grátis!', type: 'bonus' },
                    { text: '😔 Tente novamente', type: 'fail' }
                ];
                const result = prizes[Math.floor(Math.random() * prizes.length)];
                
                if (result.type === 'coins') {
                    coins += 2;
                    updateCoins();
                } else if (result.type === 'coupon') {
                    // Adicionar cupom ao perfil
                    const couponCount = document.querySelector('.stat-value').textContent;
                    document.querySelector('.stat-value').textContent = parseInt(couponCount) + 1;
                }
                
                showNotification(`Parabéns! ${result.text}`);
                btn.textContent = '🎰 Girar Roleta';
                btn.style.transform = 'scale(1)';
            }, 2000);
        }

        function useCoupon(couponCode) {
            if (event.target.classList.contains('coupon-expired')) {
                showNotification('Este cupom já expirou!', 'error');
                return;
            }
            
            showNotification(`Cupom ${couponCode} copiado! Use no checkout.`);
            
            // Simular copiar para clipboard
            if (navigator.clipboard) {
                navigator.clipboard.writeText(couponCode);
            }
        }

        function viewHistory() {
            showNotification('Redirecionando para histórico de compras...');
            // Aqui você redirecionaria para a página de histórico
        }

        function showNotification(message, type = 'success') {
            const notification = document.getElementById('notification');
            notification.textContent = message;
            notification.className = `notification ${type}`;
            notification.classList.add('show');
            
            setTimeout(() => {
                notification.classList.remove('show');
            }, 3000);
        }

        // Formulário de edição
        document.getElementById('editForm').addEventListener('submit', function(e) {
            e.preventDefault();
            
            const name = document.getElementById('editName').value;
            const email = document.getElementById('editEmail').value;
            const phone = document.getElementById('editPhone').value;
            
            // Atualizar os valores na tela
            document.querySelector('.profile-name').textContent = name;
            document.querySelector('.detail-value').textContent = name;
            document.querySelectorAll('.detail-value')[1].textContent = phone;
            document.querySelectorAll('.detail-value')[2].textContent = email;
            
            closeEditModal();
            showNotification('Perfil atualizado com sucesso!');
        });

        // Fechar modal clicando fora
        window.onclick = function(event) {
            const modal = document.getElementById('editModal');
            if (event.target === modal) {
                closeEditModal();
            }
        }

        // Animação de entrada
        document.addEventListener('DOMContentLoaded', function() {
            const card = document.querySelector('.profile-card');
            card.style.opacity = '0';
            card.style.transform = 'translateY(20px)';
            
            setTimeout(() => {
                card.style.transition = 'all 0.6s ease';
                card.style.opacity = '1';
                card.style.transform = 'translateY(0)';
            }, 100);
        });
    </script>
</body>
</html>