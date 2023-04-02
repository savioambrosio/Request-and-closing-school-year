<?php

// conexao do php

// variavel $usario exemplo
$usuario = "root"; // usuario do php
$senha = ""; // senha do php admin
$database = "login"; // banco do php
$hostname = "localhost"; // endereco do banco de dados

$mysqli = new mysqli($hostname, $usuario, $senha, $database); //sintaxe para criar banco de dados
if($mysqli ->error){
    die("Falha ao concetar ao bd");
}
