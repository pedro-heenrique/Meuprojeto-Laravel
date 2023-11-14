<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MEU PERFIL</title>
    
    <!-- CSS Bootstrap -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js" integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+" crossorigin="anonymous"></script>

    <link rel="shortcut icon" href="/img/logo-novacap.png" type="image/x-icon">
    <link rel="stylesheet" href="/css/style-my-profile-page.css">
    <script src="/js/scripts.js"></script>
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons"rel="stylesheet">
</head>
<body>
    
    <div class="navbar">
        <button id="back-home"><a href="home-page.html" class="icon-profile"><span class="material-icons">arrow_back</span></a></button>
        <h2>Perfil</h2>
    </div>

    <div class="my-profille">
        <div class="details">
            <div class="card-photo">
                <img src="/img/photo-profile.png">
            </div>
        </div>
    </div>

    <form>
        <input type="text" required placeholder="João Pedro">
        <br>

        <input type="text" required placeholder="(61) 92345-6789">
        <br>

        <input type="text" required placeholder="teste@gmail.com">
        <br>

        <input type="text" required placeholder="123.456.789-10">
        <br>
     </form>

     <div class="actions">
        <button id="button-update-account">Atualizar dados</button>
        <br>

        <button id="button-exit-account"><a href="login-page.html">Sair da conta</a></button>
    </div>

</body>
</html>