<?php
    session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <style>
        .myButton {
            -moz-box-shadow: inset 0px 1px 0px 0px #f5978e;
            -webkit-box-shadow: inset 0px 1px 0px 0px #f5978e;
            box-shadow: inset 0px 1px 0px 0px #f5978e;
            background: -webkit-gradient(linear, left top, left bottom, color-stop(0.05, #f24537), color-stop(1, #c62d1f));
            background: -moz-linear-gradient(top, #f24537 5%, #c62d1f 100%);
            background: -webkit-linear-gradient(top, #f24537 5%, #c62d1f 100%);
            background: -o-linear-gradient(top, #f24537 5%, #c62d1f 100%);
            background: -ms-linear-gradient(top, #f24537 5%, #c62d1f 100%);
            background: linear-gradient(to bottom, #f24537 5%, #c62d1f 100%);
            filter: progid:DXImageTransform.Microsoft.gradient(startColorstr='#f24537', endColorstr='#c62d1f', GradientType=0);
            background-color: #f24537;
            -moz-border-radius: 6px;
            -webkit-border-radius: 6px;
            border-radius: 6px;
            border: 1px solid #d02718;
            display: inline-block;
            cursor: pointer;
            color: #ffffff;
            font-family: Arial;
            font-size: 15px;
            font-weight: bold;
            padding: 6px 24px;
            text-decoration: none;
            text-shadow: 0px 1px 0px #810e05;
            margin: 3px 4px;
        }

        .myButton:hover {
            background: -webkit-gradient(linear, left top, left bottom, color-stop(0.05, #c62d1f), color-stop(1, #f24537));
            background: -moz-linear-gradient(top, #c62d1f 5%, #f24537 100%);
            background: -webkit-linear-gradient(top, #c62d1f 5%, #f24537 100%);
            background: -o-linear-gradient(top, #c62d1f 5%, #f24537 100%);
            background: -ms-linear-gradient(top, #c62d1f 5%, #f24537 100%);
            background: linear-gradient(to bottom, #c62d1f 5%, #f24537 100%);
            filter: progid:DXImageTransform.Microsoft.gradient(startColorstr='#c62d1f', endColorstr='#f24537', GradientType=0);
            background-color: #c62d1f;
        }

        .myButton:active {
            position: relative;
            top: 1px;
        }

        .input {
            padding: 5px;
            font-size: 16px;
            border-width: 1px;
            border-color: #CCCCCC;
            background-color: #FFFFFF;
            color: #000000;
            border-style: solid;
            border-radius: 0px;
            box-shadow: 0px 0px 5px rgba(66, 66, 66, .75);
            text-shadow: 0px 0px 5px rgba(66, 66, 66, .75);
            margin: 5px;
        }

        .input:focus {
            outline: none;
        }

        }

        ;
    </style>
</head>

<body style="display: flex; justify-content: center; margin-top:100px;">
    <div >
        <img src="redeSocial.jpg" />
    </div>
    <div style="margin-top:20px;">
        <div style="font-family: calibri; text-align:center; font-size:50px;   letter-spacing: 4px;">
            <h1 style="display:flex; flex-direction:row; justify-content:center;margin:0px;">
                <div style="color:black;">cada</div>
                <div style="color:red;">stro</div>
            </h1>
        </div>
        <form name="cadastro" method="POST" action="actionCadastro.php">
            <div style="width:500px; ">
                <div style="display: flex; flex-direction:row;">
                    <input class="input" style="width:48%;" type="text" name="nome" size="20" maxlength="15"
                        placeholder="Nome"required />
                    <input class="input" style="width:48%;" type="text" name="sobrenome" size="20" maxlength="50"
                        placeholder="Sobrenome" required/>
                </div>

                <div>
                 
                    <input class="input" style="width:95%;" type="text" name="email" size="" maxlength="80"
                        placeholder="E-mail"required />
                </div>

                <div>
                    <input class="input" type="text" name="login" size="" maxlength="20" placeholder="Login"required />
                </div>

                <div>
                    <input class="input" type="password" name="senha" size="" maxlength="20" placeholder="Senha" required/>
                    <input class="input" type="password" name="confirmarSenha" size="" maxlength="20"
                        placeholder="Confirmar Senha" required/>
                </div>

                <div>
                    <input class="input" type="date" name="nascimento" maxlength="20"
                        placeholder="Data de nascimento" required/>
                </div>
                <div style="display:flex; justify-content:center; flex-direction:row;">
                    <div>
                        <label style="font-size:30px; text-shadow: 0px 0px 5px rgba(66,66,66,.75); margin-right: 50px;">Sexo:</label>
                    </div>
                    <div style="margin:15px;">
                        <label style=" text-shadow: 0px 0px 5px rgba(66,66,66,.75);color:black;">Masculino:</label>
                        <input style ="margin:0px;"class="input" type="checkbox" name="sexoM" />
                    </div>
                    <div style="margin:15px;">
                        <label style=" text-shadow: 0px 0px 5px rgba(66,66,66,.75);color:red;">Feminino:</label>
                        <input style="margin:0px;" class="input" type="checkbox" name="sexoF" />
                    </div>
                </div>


                <div>
                    <input class="input" style="width: 34px;" type="text" name="ddd" maxlength="3" set="061"
                        placeholder="DDD" required/>
                    <input class="input" type="tel" name="celular" maxlength="9" placeholder="Nº Celular" required/>
                </div>

                <div>
                    <input class="input" name="cidade" placeholder="Cidade" maxlength="30" required/>
                </div>
                <span style="color:red;margin-left:0px;font-size:25px;">
                    <?php
                        if(isset($_GET['error_cadastro1'])){
                            $erro="Preencha todos os campos para se cadastar";
                            echo $erro;
                        }
                        if(isset($_GET['error_cadastro2'])){
                            $erro2="Usuario ja existe";
                            echo $erro2;
                        }

                    ?>
                </span>

                <div style=" display:flex; justify-content: center;margin:30px;">
                    <input style="" class="myButton" name="cadastrar" type="submit" value="Cadastrar" />
                </div>



            </div>
        </form>
    </div>
</body>

</html>