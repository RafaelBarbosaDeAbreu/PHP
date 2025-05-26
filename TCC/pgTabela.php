<?php
    require_once("tabela.class.php");
    require_once("tabelaDAO.class.php");
    require_once("conexao.class.php");

    
?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <title>Pesquisar Professores</title>
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
            text-align: left;
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
        table{
            width: 920px;
        }
        th, td{
            height: 28px;
            width: 50px;
        }
    
    </style>
</head>
<body>
    <header>
    <h3>Selecione a data em que deseja localizar o professor</h3>
</header>
<br><br>
    <fieldset style="width: 700px">
    <form method="POST">
        <label>Dia</label>
        <input type="date" name="data"   id="data">
        <label>Turno</label>
        <select name="turno">
            <option value="Manhã">Manhã</option>
            <option value="Tarde">Tarde</option>
            <option value="Noite">Noite</option>
        </select>

        <input type="submit" value="Localizar" class="button">
    </form>
    </fieldset>

<?php
    if($_SERVER['REQUEST_METHOD'] == 'POST'){
        $dao = new TabelaDAO();
        $table = new Tabela();

        $table->setData_atualizacao($_POST['data']);
        $table->setTurno($_POST['turno']);

        if($lista = $dao->buscaProf($table)){
            echo "<table border=1>
            <tr>
                <th>Professor</th>
                <th>Sala</th>
                <th>Turma</th>
                <th>Andar</th>
                <th>Matéria</th>
                <th>Última data de atualização</th>
                <th>Turno</th>
               
            </tr>";
            foreach($lista as $l){
                echo "
                    <tr>
                        <td>{$l['professor']}</td>
                        <td>{$l['sala']}</td>
                        <td>{$l['turma']}</td>
                        <td>{$l['andar']}</td>
                        <td>{$l['materia']}</td>
                        <td>{$l['data_atualizacao']}</td>
                        <td>{$l['turno']}</td>
                        
                
                ";
                
            }
        }else{
            echo "<p id= 'aviso'>Nenhum cadastro encontrado!</p>";
        }
    }
    echo "</table>";
?>

<br>
<a href="index.php" style="color: #ffa500">Voltar para a página inicial</a>
 </body>
</html>