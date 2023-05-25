<?php
    require_once("db.php");
    class Config{
        private $id;
        private $NOMBRES;
        private $DIRECCION;
        private $LOGROS;
        private $INGLES;
        private $SER;
        private $SKILLS;
        private $REVIEW;
        private $ESPECIALIDAD;
        protected $dbCnx;

        public function __construct($id=0,$NOMBRES="",$DIRECCION="", $LOGROS="", $INGLES="", $SER="", $SKILLS="", $REVIEW="", $ESPECIALIDAD=""){
            $this->id = $id;
            $this->NOMBRES = $NOMBRES;
            $this->DIRECCION = $DIRECCION;
            $this->LOGROS = $LOGROS;
            $this->INGLES = $INGLES;
            $this->SER = $SER;
            $this->SKILLS = $SKILLS;
            $this->REVIEW = $REVIEW;
            $this->ESPECIALIDAD = $ESPECIALIDAD;
            $this->dbCnx = new PDO(DB_TYPE . ":host=" . DB_HOST . ";dbname=" . DB_NAME, DB_USER, DB_PWD, [PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC]);
        }

        /* public function get($id,$NOMBRES,$DIRECCION,$LOGROS){
            return $this->id . $this->NOMBRES. $this->DIRECCION . $this->LOGROS;
        }

        public function set($id,$NOMBRES,$DIRECCION,$LOGROS){
            $this->id = $id .
            $this->NOMBRES = $NOMBRES .
            $this->DIRECCION = $DIRECCION .
            $this->LOGROS = $LOGROS;
        } */

        public function setId($id){
            $this->id = $id;
        }
        public function getId($id){
            $this->id;
        }

        public function setNombres($NOMBRES){
            $this->NOMBRES = $NOMBRES;
        }
        public function getNombres($NOMBRES){
            $this->NOMBRES;
        }

        public function setDireccion($DIRECCION){
            $this->DIRECCION = $DIRECCION;
        }
        public function getDireccion($DIRECCION){
            $this->DIRECCION;
        }

        public function setLogros($LOGROS){
            $this->LOGROS = $LOGROS;
        }
        public function getLogros($LOGROS){
            $this->LOGROS;
        }

        public function setIngles($INGLES){
            $this->INGLES = $INGLES;
        }
        public function getIngles($INGLES){
            $this->INGLES;
        }

        public function setSer($SER){
            $this->SER = $SER;
        }
        public function getSer($SER){
            $this->SER;
        }

        public function setSkills($SKILLS){
            $this->SKILLS = $SKILLS;
        }
        public function getSkills($SKILLS){
            $this->SKILLS;
        }

        public function setReview($REVIEW){
            $this->REVIEW = $REVIEW;
        }
        public function getReview($REVIEW){
            $this->REVIEW;
        }

        public function setEspecialidad($ESPECIALIDAD){
            $this->ESPECIALIDAD = $ESPECIALIDAD;
        }
        public function getEspecialidad($ESPECIALIDAD){
            $this->ESPECIALIDAD;
        }

        public function insertData(){
            try {
                $stm = $this->dbCnx->prepare("INSERT INTO campers (NOMBRES,DIRECCION,LOGROS,INGLES,SER,SKILLS,REVIEW,ESPECIALIDAD) VALUES (?,?,?,?,?,?,?,?)");
                $stm->execute([$this->NOMBRES,$this->DIRECCION,$this->LOGROS,$this->INGLES,$this->SER,$this->SKILLS,$this->REVIEW,$this->ESPECIALIDAD]);
            } catch (Exception $e) {
                return $e->getMessage();
            }
        }

        public function selectAll(){
            try {
                $stm = $this->dbCnx->prepare("SELECT * FROM campers");
                $stm -> execute();
                return $stm -> fetchAll();
            } catch (Exception $e) {
                return $e -> getMessage();
            }
        }

        public function deleteData(){
            try {
                $stm = $this->dbCnx->prepare("DELETE FROM campers WHERE id=?");
                $stm->execute([$this->id]);
                return $stm->fetchAll();
                echo "<script> alert('Borrado Exitosamente'); document.location='estudiantes.php' </script>";
            } catch (Exception $e) {
                return $e -> getMessage();
            }
        }

        public function selectOne(){
            try {
                $stm = $this->dbCnx->prepare("SELECT * FROM campers WHERE id=?");
                $stm->execute([$this->id]);
                return $stm->fetchAll();
            } catch (Exception $e) {
                return $e -> getMessage();
            }
        }

        public function update(){
            try {
                $stm = $this->dbCnx->prepare("UPDATE campers SET NOMBRES=?,DIRECCION=?,LOGROS=?,INGLES=?,SER=?,SKILLS=?,REVIEW=?,ESPECIALIDAD=? WHERE id=?");
                $stm->execute([$this->NOMBRES,$this->DIRECCION,$this->LOGROS,$this->INGLES,$this->SER,$this->SKILLS,$this->REVIEW,$this->ESPECIALIDAD,$this->id]);
                return $stm->fetchAll();
            } catch (Exception $e) {
                return $e -> getMessage();
            }
        }
        
    }
?>