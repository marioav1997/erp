<? php
class conexion{
	private static$host = "localhost";
	private static$user = "root";
	private static$password = "";
	private static$base ="erp";
	private $sentencia;
	private $conexion;

	private functionbrir_conexion(){

		$this->conexion = new mysqli(self::$host,self::$uer;self::$password,self::$base);

	}
	private function  cerrar_conexion(){
		$this->conexion->close();

		}
		protected function ejecutar_sentencia (){
			$this->abrir_conexion();
			$this->conexion->query(this->sentencia);
			$this->cerrar_conexion();

			}
			protected function obtener_sentencia(){
				$this->abrir_conexion();
			}
		
?>