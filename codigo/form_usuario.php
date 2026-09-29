<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>        body{
            background-image: linear-gradient(45deg, cyan, yellow );
        }
        .tela{
            background-color: rgba(0, 0, 0, 0.8);
            position: absolute;
            top: 50%;
            left: 50%;
            padding: 50px;
            border-radius: 18px ;
            color: aliceblue;
        }
        input{
            padding: 15px;
            border: none;
            outline: none;
            border-radius: 5px;
            box-shadow: 5,5,5;
        }
        .oi{
            background-color: rgb(0, 255, 255);
            padding: 10px;
            width:100%;
        }</style>
</head>
<body>
    <form action="salvar_usuario.php" method="post">
       <div class="tela"> Nome de usuário: <br>
        <input type="text" name="nome"><br>
        
        Apelido: <br>
        <input type="text" name="apelido"><br>

        E-mail: <br>
        <input type="text" name="email"><br>

        Senha: <br>
        <input type="text" name="senha"><br>

        <input type="submit" value="Criar conta">
        </div>
    </form>
</body>
</html>