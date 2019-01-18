<? php
requiere_once("conexion.php");
class materia extends conexion{

	public function alta (){
		$nombre = $_Post["nombre"];
		$costo = $_Post["costo"];
		$unidad = $_Post["unidad"];
		$stock_minimo = $_Post["stock minimo"];
		$existencia = $_Post["existencia"];
		$codigo = $_Post["codigo"];
		$descripcion = $_Post["descripcion"];
		$almacen = $_Post["almacen"];
		$categoria = $_Post["categoria"];

		$this->sentencia = "INSERT INTO producto VALUES (null, '$nombre', '$costo','$unidad','$stock minimo','existencia','codigo','descripcion','almacen','categoria');";
		$this->ejecutar_sentencia(); 



	}

	public function baja (){}

	public function consulta(){	}

	public function modificacion(){}

}

?>