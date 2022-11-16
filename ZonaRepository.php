<?php 
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

    require_once __DIR__ . "/../connection/Connection.php";
    require_once __DIR__ . "/../models/ZonaModel.php";

    class ZonaRepository {

        public PDO $conn;

        function __construct()
        {
            $this->conn = Connection::getConnection();
        }

        public function create(ZonaModel $zonas) {

            try {

                $query = "INSERT INTO zona (nomeZona,qntPlantas, pontoZona, pontoMin) VALUES (:nomeZona, :qntPlantas, :pontoZona, :pontoMin)";
                $prepare = $this->conn->prepare($query);
                $prepare->bindValue(":nomeZona", $zonas->getNomeZona());
                $prepare->bindValue(":qntPlantas", $zonas->getQntPlantas());
                $prepare->bindValue(":pontoZona", $zonas->getPontoZona());
                $prepare->bindValue(":pontoMin", $zonas->getPontoMin());
                $prepare->execute();

                return $this->conn->lastInsertId();
                
            } catch(Exception $e) {
                    print("Erro ao inserir no banco de dados");
            }
        }

        public function findZonas(): array {

            $table = $this->conn->query("SELECT * FROM zona");
            $zonas  = $table->fetchAll(PDO::FETCH_ASSOC);

            return $zonas;
        }

        public function findZonaByIdZona(int $idZona) {

            $query = "SELECT * FROM zona WHERE id.Zona = ?";
            
            $prepare = $this->conn->prepare($query);
            $prepare->bindParam(1, $idZona, PDO::PARAM_INT);

            if($prepare->execute()){
            
                $zonas  = $prepare->fetchObject("ZonaModel");
            
            } else {
                $zonas = null;
            }

            return $zonas;
        }

        public function update(ZonaModel $zona) {

            $query = "UPDATE zona SET qntPlantas = :qntPlantas WHERE idZona = :idZona";
            $prepare = $this->conn->prepare($query);
            $prepare->bindValue(":id", $zonas->getIdZona());
            $prepare->bindValue(":qntPlantas", $zonas->getQntPlantas());
            $prepare->execute();
        }

        public function deleteZonaByIdZona( int $idZona) {

            $query = "DELETE FROM zona WHERE idZona = :idZona";

            $prepare = $this->conn->prepare($query);
            $prepare->bindValue(":idZona", $idZona);
            $prepare->execute();
            
        }
    }
