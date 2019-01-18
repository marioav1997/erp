<? php
requiere_once("conexion.php");
class materia extends conexion{

	public function alta (){
		$nombre = $_Post["nombre"];
		$unidad = $_Post["unidad"];
		$existencia = $_Post["existencia"];
		$costo = $_Post["costo"];
		$proveedor = $_Post["proveedor"];
		$this->sentencia = "INSERT INTO materia VALUES (null, '$nombre', '$unidad','$existencia','$costo','proveedor');";
		$this->ejecutar_sentencia(); 



	}

	public function baja (){}

	public function consulta(){	}

	public function modificacion(){}

}

?>