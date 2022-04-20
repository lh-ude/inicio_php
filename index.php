<?php /* arrumar cadastro e entender pq o código não está compilando corretamente as outras páginas*/
    include './lib/bancoDados.php';
    $alunos= listaAlunos();
    $aluno = $alunos[1]['nome'];
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./assets/css/reset.css">
    <link rel="stylesheet" href="./assets/css/styles.css">
    <title>Homepage</title>
</head>
<body >
    <header>
        <h1>Escola Web - Bem-vindo!</h1>
    </div>
    <div class="nav">
        <a href="/index.php">HOME</a>
        <a href="/lista_alunos.php">ALUNOS</a>
        <a href="/cadastro.php">CADASTRO</a>
    </div>
    </header>
    <main class="inicio">
        <section class="titulo">
            <h2>Olá</h2>
        
            <?php
            echo .$aluno.
            ?>
        </section>
    </main>  
    <footer>
        <p>Site desenvolvido para fins acadêmicos</p>
    </footer>   
</body>
</html>