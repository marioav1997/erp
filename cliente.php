<? php
requiere_once("conexion.php");
class materia extends conexion{

	public function alta (){
		$nombre = $_Post["nombre"];
		$social = $_Post["social"];
		$correo = $_Post["correo"];
		$direccion = $_Post["direccion"];
		$telefono = $_Post["telefono"];
		
		$this->sentencia = "INSERT INTO cliente VALUES (null, '$nombre', '$social','$correo','$direccion','telefono');";
		$this->ejecutar_sentencia(); 



	}

	public function baja (){}

	public function consulta(){	}

	public function modificacion(){}

}

?>