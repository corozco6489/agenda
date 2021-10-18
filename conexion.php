<?php 
class ConectarDB{
	private $server = "mysql:host=sql306.epizy.com; dbname=epiz_29744482_agenda";
	
	private $user="epiz_29744482";
	private $pass="RDWAJlDAJAcD8S";
	private $options = array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION, PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC);
	protected $conn;
	public function open(){
		try {
			$this->conn = new PDO($this->server, $this->user, $this->pass,$this->options);
			return $this->conn;
		} 
		catch (PDOPException $e){
		echo "Ocurrio un problema con la conexion: ".$e->getMessage();
		
		}

	}
	public function close(){
		$this->conn = null;
	}

}

?>