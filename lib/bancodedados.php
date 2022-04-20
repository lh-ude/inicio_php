<?php

    $alunos = [];
    $pessoa = array('nome' => 'Bianca', 'idade' => 20, 'sexo' => 'feminino');
    array_push($alunos,$pessoa);

    $pessoa = array('nome' => 'Claudia', 'idade' => 20, 'sexo' => 'feminino');
    array_push($alunos,$pessoa);

    $pessoa = array('nome' => 'Luiza', 'idade' => 18, 'sexo' => 'feminino');
    array_push($alunos,$pessoa);

    $pessoa = array('nome' => 'Marcos', 'idade' => 20, 'sexo' => 'Masculino');
    array_push($alunos,$pessoa);

    $pessoa = array('nome' => 'Mariani', 'idade' => 18, 'sexo' => 'feminino');
    array_push($alunos,$pessoa);

    $pessoa = array('nome' => 'Michele', 'idade' => 18, 'sexo' => 'feminino');
    array_push($alunos,$pessoa);

    $pessoa = array('nome' => 'Pedro', 'idade' => 21, 'sexo' => 'Masculino');
    array_push($alunos,$pessoa);

    $pessoa = array('nome' => 'Savio', 'idade' => 21, 'sexo' => 'Masculino');
    array_push($alunos,$pessoa);

    $pessoa = array('nome' => 'Wisley', 'idade' => 28, 'sexo' => 'Masculino');
    array_push($alunos,$pessoa);

      function listaAlunos(){
        return $GLOBALS['alunos'];
    }

    function conectar () {
        $server = '127.0.0.1';
        $username = 'root';
        $password = '';
        $dataBase = 'test';

        $link = mysqli_connect( $server, $username, $password, $dataBase);

        if (mysqli_connect_errno()) {
            echo 'mysqli connection error: ' . mysqli_connect_error();
        } else {
            return $link;
        }
    }

    function listar_alunos () {
        $link = conectar();
        $result = mysqli_query($link, "SELECT nome, idade,sexo FROM alunos", MYSQLI_USE_RESULT);

        return $result;

        mysqli_close($link);
    }

?>

   