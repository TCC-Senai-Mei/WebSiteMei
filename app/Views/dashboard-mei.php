<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Painel do MEI - Nexus</title>
    <link rel="stylesheet" href="public/css/dashboard-mei.css">
</head>
<body>

    <div class="dashboard-container">
        
        <aside class="dash-sidebar">
            <div class="dash-logo">
                <div class="logo-graphics">
                    <div class="square sq-1"></div>
                    <div class="square sq-2"></div>
                </div>
                <div class="logo-text">
                    <h2>nexus</h2>
                    <p>Sala do Empreendedor</p>
                </div>
            </div>

            <nav class="dash-menu">
                <a href="#" class="menu-item active"><span class="menu-icon">📊</span> Dashboard</a>
                <a href="#" class="menu-item"><span class="menu-icon">🏢</span> Meu Portal MEI</a>
                <a href="#" class="menu-item"><span class="menu-icon">💬</span> Assistente</a>
                <a href="#" class="menu-item"><span class="menu-icon">📄</span> Meus Protocolos</a>
                <a href="#" class="menu-item"><span class="menu-icon">⚙️</span> Configurações</a>
            </nav>

            <div class="dash-user-profile">
                <div class="avatar">JS</div>
                <div class="user-info">
                    <h4>João Silva Barbosa</h4>
                    <p>MEI · 12.345.678...</p>
                </div>
            </div>

            <div class="dash-sidebar-footer">
                <a href="index.html" class="btn-logout-link"><span class="menu-icon">🚪</span> Sair</a>
                <button class="btn-collapse"><span class="menu-icon">‹</span> Recolher</button>
            </div>
        </aside>

        <main class="dash-main-content">
            
            <header class="dash-header">
                <div class="search-bar">
                    <span class="search-icon">🔍</span>
                    <input type="text" placeholder="Buscar...">
                </div>
                <div class="header-actions">
                    <div class="notification-badge-container">
                        <span class="notification-icon">🔔</span>
                        <span class="badge-number">3</span>
                    </div>
                    <div class="user-badge">
                        <div class="mini-avatar">JS</div>
                        <div class="mini-user-info">
                            <span class="user-name">João</span>
                            <span class="user-role">MEI</span>
                        </div>
                    </div>
                </div>
            </header>

            <div class="dash-scroll-area">
                
                <div class="welcome-banner">
                    <h1>Boa noite, João 👋</h1>
                    <p>Aqui está o resumo da sua conta no Portal Nexus.</p>
                </div>

                <div class="alert-box-pending">
                    <div class="alert-content">
                        <span class="alert-icon">⚠️</span>
                        <div class="alert-text">
                            <h3>Atenção: 2 pendências ativas</h3>
                            <p>Declaração Anual 2025 atrasada · DAS de Junho ainda não pago</p>
                        </div>
                    </div>
                    <button class="btn-resolve">Resolver →</button>
                </div>

                <div class="metrics-grid">
                    <div class="metric-card">
                        <div class="metric-header">
                            <div class="metric-icon-box box-blue">👥</div>
                            <span class="trend positive">+3,2%</span>
                        </div>
                        <h2 class="metric-value">4.280</h2>
                        <p class="metric-label">MEIs cadastrados</p>
                    </div>

                    <div class="metric-card">
                        <div class="metric-header">
                            <div class="metric-icon-box box-green">📄</div>
                            <span class="trend positive">+8,5%</span>
                        </div>
                        <h2 class="metric-value">143</h2>
                        <p class="metric-label">Atendimentos/mês</p>
                    </div>

                    <div class="metric-card">
                        <div class="metric-header">
                            <div class="metric-icon-box box-yellow">🕒</div>
                            <span class="trend negative">-12%</span>
                        </div>
                        <h2 class="metric-value">2 dias</h2>
                        <p class="metric-label">Tempo médio</p>
                    </div>

                    <div class="metric-card">
                        <div class="metric-header">
                            <div class="metric-icon-box box-light-green">✅</div>
                            <span class="trend positive">+1%</span>
                        </div>
                        <h2 class="metric-value">94%</h2>
                        <p class="metric-label">Satisfação</p>
                    </div>
                </div>

                <div class="dashboard-panels-row">
                    
                    <div class="panel-box flex-2">
                        <div class="panel-header">
                            <h3>Atendimentos por mês</h3>
                            <span class="panel-subtitle">Janeiro – Junho 2025</span>
                            <span class="trend-indicator-top">+60%</span>
                        </div>
                        <div class="chart-mockup">
                            <div class="chart-bar-container"><div class="bar" style="height: 35%;"></div><span class="bar-label">Jan</span></div>
                            <div class="chart-bar-container"><div class="bar" style="height: 45%;"></div><span class="bar-label">Fev</span></div>
                            <div class="chart-bar-container"><div class="bar" style="height: 30%;"></div><span class="bar-label">Mar</span></div>
                            <div class="chart-bar-container"><div class="bar" style="height: 75%;"></div><span class="bar-label">Abr</span></div>
                            <div class="chart-bar-container"><div class="bar" style="height: 85%;"></div><span class="bar-label">Mai</span></div>
                            <div class="chart-bar-container"><div class="bar active-bar" style="height: 100%;"></div><span class="bar-label">Jun</span></div>
                        </div>
                    </div>

                    <div class="panel-box flex-1">
                        <div class="panel-header-split">
                            <h3>Protocolos recentes</h3>
                            <a href="#" class="view-all-link">Ver todos →</a>
                        </div>
                        
                        <div class="protocol-list-mock">
                            <div class="protocol-item">
                                <div class="protocol-info">
                                    <span class="protocol-id">NL-2025-04821</span>
                                    <p class="protocol-title">Solicitação de Alvará...</p>
                                    <span class="protocol-date">12/06/2025</span>
                                </div>
                                <span class="status-badge amber">Em Análise</span>
                            </div>
                        </div>
                    </div>

                </div>

            </div>

        </main>
    </div>

    <button class="floating-help-btn">?</button>

</body>
</html>