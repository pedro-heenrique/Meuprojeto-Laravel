<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LOGAR</title>
    
    <!-- CSS Bootstrap -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js" integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+" crossorigin="anonymous"></script>

    <link rel="shortcut icon" href="/img/logo-novacap.png" type="image/x-icon">    
    <link rel="stylesheet" href="/css/style-login-page.css">
    <script src="/js/scripts.js"></script>
</head>
<body>

    <img class="img-logo" src="/img/logo-novacap.png" alt="LOGO NOVACAP">

    <div class="button-container">
        <button id="button-login">ENTRAR</button>
        <button id="button-register"><a href="register-page.html">REGISTRAR</a></button>
    </div>

    <form>
       <input type="email" id="email" name="email" required placeholder="E-mail">
       <br>
       <input type="password" id="senha" name="senha" required placeholder="Senha">
       <br>
       <button id="button-login2"><a href="home-page.html">LOGAR</a></button>
       <br>
       <button id="button-forget-password"><a href="forget-password-page.html">ESQUECI MINHA SENHA</a></button>
    </form>
</body>
</html>