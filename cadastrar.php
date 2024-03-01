<?php


    /**
     * INSTANCIANDO AS CLASSE
     * 
     */
    include("classeUsuario.php");
    $usuario = new classeUsuario();
    $usuario -> setIdUsuario($idUsuario);
    $usuario ->setNome("");
    $usuario ->setEmail("");
    $usuario ->setSenha("");
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
    
<!-- FORMULARIO PARA INSERIR OS  DADOS DO USUARIO -->
<main>
<form action="salvarusuario.php" method="GET">
        <div class="form-group">
            <label for="campoNOME">Nome</label>
            <input type="text" 
                class="form-control"
                id="campoNOME"
                name="campoNOME"
                aria-describedby="nomeHelp"
                placeholder="Nome"
                value="<?php echo $usuario->getNome();?>"
                required>
        </div>
        <br>
        <div class="form-group">
            <label for="campoEMAIL" class="form-label">Email</label>
            <input type="email"
                    class="form-control"
                    id="campoEMAIL" 
                    aria-describedby="emailHelp"
                    name="campoEMAIL"
                    value="<?php echo $usuario->getEmail();?>"
                    placeholder="Email">
        </div>
        <br>
        <div class="form-group">
            <label for="campoSENHA" class="form-label">Senha</label>
            <input  type="password"
                    class="form-control"
                    name="campoSENHA"
                    id="campoSENHA"
                    value="<?php echo $usuario->getSenha();?>"
                    placeholder="Insira a senha">
                    
        </div> 
  <button type="submit" class="btn btn-primary">Salvar</button>
</form>
</main>
</body>
</html>