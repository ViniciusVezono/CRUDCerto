<?php 

/**
 *
 * FUNÇÃO DE SALVAR O USUARIO E ALTERAR 
 * 
 */
    include("conexao.php");
    include("classeUsuario.php");


    $nome= $_GET["campoNOME"];
    $email = $_GET["campoEMAIL"];
    $senha = $_GET["campoSENHA"];



    $usuario = new classeUsuario();

    $usuario->setNome($nome);
    $usuario->setEmail($email);
    $usuario->setSenha($senha);
    

    if($usuario->getIdUsuario()== 0){
        $usuario->inserirUsuario();

        echo "<script>alert('Usuario $nome cadastrado');</script>";
        echo "<script>window.location.assign('listar.php');</script>";
    
    } else {
        $usuario->alterarUsuario();

        echo"<script>alert('usuario $nome alterada'); </script>";
    }
?>



