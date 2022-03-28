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

<body background="" style="background-repeat: no-repeat; background-position: center; background-size: cover">
    
    <div class="hero>" style=" display:flex">

        <!--Início do código do formulário de cadastro e registro-->
        
        <div class="form-box">
            <img src="img/Logo.png" style=" padding-left: 60px"/>
            <div class="button-box">
                <div id="btn"></div>
                <button type="button" class="toggle-btn" onclick="Login()">Log-in</button>
                <button type="button" class="toggle-btn" onclick="Register()">Register</button>

                <form id="Login" class="input-group" method="post">
                    <input type="text"  name="user_id" class="input-field" placeholder="User id" required />
                    <input type="password" name="password" class="input-field" placeholder="Enter Password" required />
                    <input type="checkbox" class="check-box" /><span>Remember Password</span>
                    <button  type="submit" name="button" value="login" class="submit-btn" style="color: aliceblue">Log in</button>
                </form>

                <form id="Register" class="input-group" method="post">
                    <input type="text" name ="user_id" class="input-field" placeholder="User id" required />
                    <input type="email" name="email" class="input-field" placeholder="E-mail ID" required />
                    <input type="password" name="password" class="input-field" placeholder="Enter Password" required />
                    <input type="checkbox" class="check-box" require/><span>I Agree to The Terms & Conditions</span>
                    <button type="submit" name="button" value="register"  class="submit-btn" style="color: aliceblue">Register</button>
                </form>
            </div>

        </div>

        <!--Fim do código do formulário de cadastro e registro-->
        <!--Inicio da seção de blocos de Curso-->

        <div class="container">
            <h2>Confira os Nossos Cursos!</h2>
            <div class="list">
                <div class="form-element">
                    <section class="Linux">
                        <a href="https://www.google.com">
                            <div class="box-header"></div>

                            <div class="icon">
                                <img src="C:\Users\Bruno Rafael\Downloads\WebSite-estudo--main\Site\Home\img\Linux.png" />

                                <h1 class="Bloco-Title">
                                    Linux
                                </h1>
                            </div>
                            <p class="Bloco-Body">
                                Aprenda a programar com uma das linguagens mais versáteis do mercado
                            </p>
                        </a>
                    </section>
                </div>

                <div class="form-element">
                    <section class="Office">
                        <a href="https://www.google.com">
                            <div class="box-header"></div>

                            <div class="icon">
                                <img src="C:\Users\Bruno Rafael\Downloads\WebSite-estudo--main\Site\Home\img\Office.png" />

                                <h1 class="Bloco-Title">
                                    Office
                                </h1>
                            </div>
                            <p class="Bloco-Body">
                                Aprenda a utilizar as principais suites do Office 365
                            </p>
                        </a>
                    </section>
                </div>

                <div class="form-element">
                    <section class="Windows">
                        <a href="https://www.google.com">
                            <div class="box-header"></div>

                            <div class="icon">
                                <img src="C:\Users\Bruno Rafael\Downloads\WebSite-estudo--main\Site\Home\img\Windows.png" />

                                <h1 class="Bloco-Title">
                                    Windows
                                </h1>
                            </div>
                            <p class="Bloco-Body">
                                Aprenda sobre os recursos essenciais do principal SO do mercado
                            </p>
                        </a>
                    </section>
                </div>

                <div class="form-element">
                    <section class="python">
                        <a href="https://www.google.com">
                            <div class="box-header"></div>

                            <div class="icon">
                                <img src="C:\Users\Bruno Rafael\Downloads\WebSite-estudo--main\Site\Home\img\python.png" />

                                <h1 class="Bloco-Title">
                                    Python
                                </h1>
                            </div>
                            <p class="Bloco-Body">
                                Aprenda as bases da linguagem e se prepare para o mercado profissional
                            </p>
                        </a>
                    </section>
                </div>

                <div class="form-element">
                    <section class="csharp">
                        <a href="https://www.google.com">
                            <div class="box-header"></div>

                            <div class="icon">
                                <img src="C:\Users\Bruno Rafael\Downloads\WebSite-estudo--main\Site\Home\img\csharp.png" />

                                <h1 class="Bloco-Title">
                                    C#
                                </h1>
                            </div>
                            <p class="Bloco-Body">
                                Conheça uma das principais linguagens POO do Mercado
                            </p>
                        </a>
                    </section>
                </div>

                <div class="form-element">
                    <section class="Adobe">
                        <a href="https://www.google.com">
                            <div class="box-header"></div>

                            <div class="icon">
                                <img src="C:\Users\Bruno Rafael\Downloads\WebSite-estudo--main\Site\Home\img\Adobe.png" />

                                <h1 class="Bloco-Title">
                                    Adobe Pack
                                </h1>
                            </div>
                            <p class="Bloco-Body">
                                Conheça mais sobre os principais softwares da empresa
                            </p>
                        </a>
                    </section>
                </div>

                <div class="form-element">
                    <section class="Redes">
                        <a href="https://www.google.com">
                            <div class="box-header"></div>

                            <div class="icon">
                                <img src="C:\Users\Bruno Rafael\Downloads\WebSite-estudo--main\Site\Home\img\Redes.png" />

                                <h1 class="Bloco-Title">
                                    Redes
                                </h1>
                            </div>
                            <p class="Bloco-Body">
                                Entenda como operam os sistemas modernos de redes de computadores
                            </p>
                        </a>
                    </section>
                </div>

                <div class="form-element">
                    <section class="Infraestrutura">
                        <a href="https://www.google.com">
                            <div class="box-header"></div>

                            <div class="icon">
                                <img src="C:\Users\Bruno Rafael\Downloads\WebSite-estudo--main\Site\Home\img\Infraestrutura.png" />

                                <h1 class="Bloco-Title">
                                    Infraestrutura
                                </h1>
                            </div>
                            <p class="Bloco-Body">
                                Aprenda a criar e a estabelecer uma infraestrutura de qualidade
                            </p>
                        </a>
                    </section>
                </div>

                <div class="form-element">
                    <section class="Infosec">
                        <a href="https://www.google.com">
                            <div class="box-header"></div>

                            <div class="icon">
                                <img src="C:\Users\Bruno Rafael\Downloads\WebSite-estudo--main\Site\Home\img\sec.png" />

                                <h1 class="Bloco-Title">
                                    Infosec
                                </h1>
                            </div>
                            <p class="Bloco-Body">
                                Entenda mais sobre os mecanismos de segurança modernos
                            </p>
                        </a>
                    </section>
                </div>

                <!--Fim da seção de blocos de curso-->
            </div>
        </div>

        <script>
          var x = document.getElementById("Login");
          var y = document.getElementById("Register");
          var z = document.getElementById("btn");
    
            
            function Register() {
                x.style.left = "-400px";
                y.style.left = "-28px";
                z.style.left = "110px";
            }

            function Login() {
                x.style.left = "-1px";
                y.style.left = "450px";
                z.style.left = "0";
            }


        </script>

    <?php 
    //Validar o clique no botão

    if(isset($_POST['user_id']))
    {
        $user_id    =   addslashes($_POST ['user_id']);
        $email      =   addslashes($_POST ['email']);
        $password   =   addslashes($_POST ['password']);

        
        $u = new Usuario;
        
        $u->conectar("dbLoginProjeto","dbprojetohtml.cegtexfrqfwu.sa-east-1.rds.amazonaws.com","usr_php_read","@fWGo@MrauLc");
        
        echo $u->msgErro;

        if($u->msgErro == "") //nenhum erro 
        {
            if($u->cadastrar($user_id,$email,$password))
            {
                echo "Cadastro Realizado com Sucesso! Acesse para entrar";
            }
            else
            {
                echo "E-mail já cadastrado!";
            }
        }
        else
        {
           echo "Erro: ".$u->msgErro; 
           echo "olá?";
        }
       
    }


    ?>
</body>
</html>