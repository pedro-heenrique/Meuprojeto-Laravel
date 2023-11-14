<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>REGISTRAR</title>
    
    <!-- CSS Bootstrap -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js" integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+" crossorigin="anonymous"></script>

    <link rel="shortcut icon" href="/img/logo-novacap.png" type="image/x-icon">
    <link rel="stylesheet" href="/css/style-register-page.css">
    <script src="/js/scripts.js"></script>
</head>
<body>
    <img class="img-logo" src="/img/logo-novacap.png" alt="LOGO NOVACAP">

    <div class="button-container">
        <button id="button-login"><a href="login-page.html">ENTRAR</a></button>
        <button id="button-register">REGISTRAR</button>
    </div>

    <form>
        <input type="text" id="nomeCompleto" name="nomeCompleto" placeholder="Nome Completo" required>
        <br>

        <input type="number" id="telefone" name="telefone" placeholder="Celular" required>
        <br>

        <input type="email" id="email" name="email" placeholder="Email" required>
        <br>

        <input type="number" id="cpf" name="cpf" placeholder="CPF" required>
        <br>

        <input type="password" id="senha" name="senha" placeholder="Senha" required>
        <br>

        <input type="password" id="senha" name="senha" placeholder="Confirme sua Senha" required>
        <br>

        <button id="button-create-account"><a href="home-page.html">CRIAR CONTA</a></button>
        <br>
     </form>
</body>
</html>