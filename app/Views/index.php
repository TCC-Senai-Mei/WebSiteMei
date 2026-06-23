<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sala do Empreendedor - Nova Lima</title>
    <link rel="stylesheet" href="public/css/index.css">
</head>
<body>

    <div class="page-container">
        
        <aside class="sidebar">
            <div class="sidebar-content">
                <div class="logo-container">
                    <div class="logo-graphics">
                        <div class="square sq-1"></div>
                        <div class="square sq-2"></div>
                    </div>
                    <div class="logo-text">
                        <h2>nexus</h2>
                        <p>Construindo para o futuro</p>
                    </div>
                </div>

                <h1 class="main-title">
                    Sala do Empreendedor <br>
                    <span class="highlight">Nova Lima</span>
                </h1>

                <p class="description">
                    Para quem já é MEI, quer abrir um, ou é servidor da Sala do Empreendedor — tudo em um só lugar.
                </p>

                <ul class="benefits-list">
                    <li>
                        <span class="check-icon">✓</span>
                        Abra seu MEI com auxílio do assistente
                    </li>
                    <li>
                        <span class="check-icon">✓</span>
                        Acompanhe documentos e protocolos em tempo real
                    </li>
                    <li>
                        <span class="check-icon">✓</span>
                        Servidores: visão 360° de todos os MEIs atendidos
                    </li>
                </ul>
            </div>

            <footer class="sidebar-footer">
                © 2025 Nexus · TCC — Sistema de Atendimento Digital para MEI
            </footer>
        </aside>

        <main class="main-content">
            
            <div id="main-view" class="content-wrapper view active">
                <h2 class="welcome-title">Bem-vindo ao Nexus</h2>
                <p class="welcome-subtitle">Selecione como deseja acessar o sistema.</p>

                <div class="options-container">
                    <div id="btn-mei" class="access-card clickable">
                        <div class="icon-box bg-light-green">📄</div>
                        <div class="card-text">
                            <h3>Portal do MEI</h3>
                            <p>Empreendedor ou quem quer abrir um MEI</p>
                        </div>
                        <div class="arrow-icon">→</div>
                    </div>

                    <div id="btn-servidor" class="access-card clickable">
                        <div class="icon-box bg-dark-green">👥</div>
                        <div class="card-text">
                            <h3>Área do Servidor</h3>
                            <p>Funcionários da Sala do Empreendedor</p>
                        </div>
                        <div class="arrow-icon">→</div>
                    </div>
                </div>

                <hr class="divider">

                <div class="demo-section">
                    <p class="demo-title">Acesso rápido (demonstração)</p>
                    <div class="demo-badge">
                        <span><strong>MEI:</strong> CNPJ 12.345.678/0001-90 · senha123</span>
                    </div>
                    <div class="demo-badge">
                        <span><strong>Servidor:</strong> Matrícula 2025001 · prefeitura2025</span>
                    </div>
                </div>
            </div>

            <div id="mei-view" class="content-wrapper view">
                <button class="back-link btn-back">← Voltar</button>

                <div class="header-login">
                    <div class="icon-box bg-light-green inline-icon">📄</div>
                    <div class="header-login-text">
                        <h2 class="login-title">Portal do MEI</h2>
                        <p class="login-subtitle">Acesse com seu CNPJ e senha</p>
                    </div>
                </div>

                <form class="login-form" onsubmit="event.preventDefault();">
                    <div class="form-group">
                        <label for="mei-cnpj">CNPJ</label>
                        <input type="text" id="mei-cnpj" placeholder="00.00.00.00/0001-00">
                    </div>

                    <div class="form-group">
                        <label for="mei-password">Senha</label>
                        <div class="password-container">
                            <input type="password" id="mei-password" placeholder="••••••••">
                            <span class="toggle-password">👁️</span>
                        </div>
                    </div>

                    <button type="submit" class="btn-submit">Entrar →</button>
                </form>

                <div class="form-footer-links split-links">
                    <a href="#">Criar Conta</a>
                    <a href="#">Esqueci a senha</a>
                </div>
            </div>

            <div id="servidor-view" class="content-wrapper view">
                <button class="back-link btn-back">← Voltar</button>

                <div class="header-login">
                    <div class="icon-box bg-dark-green inline-icon">👥</div>
                    <div class="header-login-text">
                        <h2 class="login-title">Área do Servidor</h2>
                        <p class="login-subtitle">Funcionários da Sala do Empreendedor</p>
                    </div>
                </div>

                <div class="info-callout">
                    <p>Este acesso é exclusivo para <strong>servidores públicos</strong> da Prefeitura de Nova Lima que atuam na Sala do Empreendedor. Acesse com sua <strong>matrícula funcional</strong>.</p>
                </div>

                <form class="login-form" onsubmit="event.preventDefault();">
                    <div class="form-group">
                        <label for="server-matricula">Matrícula Funcional</label>
                        <input type="text" id="server-matricula" placeholder="Ex: 2025001">
                    </div>

                    <div class="form-group">
                        <label for="server-password">Senha</label>
                        <div class="password-container">
                            <input type="password" id="server-password" placeholder="••••••••">
                            <span class="toggle-password">👁️</span>
                        </div>
                    </div>

                    <button type="submit" class="btn-submit">Acessar Painel →</button>
                </form>

                <div class="form-footer-links center-links">
                    <a href="#">Esqueci minha senha</a>
                </div>
            </div>

        </main>

    </div>

    <button class="floating-help-btn">?</button>

    <script src="public/js/index.js"></script>
</body>
</html>