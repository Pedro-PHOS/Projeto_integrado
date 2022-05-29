<?php 
    require_once 'php/Users.php';
?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" type="text/css" href="css\LoginRegistro.css">
    <link rel="icon" href="">
    <title>Infotech  Login e Registro</title>
</head>
<body>

<div id="section_01">
        <header>
            <div class="logo">
                <img src="../Login_Cadastro/img/Logo.png" alt="">
            </div>

            <div class="menu">
                <li><a href="../index.html">Home</a></li>
                <li><a href="../Cursos/index.html">Cursos</a></li>
                <li><a href="../Login_Cadastro/LoginRegistro.php">Login</a></li>
                <li><a href="../Pagina_Sobre/pagina_sobre.php">Sobre</a></li>
            </div>
        </header>

        <!--Início do código do formulário de cadastro e registro-->
        
        <div class="form-box">
            
            <div class="button-box">
                <div id="btn"></div>
                <button type="button" class="toggle-btn" id="entrar" onclick="Login()">Entrar</button>
                <button type="button" class="toggle-btn" id="registrar" onclick="Register()">Registrar</button>

                <form id="Login" class="input-group" method="post">
                    <input type="text"  name="user_id" class="input-field" placeholder="Usuário" required />
                    <input type="password" name="password" class="input-field" placeholder="Senha" required />
                    <input type="checkbox" class="check-box" /><span>Lembrar Senha</span>
                    <button name="button" value="login" type="submit" class="submit-btn" >Entrar</button>
                </form>

                <form id="Register" class="input-group" method="post">
                    <input type="text" name ="user_id" class="input-field" placeholder="Usuário" required />
                    <input type="email" name="email" class="input-field" placeholder="E-mail" required />
                    <input type="password" name="password" class="input-field" placeholder="Senha" required />
                    <button name="button" value="register" type="submit" class="submit-btn" >Registrar</button>
                </form>
            </div>

        </div>




        <script>
          var x = document.getElementById("Login");
          var y = document.getElementById("Register");
          var z = document.getElementById("btn");
          var entrar    = document.getElementById("entrar");
          var registrar = document.getElementById("registrar");

            
            function Register() {
                x.style.left = "-1800px";
                y.style.left = "0px";
                z.style.left = "110px";
                entrar.style.color = "black";
                registrar.style.color = "white";   
            }

            function Login() {
                x.style.left = "0px";
                y.style.left = "2000px";
                z.style.left = "0px";
                registrar.style.color = "black";
                entrar.style.color="white";
            }


        </script>

    <?php 
    //Validar o clique no botão

    if(isset($_POST['user_id']))
    {

        $u = new Usuario;
        
        $u->conectar("dbLoginProjeto","dbprojetohtml.cegtexfrqfwu.sa-east-1.rds.amazonaws.com","usr_php_read","@fWGo@MrauLc");

        if($u->msgErro == "") //nenhum erro 
        {
            if($_POST['button']=='register')
            {
            
            $user_id    =   addslashes($_POST ['user_id']);
            $email      =   addslashes($_POST ['email']);
            $password   =   addslashes($_POST ['password']);
            
                if($u->cadastrar($user_id,$email,$password))
                { 
                    ?> <!-- Fecha o PHP --> 

                    <div class="msg-sucesso">
                    Cadastro Realizado com Sucesso!
                    </div>

                    <?php #Abre o PHP
                }
                else    
                {
                    ?> <!-- Fecha o PHP --> 
                    
                    <div class="msg-erro">
                    E-mail ou Usuário já cadastrado!
                    </div>

                    <?php #Abre o PHP
                }

            }
            if($_POST['button']=='login')
            {
            
            $user_id    =   addslashes($_POST ['user_id']);
            $password   =   addslashes($_POST ['password']);
            
                if($u->logar($user_id,$password))
                {?> <!-- Fecha o PHP --> 

                    <div class="msg-sucesso">
                    Login Realizado com Sucesso
                    </div>
                    <?php #Abre o PHP

                }
                else
                {?> <!-- Fecha o PHP --> 

                    <div class="msg-erro">
                    E-mail ou Senha não conferem
                    </div>

                    <?php #Abre o PHP
                }

            }

        
            
        }
        else
        {?>
            <div class="msg-erro"> 
                <?php echo "Erro: ".$u->msgErro;?> 
            </div>
            <?php
        }
       
    }


    ?>
</body>
</html>