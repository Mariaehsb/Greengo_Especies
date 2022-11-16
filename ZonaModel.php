<?php 

    class ZonaModel {

        private $idZona;
        private string $nomeZona;
        private int $qntPlantas;
        private int $pontoZona;
        private int $pontoMin;

        public function setIdZona(int $idZona) {
            $this->idZona = $idZona;
        }

        public function getIdZona(): int {
            return $this->idZona;
        }
        public function setNomeZona(string $nomeZona){
            $this->nomeZona = $nomeZona;
            //return $this;
        }

        public function getNomeZona(): string{
            return $this->nomeZona;
        }

        public function setQntPlantas(int $qntPlantas){
            $this->qntPlantas = $qntPlantas;
        }

        public function getQntPlantas(): int{
            return $this->qntPlantas;
        }

        public function setPontoZona(int $pontoZona){
            $this->pontoZona = $pontoZona;
            //return $this;
        }
        
        public function getPontoZona(): int{
            return $this->pontoZona;
        }

        public function setPontoMin(int $pontoMin){
            $this->pontoMin = $pontoMin;
            //return $this;
        }
        
        public function getPontoMin(): int{
            return $this->pontoMin;
        }

    }