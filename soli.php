<?php
session_start();
include('conexao.php'); //buscar a conexao

// se estiver vazio vai retornar a pagina
if(isset($_POST['btn'])){
    $nome =  $_POST['nome'];
    $telefone =  $_POST['telefone'];
    $filho =  $_POST['filho'];
    $de =  $_POST['de'];
    $idade =  $_POST['idade'];
    $data =  $_POST['date'];
    $estado  =  $_POST['estado'];
    $bilhete =  $_POST['bilhete'];
    $natural =  $_POST['natural'];
    $residencia =  $_POST['residencia'];
    $telefone =  $_POST['telefone'];
    $matricula=  $_POST['m'];
    $email=  $_POST['email'];
    $curso=  $_POST['curso'];
    $turno =  $_POST['turno'];
    $turma =  $_POST['turma'];
    
    $_SESSION['nome'] = $nome;
    $_SESSION['filho'] = $filho;
    $_SESSION['de'] = $de;
    $_SESSION['idade'] = $idade;
    $_SESSION['date'] = $data;
    $_SESSION['bilhete'] = $bilhete;
    $_SESSION['estado'] = $estado;
    $_SESSION['natural'] = $natural;
    $_SESSION['residencia'] = $residencia;
    $_SESSION['telefone'] = $telefone;
    $_SESSION['m'] = $matricula;
    $_SESSION['email'] = $email;
    $_SESSION['curso'] = $curso;
    $_SESSION['turma'] = $turma;
    $_SESSION['turno'] = $turno;
    

    $_SESSION['msgh'] = True;
    header('Location: solicitar.php');
}

if(isset($_POST['btn2'])){
    $nome2 =  $_POST['nome2'];
    $ano =  $_POST['ano'];
    $telefones =  $_POST['telefones'];
    $emails =  $_POST['emails'];
    $cursos =  $_POST['cursos'];
    $turno =  $_POST['turno'];
    $turma =  $_POST['turma'];
    $matriculas =  $_POST['matriculas'];
    $justif =  $_POST['justif'];
    
    $_SESSION['nome2'] = $nome2;
    $_SESSION['telefones'] = $telefones;
    $_SESSION['ano'] = $ano;
    $_SESSION['emails'] = $emails;
    $_SESSION['cursos'] = $cursos;
    $_SESSION['turno'] = $turno;
    $_SESSION['turma'] = $turma;
    $_SESSION['matriculas'] = $matriculas;
    $_SESSION['justif'] = $justif;
    
    $_SESSION['msgh'] = True;
    header('Location: solicitar.php');
}
else{
    echo "erro";
}
?>
