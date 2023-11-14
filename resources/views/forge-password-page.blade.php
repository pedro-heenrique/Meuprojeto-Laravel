<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ESQUECI MINHA SENHA</title>

    <!-- CSS Bootstrap -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js" integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+" crossorigin="anonymous"></script>
    <link rel="shortcut icon" href="img/logo-novacap.png" type="image/x-icon">
    <link rel="stylesheet" href="/css/style-forget-password-page.css">
    <script src="/js/scripts.js"></script>

</head>
<body>
    <img class="img-logo" src="/img/logo-novacap.png" alt="LOGO NOVACAP">

    <div class="container">
        <div class="title-forget-password">
            <h2>Esqueci minha senha</h2>
        </div>
        
        <div class="text-forget-password">
            <p>Enviaremos um e-mail com um link para redefinir sua senha, digite o e-mail e cpf associado à sua conta abaixo.</p>
        </div>
    </div>
    
    <form>
        <input type="email" id="email" name="email" required placeholder="E-mail" required>
        <br>
        <input type="number" id="cpf" name="cpf" required placeholder="CPF" required>
        <br>
        <input type="submit" value="Confirmar">
        <br>
        <button id="button-create-account"><a href="login-page.html">Voltar</a></button>
    </form>
</body>
</html>