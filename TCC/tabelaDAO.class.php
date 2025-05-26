<?php
    class tabelaDAO{
        public function cadastrar($tabela){
            try{
                $sql= "INSERT INTO tabela(professor, sala, turma, andar, materia, data_atualizacao, turno) VALUES(:professor, :sala, :turma, :andar, :materia, :data_atualizacao, :turno)";
                $p_sql = Conexao::getInstance()->prepare($sql);
                $p_sql->bindValue(':professor', $tabela->getProfessor());
                $p_sql->bindValue(":sala", $tabela->getSala());
                $p_sql->bindValue(":turma", $tabela->getTurma());
                $p_sql->bindValue(":andar", $tabela->getAndar());
                $p_sql->bindValue(":materia", $tabela->getMateria());
                $p_sql->bindValue(":data_atualizacao", $tabela->getData_atualizacao());
                $p_sql->bindValue(":turno", $tabela->getTurno());
            
                return $p_sql->execute();
            }catch(Exception $e){
                echo "Erro ao inserir novo professor: ".$e->getMessage();
            }
        }
        public function atualizar($tabela)
        {
            try {
                $sql = "UPDATE tabela SET sala = :sala, andar = :andar, turma = :turma, materia = :materia, data_atualizacao = :data_atualizacao, turno = :turno WHERE id_tabela = :id_tabela";
                $p_sql = Conexao::getInstance()->prepare($sql);
                $p_sql->bindValue(':sala', $tabela->getSala());
                $p_sql->bindValue(':andar', $tabela->getAndar());
                $p_sql->bindValue(':turma', $tabela->getTurma());
                $p_sql->bindValue(':materia', $tabela->getMateria());
                $p_sql->bindValue(':data_atualizacao', $tabela->getData_atualizacao());
                $p_sql->bindValue(':turno', $tabela->getTurno()); 
                $p_sql->bindValue(':id_tabela', $tabela->getId_tabela());
                $p_sql->execute();
    
                return $p_sql->execute();
            } catch (Exception $e) {
                echo "Erro ao fazer a atualização de dados: " . $e->getMessage();
            }
        }
        public function deletar($id_tabela) {
            try {
                $sql = "DELETE FROM tabela WHERE id_tabela = :id_tabela";
                $p_sql = Conexao::getInstance()->prepare($sql);
                $p_sql->bindValue(':id_tabela', $id_tabela);
                $p_sql->execute();
    
                return true; 
            } catch (Exception $e) {
                echo "Erro ao excluir o registro: " . $e->getMessage();
                return false; 
            }
        }
        public function criaADM($administrador){
            try {
                $sql = "INSERT INTO administrador(login, senha) VALUES(:login, :senha)";
                $p_sql = Conexao::getInstance()->prepare($sql);
                $p_sql->bindValue(':login', $administrador->getLogin());
                $p_sql->bindValue(':senha', $administrador->getSenha());
        
                return $p_sql->execute();
            } catch (Exception $e) {
                echo "Erro ao cadastrar administrador: " . $e->getMessage();
            }
        }
        public function validarLogin($login){
            try {
                $sql = "SELECT senha FROM administrador WHERE login = :login LIMIT 1";
                $p_sql = Conexao::getInstance()->prepare($sql);
    
                $p_sql->bindValue(':login', $login);
                $p_sql->execute();
    
                if ($p_sql->rowCount() > 0) {
                    $row = $p_sql->fetch(PDO::FETCH_ASSOC);
    
                    return $row['senha'];
                }
            } catch (Exception $e) {
                echo "Erro ao obter a senha: " . $e->getMessage();
            }
    
            return null;
        }
        
        public function buscaProf($table) {
            try {
                $sql = "SELECT * FROM tabela WHERE data_atualizacao = :dataAtt AND turno LIKE CONCAT('%', :turno, '%')";
                $p_sql = Conexao::getInstance()->prepare($sql);
                $p_sql->bindValue(":dataAtt", $table->getData_atualizacao());
                $p_sql->bindValue(":turno", $table->getTurno());
        
                $p_sql->execute();
        
                $lista = $p_sql->fetchAll(PDO::FETCH_ASSOC);
                return $lista;
            } catch(Exception $e) {
                echo "Erro ao buscar por datas: ".$e->getMessage();
            }
        }
        public function buscaId($id){
            try{
                $sql = "SELECT * FROM tabela WHERE id_tabela = :id";
                $p_sql = Conexao::getInstance()->prepare($sql);

                $p_sql->bindValue(":id", "$id");

                $p_sql->execute();

                $lista = $p_sql->fetchAll(PDO::FETCH_ASSOC);
                return $lista;
            } catch(Exception $e){
                echo "Erro na busca de Professores: ".$e->getMessage();
            }
        }
       
    }

?>