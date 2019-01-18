<? php
requiere_once("conexion.php");
class materia extends conexion{

	public function alta (){
		$materia = $_Post["materia"];
		$cantidad = $_Post["cantidad"];
		
		$this->sentencia = "INSERT INTO materia_comp VALUES (null, '$materia', '$cantidad');";
		$this->ejecutar_sentencia(); 



	}

	public function baja (){}

	public function consulta(){	}

	public function modificacion(){}

}

?>