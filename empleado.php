<? php
requiere_once("conexion.php");
class materia extends conexion{

	public function alta (){
		$nombre = $_Post["nombre"];
		$apellidop = $_Post["apellidop"];
		$apellidom = $_Post["apellidom"];
		$area = $_Post["area"];
		$puesto = $_Post["puesto"];
		$salario = $_Post["salario"];
		$correo = $_Post["correo"];
		$direccion = $_Post["direccion"];
		$fechaN = $_Post["fechaN"];
		$curp = $_Post["curp"];
		$telefono = $_Post["telefono"];
		$estado_civil = $_Post["estado_civil"];
		$escolaridad = $_Post["escolaridad"];
		$cp = $_Post["cp"];
		
		
		$this->sentencia = "INSERT INTO empleado VALUES (null, '$nombre', '$apellidop','$apellidom','$area','puesto','salario','correo','direccion','fechaN','curp','telefono','estado_civil','escolaridad','cp');";
		$this->ejecutar_sentencia(); 



	}

	public function baja (){}

	public function consulta(){	}

	public function modificacion(){}

}

?>