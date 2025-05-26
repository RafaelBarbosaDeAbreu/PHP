<?php 
    require_once("conexao.class.php");
    require_once("administrador.class.php");
    require_once("tabelaDAO.class.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>Cadastrar administrador</title>
    <style>
        body {
            text-align: center;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            background-color: #303f9f;
            margin: 0;
            padding: 0;
            color: #fff;
        }

        header {
            padding: 20px;
            background-color: #ffa500;
            color: #fff;
            font-size: 130%;
        }

        h3 {
            font-size: 2.5em;
            margin: 0;
        }

        h5 {
            font-size: 1.2em;
            margin: 10px 0;
        }

        .button {
            background-color: #ffa500;
            border: none;
            padding: 15px 32px;
            text-align: center;
            text-decoration: none;
            display: inline-block;
            font-size: 1.2em;
            margin: 4px 2px;
            cursor: pointer;
            font-family: 'Courier New', Courier, monospace;
            font-style: oblique;
            color: #fff;
        }

        .button:hover {
            background-color: #555;
        }

        table, th, td {
            border: 1px solid #ffa500;
            margin: 20px auto;
            border-collapse: collapse;
            width: 80%;
            font-size: 30px;
        }

        th, td {
            padding: 20px;
            text-align: center;
        }

        #aviso {
            text-align: center;
            color: red;
            font-size: 1.9em;
        }

        a {
            color: #ffa500;
            text-decoration: none;
            font-family: 'Courier New', Courier, monospace;
            font-style: oblique;
            font-size: 25px;
        }

        a:hover {
            color: #555;
        }

        label {
            font-size: 1.5em;
        }

        form {
            margin: 20px;
        }

        input {
            padding: 10px;
            margin: 10px;
            font-size: 1em;
        }

        #enviar {
            background-color: #ffa500;
            border: none;
            padding: 15px 32px;
            text-align: center;
            text-decoration: none;
            display: inline-block;
            font-size: 1.2em;
            cursor: pointer;
            font-family: 'Courier New', Courier, monospace;
            font-style: oblique;
            color: #fff;
        }

        #enviar:hover {
            background-color: #555;
        }
    </style>
</head>
<body>
    <header>
        <h3>Cadastrar Administrador</h3>
    </header>

    <form method="POST">
        <label for="login">Informe o nome para ser cadastrado para o administrador:</label>
        <input type="text" name="login" id="login">
        <br>
        <label for="senha">Informe a senha a ser utilizada pelo administrador:</label>
        <input type="password" name="senha" id="senha">
        <br>
        <input type="submit" id="enviar" value="Cadastrar">
    </form>

    <?php
    if($_SERVER['REQUEST_METHOD'] == 'POST'){
        $administrador = new Administrador();
        $administrador->setLogin($_POST['login']);

        $senha = $_POST['senha'];
        $senhaCriptografada = password_hash($senha, PASSWORD_DEFAULT);

        if(empty($_POST['login']) || empty($_POST['senha'])){
            echo "<p id='aviso'>Os campos não podem estar vazios</p>";
        } else {
            $administrador->setSenha($senhaCriptografada);
            $dao = new tabelaDAO();
            if($dao->criaADM($administrador) != NULL){
                echo "<p>Cadastro efetuado com sucesso!</p>";
            }
        }
    }
    ?>

    <br><br><br><br><br><br><br><br><br><br><br><br><br>
    <a href="pgADM.php" class="button">Voltar para a página inicial do administrador</a>
</body>
</html>
