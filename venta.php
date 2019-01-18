<? php
requiere_once("conexion.php");
class materia extends conexion{

	public function alta (){
		$cliente = $_Post["cliente"];
		$fecha = $_Post["fecha"];
		$total = $_Post["total"];
		$empleado = $_Post["empleado"];
		
		
		
		$this->sentencia = "INSERT INTO venta VALUES (null, '$cliente', '$fecha','$total','$empleado');";
		$this->ejecutar_sentencia(); 



	}

	public function baja (){}

	public function consulta(){	}

	public function modificacion(){}

}

?>