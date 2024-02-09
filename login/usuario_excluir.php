<?php
 
$id_excluir = $_GET['CODIGO'];
function excluirUsuario ($id){
 
    $conexao = new PDO("mysql:host=localhost;dbname=login", "root", "");  
    $query = "DELETE FROM tb_usuarios WHERE id=".$id;
    $conexao->exec($query);
 
}
 
try{
    excluirUsuario($id_excluir);
    header('location:esqueci-senha.php');
}
catch(PDOException $ex) {
 
  die('erro ao excluir o usuario'. $ex->getMessage());
}
   
?>