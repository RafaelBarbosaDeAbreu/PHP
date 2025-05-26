<?php
    require_once("tabela.class.php");
    require_once("tabelaDAO.class.php");
    require_once("conexao.class.php");

    if(isset($_GET['id_tabela'])){
        $dao = new TabelaDAO();

        if($dao->deletar($_GET['id_tabela']) == "true"){
            echo "<p>Cadastro excluído com sucesso!</p>";
        }else{
            echo "Erro ao excluir cadastro!";
        }
    }
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <style>
       body {
            text-align: center;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            background-color: #303f9f;
            margin: 0;
            padding: 0;
            color: #fff;
        }

        .button {
            background-color: #ffa500;
            border: none;
            padding: 15px 32px;
            text-align: center;
            text-decoration: none;
            display: inline-block;
            font-size: 1.5em; 
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
            font-size: 35px; 
        }

        th, td {
            padding: 20px;
            text-align: center;
        }

        label {
            font-size: 2em; 
            color: #fff;
        }

        input[type="date"],
        select {
            padding: 10px;
            font-size: 1.5em; 
        }

        form {
            margin-top: 20px;
        }

        input[type="submit"] {
            padding: 15px 32px;
            font-size: 1.5em; 
            cursor: pointer;
            background-color: #ffa500;
            border: none;
            color: #fff;
        }

        input[type="submit"]:hover {
            background-color: #555;
        }

        a {
            color: #ffa500;
            text-decoration: none;
            font-family: 'Courier New', Courier, monospace;
            font-style: oblique;
            font-size: 30px; 
        }

        a:hover {
            color: #555;
        }
        header {
            padding: 20px;
            background-color: #ffa500;
            color: #fff;
            font-size: 130%;
        }
        
    </style>    
</head>
<body>
    <header><h1 style="font-size: 45px">Insira a data que deseja buscar</h1></header>
    <form method="POST" style="">
        <label>Dia</label>
        <input type="date" name="data" id="data">
        <label>Turno</label>
        <select name="turno" id="turno">
            <option value="Manhã">Manhã</option>
            <option value="Tarde">Tarde</option>
            <option value="Noite">Noite</option>
        </select>

        <input type="submit" value="Localizar">
    </form>
    <br><br><br>

<?php 
    if($_SERVER['REQUEST_METHOD'] == 'POST'){
        $dao = new TabelaDAO();
        $table = new Tabela();

        $table->setData_atualizacao($_POST['data']);
        $table->setTurno($_POST['turno']);

        if($lista = $dao->buscaProf($table)){
            echo "<table border=1>
            <tr>
                <th>Código</th>
                <th>Professor</th>
                <th>Sala</th>
                <th>Turma</th>
                <th>Andar</th>
                <th>Matéria</th>
                <th>Última data de atualização</th>
                <th>Turno</th>
                <th></th>
                <th></th>
            </tr>";
            foreach($lista as $l){
                echo "
                    <tr>
                        <td>{$l['id_tabela']}</td>
                        <td>{$l['professor']}</td>
                        <td>{$l['sala']}</td>
                        <td>{$l['turma']}</td>
                        <td>{$l['andar']}</td>
                        <td>{$l['materia']}</td>
                        <td>{$l['data_atualizacao']}</td>
                        <td>{$l['turno']}</td>
                        <td><a href = 'formAtualizar.php?cod={$l['id_tabela']}'>Alterar</a></td>
                        <td><a href ='?id_tabela={$l['id_tabela']}'>Excluir</a> </td>
                
                ";
                
            }
        }else{
            echo "Nenhum cadastro encontrado!";
        }
    }
    echo "</table>";
?>
<br><br>
<a href="pgADM.php" >Voltar para a página inicial do administrador</a>
</body>
</html>