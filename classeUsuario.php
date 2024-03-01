<?php 
/**
 * descricao da classe usuario, com classes e funções
 * @author
 */
 class classeUsuario {
    
    public $idUsuario;

    private $nome;

    private $email;

    private $senha;

    //gettes e setters

    /**
     * Summary of getNome
     * @return string
     */

     function getIdUsuario() {
        return $this->idUsuario;
    }
    function getNome() {
        return $this->nome;
    }
    
    function getEmail(){
        return $this->email;
    }

    
    function getSenha(){
        return $this->senha;
    }

    function setIdUsuario($idUsuario){
        $this->idUsuario = $idUsuario;
    }

    function setNome($nome){
        $this->nome = $nome;
    }

    function setEmail($email){
        $this->email = $email;
    }
    function setSenha($senha){
        $this->senha = $senha;
    }


    /**
     * FUNÇÕES
     */


    function inserirUsuario(){
        include("conexao.php");
        $comando = "INSERT INTO usuario (NOME,EMAIL,SENHA) VALUES (?, ?, ?);";
        $resposta = $PDO->prepare($comando);

        $resposta->bindValue(1, $this->nome);
        $resposta->bindValue(2, $this->email);
        $resposta->bindValue(3, $this->senha);
        $resposta->execute();
    }

    function consultarCidade(){
        include("conexao.php");

        $comando = "SELECT * FROM usuario WHERE IDUSUARIO=?";
        $reposta = $PDO->prepare($comando);

        $reposta->bindValue(1, $this->idUsuario);
        $reposta->execute();
    }

    function alterarUsuario(){
        include("conexao.php");

        $comando = "UPDATE usuario SET"
        . "NOME=?"
        . "WHERE IDUSUARIO=?;";

        $resposta = $PDO->prepare($comando);

        $resposta->bindValue(1,$this->nome);
        $resposta->bindValue(2,$this->idUsuario);

        $resposta->execute();
    }

    public function excluirUsuario(){
        include("conexao.php");

        $comando = "DELETE FROM usuario WHERE (NOME=?);";
        $resposta = $PDO->prepare($comando);

        $reposta->bindValue(1, $this->nome);
        $reposta->execute();
    }
 }
?>