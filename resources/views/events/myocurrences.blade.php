<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>HOME</title>
    
    <!-- CSS Bootstrap -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js" integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+" crossorigin="anonymous"></script>

    <link rel="shortcut icon" href="/img/logo-novacap.png" type="image/x-icon">
    <link rel="stylesheet" href="/css/style-my-ocurrences.css">
    <script src="/js/scripts.js"></script>
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons"rel="stylesheet">
</head>
<body>
    
    <div class="navbar">
        <button id="back-home"><a href="home-page.html" class="icon-profile"><span class="material-icons">arrow_back</span></a></button>
        <h2 class="page-title">Minhas ocorrência</h2>
    </div>

    <div class="ocurrences">
        <h3>Ocorrência registrada:</h3>
            <div class="details">
                <div class="card-ocurrences">
                    <img src="/img/buraco.png" alt="Buraco." title="Buraco.">
                </div>
            </div>
    </div>

    <form>
        <input type="text" required placeholder="Código da Ocorrência">
        <br>

        <input type="text" required placeholder="Status">
        <br>

        <input type="text" required placeholder="Tipo de Ocorrência">
        <br>

        <input type="text" required placeholder="Descrição">
        <br>

        <input type="text" required placeholder="Endereço">
        <br>

        <input type="text" required placeholder="Nível de risco">
        <br>
     </form>

     <div class="actions">  
        <a href="new-ocurrence-page.html"><button id="button-create-ocurrence">Criar nova ocorrência</button></a>
        <br>
    </div>

</body>
</html>