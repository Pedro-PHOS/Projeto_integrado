<?php 
    require_once 'php/Users.php';
?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" type="text/css" href="css\LoginRegistro.css">
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
                <button type="button" class="toggle-btn" onclick="Login()">Entrar</button>
                <button type="button" class="toggle-btn" onclick="Register()">Registrar</button>

                <form id="Login" class="input-group" method="post">
                    <input type="text"  name="user_id" class="input-field" placeholder="User id" required />
                    <input type="password" name="password" class="input-field" placeholder="Enter Password" required />
                    <input type="checkbox" class="check-box" /><span>Lembrar Senha</span>
                    <button name="button" value="login" type="submit" class="submit-btn" style="color: aliceblue">Log in</button>
                </form>

                <form id="Register" class="input-group" method="post">
                    <input type="text" name ="user_id" class="input-field" placeholder="User id" required />
                    <input type="email" name="email" class="input-field" placeholder="E-mail ID" required />
                    <input type="password" name="password" class="input-field" placeholder="Enter Password" required />
                    <button name="button" value="register" type="submit" class="submit-btn" style="color: aliceblue">Register</button>
                </form>
            </div>

        </div>




        <script>
          var x = document.getElementById("Login");
          var y = document.getElementById("Register");
          var z = document.getElementById("btn");
    
            
            function Register() {
                x.style.left = "-1800px";
                y.style.left = "0px";
                z.style.left = "110px";
            }

            function Login() {
                x.style.left = "0px";
                y.style.left = "2000px";
                z.style.left = "0px";
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
                    Cadastro Realizado com Sucesso! Acesse para entrar
                    </div>

                    <?php #Abre o PHP
                }
                else    
                {
                    ?> <!-- Fecha o PHP --> 
                    
                    <div class="msg-erro">
                    E-mail já cadastrado!
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