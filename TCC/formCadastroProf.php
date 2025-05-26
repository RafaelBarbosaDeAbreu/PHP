<?php 
    require_once("conexao.class.php");
    require_once("tabela.class.php");
    require_once("tabelaDAO.class.php");
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro</title>
    <style>
       body {
            text-align: center;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            background-color: #303f9f;
            margin: 0;
            padding: 0;
            color: #fff;
        }

        h3 {
            font-size: 2.5em;
            margin: 0;
        }

        .inp {
            padding: 10px;
            font-size: 1.5em; 
        }

        fieldset {
            width: 400px;
            margin: 0 auto;
            text-align: center;
            border: 1px solid #ffa500;
            padding: 20px;
            margin-top: 20px;
        }

        label {
            font-size: 1.5em; 
            color: #fff;
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
            color: greenyellow;
            text-decoration: none;
            font-size: 1.2em; 
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
    <header>
    <h3>Preencha o campo abaixo:</h3>
    </header>
    <fieldset>
        <form method="POST">
            <label>Professor</label>
            <input type="text" name="prof" class="inp"><br><br>
            <label>Sala</label>
            <select name="sala">

                <option value="">Selecione a sala</option>

                <option value="Ausente">Ausente</option>

                <option value="1">Sala 01</option>
                <option value="2">Sala 02</option>
                <option value="3">Sala 03</option>
                <option value="4">Sala 04</option>
                <option value="5">Sala 05</option>
                <option value="6">Sala 06</option>
                <option value="7">Sala 07</option>
                <option value="8">Sala 08</option>
                <option value="9">Sala 09</option>
                <option value="10">Sala 10</option>
                <option value="11">Sala 11</option>
                <option value="12">Sala 12</option>
                <option value="13">Sala 13</option>
                <option value="14">Sala 14</option>
                <option value="15">Sala 15</option>
                <option value="16">Sala 16</option>
                <option value="NIT">Sala NIT</option>
                <option value="Manutenção">Sala de manutenção</option>
                <option value="Quadra">Quadra</option>

            </select><br><br>
            <label>Turma</label>
            <select name="turma">

                <option value="">Selecione a turma</option>

                <option value="Ausente">Ausente</option>

                <option value="11TI">11TI</option>
                <option value="12TI-A">12TI-A</option>
                <option value="12TI-B">12TI-B</option>
                <option value="13TI-A">13TI-A</option>
                <option value="13TI-B">13TI-B</option>

                <option value="21TI">21TI</option>
                <option value="22TI-A">22TI-A</option>
                <option value="22TI-B">22TI-B</option>
                <option value="23TI-A">23TI-A</option>
                <option value="23TI-B">23TI-B</option>

                <option value="31TI">31TI</option>
                <option value="32TI">32TI</option>
                <option value="33TI">33TI</option>

                <option value="41TI">41TI</option>
                <option value="42TI">42TI</option>
                <option value="43TI">43TI</option>


                <option value="12TR">12TR</option>
                <option value="13TR">13TR</option>
                <option value="23TR">23TR</option>
                <option value="33TR">33TR</option>


                <option value="13TE">13TE</option>
                <option value="14TE">14TE</option>
                <option value="23TE">23TE</option>
                <option value="33TE">33TE</option>
                <option value="43TE">43TE</option>

            </select><br><br>
            <label>Andar</label>
            <select name="andar" >
            <option value="">Selecione o andar</option>

                <option value="Ausente">Ausente</option>

                <option value="1">1° andar</option>
                <option value="2">2° andar</option>

            </select><br><br>
            <label>Matéria</label>
            <select name="materia">

                <option value="">Selecione a mateéria</option>

                <option value="Ausente">Ausente</option>

                <option value="µControladores e µProcessadores I">µControladores e µProcessadores I</option>
                <option value="µControladores e µProcessadores II">µControladores e µProcessadores II</option>
                <option value="Análise de Sistemas">Análise de Sistemas</option>
                <option value="Controladores Lógicos Programáveis">Controladores lógicos programáveis</option>
                <option value="Eletrônica Analógica I">Eletrônica analógica I</option>
                <option value="Eletrônica Analógica II">Eletrônica analógica II</option>
                <option value="Eletrônica Digital I">Eletrônica Digital I</option>
                <option value="Eletrônica Digital II">Eletrônica Digital II</option>
                <option value="Eletricidade I">Eletricidade I</option>
                <option value="Eletricidade II">Eletricidade II</option>
                <option value="Eletricidade III">Eletricidade III</option>
                <option value="Energias Renováveis">Energias Renováveis</option>
                <option value="Empreendedorismo">Empreendedorismo</option>
                <option value="Informática Básica">Informática Básica</option>
                <option value="Instalação e Manutenção de Computadores">Instalação e manutenção de computadores</option>
                <option value="Introdução à Orientação à Objetos">Introdução a orientação a objetos</option>
                <option value="Instrumentação industrial">Intrumentação Industrial</option>
                <option value="Inglês Técnico">Inglês Técnico</option>
                <option value="Lógica de Programação">Lógica de programação</option>
                <option value="Linguagem de Programação C">Linguagem de prohramação C</option>
                <option value="Linguagem web I">Linguagem Web I</option>
                <option value="Linguagem Web II">Linguagem Web II</option>
                <option value="Matemática Aplicada">Matemática Aplicada</option>
                <option value="Metodologia de Produção Textual">Metodologia de Produção Textual</option>
                <option value="Projeto de Banco de Dados">Projeto de Banco de Dados</option>
                <option value="Programação para Dispositivos Móveis">Programação para dispositivos móveis</option>
                <option value="Programação Orientada à Objetos">Programação orientada à objetos</option>
                <option value="Português Técnico">Português Técnico</option>
                <option value="Projeto Técnico">Porjeto Técnico</option>
                <option value="Redes de Computadores">Redes de computadores</option>
                <option value="Redes Industriais">Redes Industriais</option>
                <option value="Servidores Linux">Servidores Linux</option>
                <option value="Sistemas Operacionais">Sistemas Operacionais</option>
                <option value="Segurança de Redes">Segurança de Redes</option>
                <option value="Servidores Windows">Servidores Windows</option>
                <option value="Orientação para o Trabalho de Conclusão de Curso">Orientação para o Trabalho de Conclusão de Curso</option>

            </select><br><br>

            <label>Dia</label>
            <input type="date" name="dia" id="dia"><br><br>

            <label>Turno</label>
            <select name="turno">
                <option value="Manhã">Manhã</option>
                <option value="Tarde">Tarde</option>
                <option value="Noite">Noite</option>
             </select><br><br><br>


            <input type="submit" value="Salvar" id="salvar">
        </form>
    </fieldset>
    <?php 
        if($_SERVER['REQUEST_METHOD'] == 'POST'){
            $tabela = new Tabela();

            $tabela->setProfessor($_POST['prof']);
            $tabela->setSala($_POST['sala']);
            $tabela->setTurma($_POST['turma']);
            $tabela->setAndar($_POST['andar']);
            $tabela->setMateria($_POST['materia']);
            $tabela->setData_atualizacao($_POST['dia']);
            $tabela->setTurno($_POST['turno']);
            

            $dao = new TabelaDAO();

            if($dao->cadastrar($tabela) != NULL){
                echo "Cadastro de professor feito com sucesso!";
            }
        }
    ?>
    <br><br><br>
    <a href="pgADM.php">Voltar para a página inicial do administrador</a>
</body>
</html>