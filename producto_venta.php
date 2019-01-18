<? php
requiere_once("conexion.php");
class materia extends conexion{

	public function alta (){
		$producto = $_Post["producto"];
		$cantidad = $_Post["cantidad"];
		

		$this->sentencia = "INSERT INTO producto_venta VALUES (null, '$producto', '$cantidad');";
		$this->ejecutar_sentencia(); 



	}

	public function baja (){}

	public function consulta(){	}

	public function modificacion(){}

}

?>