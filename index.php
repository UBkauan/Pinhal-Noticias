<?php
include_once "conexao.php";
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="noticia.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <title>Noticia</title>
</head>

<body>
    <div class="container bg-body-tertiary">

        <nav class="d-flex bg-body-terciary align-items-center py-3  border-top">
            <a href="/" class="col-md-4 d-flex align-items-center justify-content-center">
                <img src="img/pinhar.png" style="width: 200px;" alt="">
            </a>
            <div class="">
                <a href="index.php"><h2 id="spanTitle" class="d-flex align-items-center justify-content-center">Pinhal News</h5></a>
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
                    echo 'tem conteudo';
                    $sql = "SELECT * FROM tb_noticia WHERE id_noticia = $id_noticia;";
                    $resultado = mysqli_execute_query($conexao, $sql);
                    $dados = mysqli_fetch_array($resultado);
                    echo "titulo: ".$dados['titulo'].'<br>';
                    echo "data e hora: ".$dados['datahora'].'<br>';
                    echo "imagem: ".$dados['imagem'].'<br>';
                    echo "fonte: ".$dados['fonte'].'<br>';
                    echo "autor: ".$dados['autor'].'<br>';
                    echo "noticia: ".$dados['noticia'].'<br>';
                }else{
                    echo 'nao tem conteudo';
                }
                $sql = "SELECT * FROM tb_noticia;";
                $resultado = mysqli_execute_query($conexao, $sql);
                while($dados = mysqli_fetch_array($resultado))
                {
                    $titulo = $dados['titulo'];
                    $datahora = $dados['datahora'];
                    $fonte = $dados['fonte'];
                    $autor = $dados['autor'];
                    $noticia = $dados['noticia'];

                echo'
            <div class="album py-5 bg-body-tertiary">
                <div class="row row-cols-sm-2 row-cols-md-3 g-3">
                    <div class="col ">
                        <a href="#">
                            <div class="card shadow-sm">
                                <img class="bd-placeholder-img card-img-top" width="100%" height="225" role="img" aria-label="Placeholder: Thumbnail" src="'.$dados["imagem"].'" preserveAspectRatio="xMidYMid slice" focusable="false">
                                <rect class="p-3" width="100%" height="100%" fill="#55595c" /><text x="50%" y="50%" fill="#eceeef" dy=".3em">'.$titulo.'</text>
                                </img>
                                <div class="card-body">
                                    <p class="card-text p-4">'.$noticia.'</p>
                                </div>
                                <div><p>'.$fonte.'</p></div>
                                <div><p>'.$autor.'</p></div>
                            </div>
                        </a>
                    </div>
            </div>
           

            

            ';
        }
            ?>

        </main>
        </main>

        <footer class="d-flex flex-wrap justify-content-between align-items-center py-3 my-4 border-top">
            <p class="col-md-4 mb-0 text-body-secondary">&copy; 2024 Company, Inc</p>

            <a href="/" class="col-md-4 d-flex align-items-center justify-content-center mb-3 mb-md-0 me-md-auto link-body-emphasis text-decoration-none">
                <img src="img/pinhar.png" style="width: 100px;" alt="">
            </a>

            <ul class="nav col-md-4 justify-content-end">
                <li class="nav-item"><a href="#" class="nav-link px-2 text-body-secondary">Inicio</a></li>
                <li class="nav-item"><a href="#" class="nav-link px-2 text-body-secondary">Noticias</a></li>
            </ul>
        </footer>

    </div>
</body>

</html>