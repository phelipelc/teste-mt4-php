<?php
require_once "../Model/Dispositivos.php";

class DispositivosDao{
private $conn;
private $servername="localhost";
private $username="root";
private $password="";
private $dbname="MT4";

function __construct(){

$this->conn = new mysqli($this->servername, $this->username, $this->password, $this->dbname);

if ($this->conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

}

function getDispositivos(){

  $sql = "SELECT * FROM dispositivos";
  
  $result = $this->conn->query($sql);
  
   
	if ($result->num_rows > 0) 
	{
    // output data of each row
    
	$ArrayDispositivos = array();
	

	while($row = $result->fetch_assoc()) {
	
	$Dispositivos = new Dispositivos;
	
	$Dispositivos->setId($row["id"]);
	$Dispositivos->setHostname($row["hostname"]);
    $Dispositivos->setIP($row["ip"]);
	$Dispositivos->setTipo($row["tipo"]);
    $Dispositivos->setFabricante($row["fabricante"]);
	$Dispositivos->setModelo($row["modelo"]);
    $Dispositivos->setisAtivo(($row["isAtivo"])== "1" ? "Ativo" : "Desativado");
	$Dispositivos->setDataCadastro($row["dataCadastro"]);
    $ArrayDispositivos[] = $Dispositivos;
	
	
	}
	$this->conn->close();
	
return $ArrayDispositivos;

   
		
}
   return false;

}

function inserirDispositivos($dao){
   
    $list = new Dispositivos;
	$list->setHostname($dao["host"]);
	$list->setIP($dao["ip"]);
  	$list->setTipo($dao["tipo"]);
	$list->setFabricante($dao["fabricante"]);
	$list->setModelo($dao["modelo"]);
	$list->setisAtivo(($dao["status"])== "Ativo" ? 1 : 0);
	$list->setDataCadastro(date('Y-m-d'));


    $sql = "INSERT INTO dispositivos(hostname,ip,tipo,fabricante,modelo,isAtivo,dataCadastro)VALUES('{$list->getHostname()}','{$list->getIP()}','{$list->getTipo()}','{$list->getFabricante()}','{$list->getModelo()}','{$list->getisAtivo()}','{$list->getDataCadastro()}')";
	
	
	
    
if($insert = $this->conn->query($sql)==TRUE)
 {
	 
$this->conn->close();

header("Location: ../view/");

return TRUE;
 }
return FALSE;


}
}


?>