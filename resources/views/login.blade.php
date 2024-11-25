<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>Login - Rango do Rei</title>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <style>
        body {
            background-color: #f1d398;
            font-family: Arial, sans-serif;
        }
        .login-container {
            max-width: 400px;
            margin: 60px auto;
            padding: 30px;
            background-color: #fff;
            border-radius: 10px;
            box-shadow: 0 0 20px rgba(0, 0, 0, 0.1);
        }
        .btn-custom {
            background-color: #ed1c24;
            color: white;
        }
        .btn-custom:hover {
            background-color: #d4171d;
        }
        .form-label {
            font-weight: bold;
        }
        .logo {
            display: block;
            margin: 0 auto 20px;
            height: 100px;
        }
        .error-message {
            color: #d4171d;
            font-size: 0.9rem;
            margin-top: 10px;
            display: none;
        }
        footer {
            background-color: #ed1c24;
            color: white;
            padding: 10px 0;
            text-align: center;
            position: fixed;
            bottom: 0;
            width: 100%;
        }
        .btn-back {
            position: absolute;
            top: 20px;
            left: 20px;
            background-color: transparent;
            border: none;
        }
        .btn-back img {
            height: 30px;
        }
        @media (max-width: 576px) {
            .login-container {
                margin: 30px auto;
                padding: 20px;
            }
            .logo {
                height: 80px;
            }
        }
        @media (min-width: 1200px) {
            .login-container {
                max-width: 500px;
            }
        }
    </style>
</head>
<body>

    <!-- Botão de voltar -->
    <a href="/" class="btn-back">
        <img src="https://cdn-icons-png.flaticon.com/512/93/93634.png" alt="Voltar" title="Voltar à página inicial">
    </a>

    <!-- Login Formulário -->
    <div class="login-container">
        <img src="https://www.rangodorei.com.br/wp-content/themes/rangodorei/images/logo_header.png" alt="Rango do Rei" class="logo">
        <h3 class="text-center mb-4" style="color: #ed1c24;">Login</h3>
        
        <!-- Formulário -->
        <form id="loginForm">
            <!-- E-mail -->
            <div class="mb-3">
                <label for="email" class="form-label">Endereço de E-mail</label>
                <input type="email" class="form-control" id="email" placeholder="Seu e-mail" required>
            </div>
            <!-- Senha -->
            <div class="mb-3">
                <label for="password" class="form-label">Senha</label>
                <input type="password" class="form-control" id="password" placeholder="Sua senha" required>
            </div>
            <!-- Botão de Login -->
            <div class="d-grid mb-3">
                <button type="button" class="btn btn-custom" onclick="handleLogin()">Entrar</button>
            </div>
            <!-- Mensagem de erro -->
            <p class="error-message" id="errorMessage">
                <a href="/redefinirSenha" style="text-decoration: none; color: #d4171d;">Esqueci minha senha</a>
            </p>
            <!-- Texto alternativo -->
            <p class="text-center" style="color: #ed1c24;">Não tem uma conta? <a href="/cadastroUsuario" style="text-decoration: none; color: #d4171d;">Cadastre-se aqui</a></p>
        </form>
    </div>

    <!-- Footer -->
    <footer>
        <p>&copy; 2024 Rango do Rei - Todos os direitos reservados.</p>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <script>
        function handleLogin() {
            // Exibe a mensagem de erro
            const errorMessage = document.getElementById('errorMessage');
            errorMessage.style.display = 'block';
        }
    </script>
</body>
</html>
