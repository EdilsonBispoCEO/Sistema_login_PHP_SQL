<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="css/cadastro.css">
    <title>Cadastro</title>
</head>
<body>

    <?php

    if (isset($_GET['CODIGO'])) {        //AQUI É PARA VALIDAÇÕES MAIORES 
        $id = $_GET['CODIGO'];
        require 'usuario-consultar.php';
        $usuario = Listar1Usuario($id);
    } else {
        $id = '';
        $usuario['usuario'] = '';
        $usuario['senha'] = '';
    }

    // isset($_GET['CODIGO']) ? $id = $_GET['CODIGO'] :'';   // AQUI É OARA PEQUENAS VALIDAÇÕES

    ?>

    <div class="container cadastro-container">
        <h2 class="text-center mb-4" >
                        
    <?php

        if ($id != '') {
            echo "Editar";
        } else {
            echo "Cadastro";
        }

    ?>
        </h2>

        <?php if ($id != '') { ?>
            <form method="POST" action="alterar-cadastro.php">
                <input type="hidden" id="id" nome="id" value="<?= $id ?>">
        <?php } else { ?>

            <form method="POST" action="criar-cadastro.php">
        <?php } ?>
          
            <div class="mt-1 form-group">
                <label for="nome">Nome:</label>
                <input type="text" class="form-control" id="nome" name="nome" placeholder="Digite o nome">
            </div>

            <div class="mt-1 form-group">
                <label for="email">Email:</label>
                <input type="text" class="form-control" id="email" name="email" placeholder="Digite o e-mail">
            </div>

            <div class="mt-1 form-group">
                <label for="usuario">Usuario:</label>
                <input type="text" class="form-control" id="usuario" name="usuario" placeholder="Digite o usuario" value="<?= $usuario['usuario'] ?>">
            </div>

            <div class="mt-1 form-group">
                <label for="senha">Senha:</label>
                <input type="text" class="form-control" id="senha" name="senha" placeholder="Digite a senha" value="<?= $usuario['senha'] ?>">
            </div>

            <div class="mt-2 text-center">
                <button type="submit" class="btn btn-success">Cadastro</button>
            </div>
        </form>
    </div>
</body>
</html>