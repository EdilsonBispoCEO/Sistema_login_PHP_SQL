<?php

function ListarUsuario() {
    $conexao = new PDO("mysql:host=localhost;dbname=db_login", "root", "");

    $query = "SELECT id, usuario, senha FROM tb_usuario";

    $resultado = $conexao->query($query);
    $lista = $resultado->fetchAll();

    return $lista;
}

function Listar1Usuario($id) {
    $conexao = new PDO("mysql:host=localhost;dbname=db_login", "root", "");

    $query = "SELECT id, usuario, senha FROM tb_usuarios WHERE id = " . $id;

    $resultado = $conexao->query($query);
    $lista = $resultado->fetchAll();

    
    foreach ($lista as $lista) {
        return $lista;       
    }

}