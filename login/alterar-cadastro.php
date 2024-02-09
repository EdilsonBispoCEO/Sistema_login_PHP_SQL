<?php

$usuario = $_POST['usuario'];
$id = $_POST['senha'];
$id = $_POST['id'];

function AlterarCadastro($usuario, $senha) {

    $conexao = new PDO("mysql:host=localhost;dbname=login", "root", "");

    $query = "UPDATE tb_usuarios SET usuario = {$usuario}, senha = {$senha} WHARE id = {$id}";

    $conexao->exec($query);
}

try {
    AlterarCadastro($usuario,$senha,$id);
    header('Location:esqueci-senha.php');
}catch (PDOException $ex) {
    die ('Erro ao cadastrar dados: ' . $ex->getMessage());
}