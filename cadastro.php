<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastramento</title>
</head>
<body>
        
        <style>
            .titulo{
                margin: 2%;
                background-color: white;
                height: 60px;
            }
            body{
                background-image: url(https://m.media-amazon.com/images/I/41hK5CjakuL._AC_SY355_.jpg);
            }

            .caixa{
                margin-top:10%;
                background-image: url(data:image/jpeg;base64,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);
                padding: 10%;
                border-radius: 10%;
                width: 400px;
                height: 100px;
                margin-left: 24%;
                border: 5px;
                border-style: solid;
                border-color: white;
            }
            .input-button{
                background-color: brown;
                width: 308px;
                border: 5px;
                border-style: solid;
                border-color: brown;
                
            }
            .input-nome{
                width: 300px;
            }
            .input-email{
                width: 300px;
            }
            .input-password{
                width: 300px;
            }
            .nome{
                color: red;
                background-color: green;

            }
            .email{
                color: red;
                background-color: green;
            }
            .senha{
                color: red;
                background-color: green;
            }

        </style>
        <h2 class="titulo" align="center"><strong>Cadastre suas informações</strong></h2>

        <form class="caixa" method="post" action="cadastra.php" align="center" >

            <div>
                <label class="nome">Nome:<input class="input-nome" type="text" name="nome" value=""  id="nome1" placeholder="Digite seu nome completo"></label>
                <br>
                <label class="email">Email:<input class="input-email" type="email" name="email" value="" id="email1" placeholder="Digite seu e-mail"></label>
                <br>
                <label class="senha">Senha:<input class="input-password" type="password" name="password" value="" id="password" placeholder="Digite sua senha"></label>
                <br>
                <br>
            </div>
            <input class="input-button" type="submit" name="Enviar" value="Verificar cadastro" onclick="cont()">

        </form>
    </body>

</html>