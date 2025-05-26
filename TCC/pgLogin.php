<?php
require_once("conexao.class.php");
require_once("administrador.class.php");
require_once("tabelaDAO.class.php");
?>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <title>Verificação de Login</title>
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

        .login-container {
            margin: 20px;
            padding: 20px;
            background-color: #fff;
            border-radius: 5px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        input {
            padding: 10px;
            margin: 10px;
            width: 80%;
            font-size: 1.2em;
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

        .erro {
            color: red;
            font-size: 1.2em;
        }

        a {
            color: #ffa500;
            text-decoration: none;
            font-size: 1.9em;
        }

        a:hover {
            color: #555;
        }
    </style>
</head>
<body>
    <header>
        <h1>Informe seu login</h1>
    </header>
    <br><br><br><br>
    <div class="login-container">
        <form method="POST">
            <input type="text" name="login" placeholder="Login" /><br />
            <input type="password" name="senha" placeholder="Senha" /><br />
            <button class="button">Login</button>
            <?php
                if (isset($_POST['login']) && isset($_POST['senha'])) {
                    $login = $_POST['login'];
                    $senha = $_POST['senha'];

                    $dao = new TabelaDAO();

                    $senhaCorreta = $dao->validarLogin($login);

                    if (empty($login) || empty($senha)) {
                        echo "<p class='erro'>Os campos de login e/ou senha não podem estar vazios!</p>";
                    } else {
                        $dao = new TabelaDAO();

                        $senhaCorreta = $dao->validarLogin($login);

                        if (!empty($senhaCorreta) && password_verify($senha, $senhaCorreta)) {
                            header("Location: pgADM.php");
                        } else {
                            echo "<p class='erro'>Login ou senha incorretos!</p>";
                        }
                    }
                }
            ?>
        </form>
    </div>
    <br><br><br><br><br><br><br><br><br><br><br><br>
    <a href="index.php">Voltar para a página inicial</a>
</body>
</html>