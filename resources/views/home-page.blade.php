<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>HOME</title>
    <link rel="stylesheet" href="/css/style-home.css">
    <script src="https://code.jquery.com/jquery-3.6.4.slim.min.js" integrity="sha384-GLhlTQ8iFZ6Mz9l8r+YirQFI5RQx2/cPz5LXS+8NEeazrWA+6pB8JQFhTjI/pq5f" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-e8l69VhXvKuxG+pV7Sbz9IbA7bG0Nn8KuR3gL9L3w1PM1s4E2Hu9A7ZKaLmRb4b" crossorigin="anonymous"></script>

    <script src="/js/scripts.js"></script>
    <link rel="shortcut icon" href="/img/logo-novacap.png" sizes="128x128" type="image/x-icon">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
</head>


<body>

<div class="navbar">
    <div class="button-container">
        <button id="page-my-occurrences"></title><a href="/events/myocurrences" class="icon-profile"><span class="material-icons">visibility</span><span class="button-text">Minhas ocorrências</span></a></button>
    </div>

    <div class="button-container">
        <button id="page-profile" title="Perfil"><a href="/events/myprofile" class="icon-profile"><span class="material-icons">person</span></a></button>
        <button id="page-another" title="Chamados"><a href="/events/called" class="icon-profile"><span class="material-icons">phone_in_talk</span></a></button>
        <button id="page-appointment" title="Agendamento"><a href="/events/create" class="icon-profile"><span class="material-icons">date_range</span></a></button>
        <button id="page-news" title="Notícias"> <a href="/events/news" class="icon-profile"><span class="material-icons">article</span></a></button>
    </div>
</div>

    <div class="ocurrences">
        <h3>Categorias de ocorrências</h3>

            <div class="details">
                <div class="card-client cliente-01">
                    <img src="/img/buraco.png" alt="Buraco." title="Buraco.">
                    <h4>Buraco</h4>
                </div>
            </div>

            <div class="details">
                <div class="card-client cliente-02">
                    <img src="/img/meio-fio-danificado.png" alt="Meio-fio danificado." title="Meio-fio danificado.">
                    <h4>Meio-fio danificado</h4>
                </div>
            </div>

            <div class="details">
                <div class="card-client cliente-03">
                    <img src="/img/poda-de-arvore.png" alt="Poda de árvore." title="Poda de árvore.">
                    <h4>Poda de árvore</h4>
                </div>
            </div>

            <div class="details">
                <div class="card-client cliente-04">
                    <img src="/img/boca-de-lobo.png" alt="Limpeza de boca de lobo." title="Limpeza de boca de lobo.">
                    <h4>Limpeza de boca de lobo</h4>
                </div>
            </div>

            <div class="details">
                <div class="card-client cliente-05">
                    <img src="/img/calcada-danificada.png" alt="Calçada danificada." title="Calçada danificada.">
                    <h4>Calçada danificada</h4>
                </div>
            </div>
    </div>

    <div class="new-ocurrence">
        <a href="/events/newocurrence"><img src="/img/plus.png" width="60px" alt="Crie sua ocorrência" title="Crie sua ocorrência"></a>
    </div>

</body>
</html>