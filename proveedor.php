<? php
requiere_once("conexion.php");
class materia extends conexion{

	public function alta (){
		$nombre = $_Post["nombre"];
		$razonsocial = $_Post["razonsocial"];
		$correo = $_Post["correo"];
		$direccion = $_Post["direccion"];
		$telefono = $_Post["telefono"];
		
		
		
		$this->sentencia = "INSERT INTO proveedor VALUES (null, '$nombre', '$razonsocial','$correo','$direccion','telefono');";
		$this->ejecutar_sentencia(); 



	}

	public function baja (){}

	public function consulta(){	}

	public function modificacion(){}

}

?>