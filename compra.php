<? php
requiere_once("conexion.php");
class materia extends conexion{

	public function alta (){
		$proveedor = $_Post["proveedor"];
		$fecha = $_Post["fecha"];
		$total = $_Post["total"];
		
		
		
		$this->sentencia = "INSERT INTO compra VALUES (null, '$proveedor', '$fecha','$total');";
		$this->ejecutar_sentencia(); 



	}

	public function baja (){}

	public function consulta(){	}

	public function modificacion(){}

}

?>