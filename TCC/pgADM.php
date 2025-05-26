<?php 
    require_once("conexao.class.php");
    require_once("tabela.class.php");
    require_once("tabelaDAO.class.php");
?>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <title>Busca de professores</title>
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

        h1 {
            font-size: 2.5em;
            margin: 0;
        }

        .button {
            background-color: #ffa500;
            border: none;
            padding: 15px 32px;
            text-align: center;
            text-decoration: none;
            display: inline-block;
            font-size: 1.9em;
            margin: 4px 2px;
            cursor: pointer;
            font-family: 'Courier New', Courier, monospace;
            font-style: oblique;
            color: #fff;
        }

        .button:hover {
            background-color: #555;
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
    </style>
</head>
<body>
    <header>
        <h1>Selecione o que você deseja fazer:</h1>
    </header>
    <br><br><br><br><br><br><br><br><br><br>
    <a href="formCadastroProf.php" class="button">Cadastrar novos professores</a>
    <a href="pgTabelaAdmin.php" class="button">Alterações na tabela</a><br>
    <a href="formCadastrarADM.php" class="button">Cadastrar novo administrador</a>
    <br><br><br><br><br><br><br><br><br><br><br><br>
    <a href="index.php" style=" font-size: 26px">Voltar para a página inicial</a>
</body>
</html>
