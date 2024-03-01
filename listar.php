<?php 

/**
 * 
 * CONECTANDO AO BANCO DE DADOS 
 */

include("conexao.php");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="assets\css\cadastrar.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Document</title>
</head>
<body>

<header>
    <nav>
        <ul aria-label="Navegação primária" class="nav-primaria">
            <li><a href="index.php">Home</a></li>
            <li><a href="cadastrar.php">Cadastrar Usuario</a></li>
            <li><a href="listar.php">Listar Usuarios</a></li>
        </ul>
        <i class="fa-solid fa-bars"></i>
    </nav>
</header>



<!-- LISTA DE USUARIOS  -->

<table class="table">
                <thead>
                    <tr>
                        <th scope="col">Nome</th>
                        <th scope="col">Email</th>
                        <th scope="col">Senha</th>
                        <th scope="col"></th>
                        <th scope="col"></th>   
                    </tr>
                </thead>
                <tbody>
                    
                    <?php
                    $select = "SELECT * FROM usuario"; 
                    
                    $select  = $PDO->prepare($select);
                    $select->execute();

                    foreach ($select as $registro){
                    
                        $email = mb_convert_encoding($registro["EMAIL"], 'UTF-8');
                        $nome  = mb_convert_encoding($registro["NOME"], 'UTF-8');
                        $senha = mb_convert_encoding($registro["SENHA"],'UTF-8');
                    
                    ?>
                                        
                    <tr>
                        <td><?php echo $nome; ?></td>
                        <td><?php echo $email; ?></td>
                        <td><?php echo $senha; ?></td>
                        <td> 
                            <a href="cadastrar.php?NOME=<?php echo $nome ?>">
                                <button type="button" class="btn btn-warning">Alterar</button> 
                            </a>
                        </td>
                        
                        <td>
                            <a href="excluirusuario.php?nome=<?php echo $nome ?>">
                                <button type="button" class="btn btn-danger">Excluir</button>
                            </a>    
                        </td>
                    </tr>
                    <?php
                    }    
                    ?>
                    
                </tbody>
            </table>
    
</body>
</html>