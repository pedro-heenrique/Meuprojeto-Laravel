<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>NOVA OCORRÊNCIA</title>

    <!-- CSS Bootstrap -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js" integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+" crossorigin="anonymous"></script>

    <link rel="shortcut icon" href="/img/logo-novacap.png" type="image/x-icon">
    <link rel="stylesheet" href="/css/style-new-ocurrence.css">
    <script src="/js/scripts.js"></script>
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons"rel="stylesheet">
</head>
<body>
    
    <div class="navbar">
        <button id="back-home"><a href="home-page.html" class="icon-profile"><span class="material-icons">arrow_back</span></a></button>
        <h2 class="page-title">Nova ocorrência</h2>
    </div>

    <div class="text-tutorial">
        <p>Preencha os campos a seguir para adicionar uma ocorrência:</p>
    </div>

    <form>

        <div class="types-ocurrence">
            <select name="selecao" id="idselect">
                <option value="" disabled selected>Tipo de ocorrência</option>
                <option value="Buraco">Buraco</option>
                <option value="Meio-fio danificado">Meio-fio danificado</option>
                <option value="Poda de árvore">Poda de árvore</option>
                <option value="Limpeza de boca de lobo">Limpeza de boca de lobo</option>
                <option value="Calçada danificada">Calçada danificada</option>
            </select>
        </div>

        <br>

        <div class="description">
            <textarea name="idtexto" id="idtextarea" class="custom-textarea" cols="35" rows="5" placeholder="Descrição"></textarea>
          </div>

        <div class="adress">
            <input type="text" id="idtexto" name="idtexto" placeholder="Endereço">
        </div>

        <div class="risk-ocurrence">
            <select name="selecao" id="idselect">
                <option value="" disabled selected>Nível de risco</option>
                <option value="Baixo">Baixo</option>
                <option value="Mediano">Mediano</option>
                <option value="Alto">Alto</option>
            </select>
        </div>
    
     </form>

    <div class="send-photo">
        <button id="button-create-account">Enviar imagem</button>
        <br>
        <img src="/img/buraco.png" alt="Foto da ocorrência" title="Foto da ocorrência">
    </div>

    <div class="register-ocurrence">
        <button id="button-register-ocurrence">Registrar ocorrência</button>
    </div>

</body>
</html>