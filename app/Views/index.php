<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sala do Empreendedor - Nova Lima</title>
    <link rel="stylesheet" href="index.css">
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
            <div class="content-wrapper">
                
                <div class="header-login">
                    <div class="icon-box bg-light-green inline-icon">📄</div>
                    <div class="header-login-text">
                        <h2 class="login-title">Portal do MEI</h2>
                        <p class="login-subtitle">Acesse com seu CNPJ e senha</p>
                    </div>
                </div>

                <form class="login-form" action="app/Views/dashboard-mei.php" method="GET">
                    <div class="form-group">
                        <label for="mei-cnpj">CNPJ</label>
                        <input type="text" id="mei-cnpj" placeholder="00.00.00.00/0001-00" required>
                    </div>

                    <div class="form-group">
                        <label for="mei-password">Senha</label>
                        <div class="password-container">
                            <input type="password" id="mei-password" placeholder="••••••••" required>
                        </div>
                    </div>

                    <button type="submit" class="btn-submit">Entrar →</button>
                </form>

                <div class="form-footer-links split-links">
                    <a href="#">Criar Conta</a>
                    <a href="#">Esqueci a senha</a>
                </div>

                <hr class="divider">

                <div class="demo-section">
                    <p class="demo-title">Acesso rápido (demonstração)</p>
                    <div class="demo-badge">
                        <span><strong>MEI:</strong> CNPJ 12.345.678/0001-90 · senha123</span>
                    </div>
                </div>
            </div>
        </main>

    </div>

    <button class="floating-help-btn">?</button>

</body>
</html>