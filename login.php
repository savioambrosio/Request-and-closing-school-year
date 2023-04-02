<?php
session_start();
include('conexao.php'); //buscar a conexao

// se estiver vazio vai retornar a pagina
if(empty($_POST['aluno']) || empty($_POST['bi'])){
    header('Location: index.php');
    exit();
}
else{
//proteger contra o sql enjection
    $aluno = mysqli_real_escape_string($mysqli, $_POST['aluno']);
    $bi = mysqli_real_escape_string($mysqli, $_POST['bi']);


    //buscar os dados no banco de dados com select
    $code = "SELECT * FROM alunoslogin where aluno = '$aluno' and bi = '$bi'";
    //verificar erro
    $query = $mysqli->query($code) or die("ERRO".$mysqli->error);

    $quantidade = $query->num_rows; // retornar o numero de colunas

    //
    if($quantidade == 1){
        $_SESSION['aluno'] = $aluno;
        
        $_SESSION['nome'] = '';
        $_SESSION['filho'] = '';
        $_SESSION['nome'] = '';
        $_SESSION['filho'] = '';
        $_SESSION['de'] = '';
        $_SESSION['idade'] = '';
        $_SESSION['date'] = '';
        $_SESSION['bilhete'] = '';
        $_SESSION['estado'] = '';
        $_SESSION['natural'] = '';
        $_SESSION['residencia'] = '';
        $_SESSION['telefone'] = '';
        $_SESSION['m'] = '';
        $_SESSION['email'] = '';
        $_SESSION['curso'] = '';
        $_SESSION['turma'] = '';
        $_SESSION['turno'] = '';

        $_SESSION['nome2'] = '';
        $_SESSION['telefones'] = '';
        $_SESSION['ano'] = '';
        $_SESSION['emails'] = '';
        $_SESSION['cursos'] = '';
        $_SESSION['turno'] = '';
        $_SESSION['turma'] = '';
        $_SESSION['matriculas'] = '';
        $_SESSION['justif'] = '';

        header('Location: solicitar.php');
        exit();
    }
    else{
        $_SESSION['msg'] = True;
        header('location: index.php');
        exit();
    }

    echo $quantidade;exit;
}