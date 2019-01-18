<? php
requiere_once("conexion.php");
class materia extends conexion{

	public function alta (){
		$nombre = $_Post["nombre"];
		$marca = $_Post["marca"];
		$descripcion = $_Post["descripcion"];
		$existencia = $_Post["existencia"];
		$costo = $_Post["costo"];
		$empleado = $_Post["empleado"];
		$area = $_Post["area"];
		
		$this->sentencia = "INSERT INTO recurso VALUES (null, '$nombre', '$marca','$descripcion','$existencia','costo','empleado','area');";
		$this->ejecutar_sentencia(); 



	}

	public function baja (){}

	public function consulta(){	}

	public function modificacion(){}

}

?>