

<?php 


class personas_model{


    private $db;
    private $personas;

    public function __construct() {

        $this->db = Conectar::conexion();
        $this->personas=array();
        
    }
    public function get_personas(){
        $con=" SELECT *FROM personas WHERE estado =1 ";
        $consulta=$this->db->query($con);
        while ($filas=$consulta->fetch_assoc()) {

            $this->personas[]=$filas;
        }
        return $this->personas;
    }
}



?>