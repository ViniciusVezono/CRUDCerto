<?php 


/**
 *
 * FUNÇÃO DE EXCLUIR O USUARIO
 * 
 */

    $nome      =   $_GET["Nome"];

    include("classeUsuario.php");
    $usuario = new classeUsuario();

    $usuario->setNome($nome);

    $usuario->excluirUsuario();

    echo "<script>alert ('Usuario deletado');</script>";
    echo "<script>window.location.assign('cidades.php');</script>";
?>