<?php
include_once "conexao.php";
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PinhalNews</title>
    <link rel="stylesheet" href="style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body>
    <div id="container">
    <div class="container bg-body-tertiary">

<nav class="d-flex bg-body-terciary align-items-center py-3  border-top">
    <a href="index.php" class="col-md-4 d-flex align-items-center justify-content-center">
        <img src="img/pinhar.png" style="width: 200px;" alt="">
    </a>
    <div class="">
        <a href="noticia.php"><h2 id="spanTitle" class="d-flex align-items-center justify-content-center">Pinhal News</h5></a>
        <h1 class="row p-2" style="margin-left: 200px; font-size: 1rem;">Aqui você fica atualizado até os dente</h1>
    </div>
</nav>


<nav class="navbar navbar-dark bg-dark" aria-label="First navbar example">
    <div class="container-fluid">
        <a class="navbar-brand" href="#">Fique por dentro das nossas noticias</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarsExample01" aria-controls="navbarsExample01" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarsExample01">
            <ul class="navbar-nav me-auto mb-2">
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="#">Principal</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link active" href="#">Todas as noticias</a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" data-bs-toggle="dropdown" aria-expanded="false">Mais</a>
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="#">Sobre nós</a></li>
                        <li><a class="dropdown-item" href="#">Contato</a></li>
                        <li><a class="dropdown-item" href="#"></a></li>
                    </ul>
                </li>
            </ul>
        </div>
    </div>
</nav>
        <main>
            <?php 
                $id_noticia = @$_GET['id_noticia'];
                if($id_noticia)
                {
                    $sql = "SELECT * FROM tb_noticia WHERE id_noticia = $id_noticia;";
                    $resultado = mysqli_execute_query($conexao, $sql);
                    $dados = mysqli_fetch_array($resultado);
                    echo "titulo: ".$dados['titulo'].'<br>';
                    echo "data e hora: ".$dados['datahora'].'<br>';
                    echo "imagem: <img src='img/".$dados['imagem']."' width='200'><br>";
                    echo "fonte: ".$dados['fonte'].'<br>';
                    echo "autor: ".$dados['autor'].'<br>';
                    echo "noticia: ".$dados['noticia'].'<br>';
                }else{
                    echo 'nao tem conteudo';
                }
            ?>        
        </main>
        <footer>
            <a href="#"><img src="img/whats.png" alt="whatsapp" width="226"></a>
            <p>Copyright © 2024 Pinhal News - Desenvolvido e otimizado por Alunos Etec INFO.</p>
            <a href="#"><img src="img/redes.png" alt="redes social" width="148"></a>
        </footer>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>