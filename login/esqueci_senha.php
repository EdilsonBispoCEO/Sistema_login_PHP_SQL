<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/senha.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>User Table</title>
</head>
<body>
 
<?php

    require 'usuario-consultar.php';
    $usuario = ListarUsuario();
    var_dump($usuario);

?>


<div class="container">
    <h1 class="table-title">Usuário</h1>
    <div class="table-responsive">
        <table class="user-table">
            <thead>
                <tr>
                    <th>Usuário</th>
                    <th>Senha</th>
                    <th>Editar</th>
                    <th>Excluir</th>
                </tr>
            </thead>
            <tbody>

            <?php   foreach ($usuarios as $linha) { ?>
                <tr>
                    <td>Edilson Bispo</td>
                    <td>********</td>        
                    <td><a href="#" class="btn btn-info">Editar</a></td>
                    <td><a href="#" class="btn btn-danger">Excluir</a></td>
                </tr>
                <?php } ?>

                <tr>
                    <td>JohnDoe</td>
                    <td>********</td>

                    <td><a href="#" class="btn btn-info">Editar</a></td>
                    <td><a href="#" class="btn btn-danger">Excluir</a></td>
                </tr>
                <tr>
                    <td>Julia Castro</td>
                    <td>********</td>

                    <td><a href="#" class="btn btn-info">Editar</a></td>
                    <td><a href="#" class="btn btn-danger">Excluir</a></td>
                </tr>
                <!-- Add more rows as needed -->
            </tbody>
        </table>
    </div>
</div>
 
</body>
</html>