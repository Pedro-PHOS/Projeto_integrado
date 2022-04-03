<?php

class Usuario {

    private $pdo;
    public $msgErro = "";

    public function conectar($dbName, $serverAddress, $dbuser, $dbpass)
    {
        global $pdo;
        try
        {
            $pdo = new PDO("sqlsrv:Server=".$serverAddress.";Database=".$dbName,$dbuser,$dbpass);
        } catch (PDOException $e) 
        {
            global $msgErro; 
            //$msgErro = $e->getMessage();
            $msgErro = throw new PDOException($e);
        }
    }
    
    public function cadastrar($user_id,$email,$password)
    {
        global $pdo;

        //Verificando cadastro baseado no e-mail 
        
        $sql = $pdo->prepare("SELECT localid FROM [dbo].[UserData] WITH(NOLOCK) WHERE [userEmail] = :e",array(PDO::ATTR_CURSOR => PDO::CURSOR_SCROLL));
        $sql->bindValue(":e",$email);
        $sql->execute();

        if($sql->rowCount()>0) 
        {
            return false; //Ja é cadastrado
        }
        else  //Cadastrar caso ainda não não esteja no banco
        {
            $sql = $pdo->prepare("INSERT INTO [dbo].[UserData] (userId,userEmail,userPass) VALUES (:i, :e, :p)");
            $sql->bindValue(":i",$user_id);
            $sql->bindValue(":e",$email);
            $sql->bindValue(":p",$password);
            $sql->execute();

            return true; //Foi cadastrado
        }
       
    }

    public function logar ($user_id,$password) 
    {
        global $pdo;

        // Verificar senha e email no db

        $sql = $pdo->prepare("SELECT localid FROM [dbo].[UserData] WITH(NOLOCK) WHERE [userEmail] = :i AND [userPass] = :p",array(PDO::ATTR_CURSOR => PDO::CURSOR_SCROLL));
        $sql->bindValue(":i",$user_id);
        $sql->bindValue(":p",$password);
        $sql->execute();

        if ($sql->rowCount()>0) 
        {
            //Acesso OK - Match no db e cria sessao
            $dado = $sql->fetch();
            session_start();
            $_SESSION['localid'] = $dado['localid'];
            
            return true;
        }
        else
        {
            return false; //Não logou
        } 

    }
}

?>