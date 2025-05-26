<?php
    class tabela{
        private $id_tabela;
        private $sala;
        private $professor;
        private $andar;
        private $turma;
        private $materia;
        private $data_atualizacao;
        private $turno;

        //setters sei lá pq to colocando isso mas tá aí
        public function setId_tabela($id_tabela){
            $this->id_tabela = $id_tabela;
        }
        public function setSala($sala){
            $this->sala = $sala;
        }
        public function setProfessor($professor){
            $this->professor = $professor;
        }
        public function setAndar($andar){
            $this->andar = $andar;
        }
        public function setTurma($turma){
            $this->turma = $turma;
        }
        public function setMateria($materia){
            $this->materia = $materia;
        }
        public function setData_atualizacao($data_atualizacao){
            $this->data_atualizacao = $data_atualizacao;
        }
        public function setTurno($turno){
            $this->turno = $turno;
        }

        //getters
        public function getId_tabela(){
            return $this->id_tabela;
        }
        public function getSala(){
            return $this->sala;
        }
        public function getProfessor(){
            return $this->professor;
        }

        public function getAndar(){
            return $this->andar;
        }
        public function getTurma(){
            return $this->turma;
        }
        public function getMateria(){
            return $this->materia;
        }
        public function getData_atualizacao(){
            return $this->data_atualizacao;
        }
        public function getTurno(){
            return $this->turno;
        }
    }
?>