<?php
Class Usuario
{
    private $pdo;
    public $msgErro = "";

    public function conectar($nome, $host, $usuario ,$senha)
    {
        global $pdo;
        global $msgErro;
        try
        { 
            $pdo = new pdo("mysql:dbname=".$nome.";host=".$host,$usuario,$senha);

        }catch(PDOException $e){
            $msgErro = $e->getMessage();
        }
    }
    public function cadastrar($nome, $telefone, $email, $senha)
    {
        global $pdo;
        //verificar se  ja existe o email cadastrado
        $sql = $pdo->prepare("SELECT id_usuario FROM usuarios WHERE email = :e");
        $sql->bindValue(":e",$email);
        $sql->execute();
        if($sql->rowCount() > 0)
        {
            return false; //ja esta cadastrada
        } 
        else
        {
            $sql = $pdo->prepare("INSERT INTO usuarios (nome, telefone, email, senha)
            VALUES (:n, :t, :e, :s)");
             $sql->bindValue(":n",$nome);
             $sql->bindValue(":t",$telefone);
             $sql->bindValue(":e",$email);
             $sql->bindValue(":s",$senha);
             $sql->execute();
             return true;
        }
        //caso não, Cadstrar
    }
    
    public function logar($nome, $telefone, $email, $senha)
    {
        global $pdo;
        $sql = $pdo->prepare("SELECT id_usuario FROM usuarios WHERE email = :e AND senha =:s");
        $sql->bindValue(":e",$email);
        $sql->bindValue(":s",$senha);
        $sql->execute();
        if($sql->rowCount() > 0)
        {
            //entrar no sistema
            $dado = 
parei 4:18


        } 
        else
        {


             return true;

    }
}
?>