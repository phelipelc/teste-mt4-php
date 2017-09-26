<?php

class Dispositivos{
	public $Id;
	public $Hostname;
	public $IP;
	public $Tipo;
	public $Fabricante;
	public $Modelo;
	public $isAtivo;
	public $DataCadastro;


 public function setId($Id){
  $this->Id = $Id;
 }
  public function getId(){
   return $this->Id;
}
	
 public function setHostname($Hostname){
  $this->Hostname = $Hostname;
 }
  public function getHostname(){
   return $this->Hostname;
}
 public function setIP($IP){
  $this->IP = $IP;
 }
  public function getIP(){
   return $this->IP;
}

 public function setTipo($Tipo){
  $this->Tipo = $Tipo;
 }
  public function getTipo(){
   return $this->Tipo;
}
 public function setFabricante($Fabricante){
  $this->Fabricante = $Fabricante;
 }
  public function getFabricante(){
   return $this->Fabricante;
}
 public function setModelo($Modelo){
  $this->Modelo = $Modelo;
 }
  public function getModelo(){
   return $this->Modelo;
}
 public function setisAtivo($isAtivo){
  $this->isAtivo = $isAtivo;
 }
  public function getisAtivo(){
   return $this->isAtivo;
}
 public function setDataCadastro($DataCadastro){
  $this->DataCadastro = $DataCadastro;
 }
  public function getDataCadastro(){
   return $this->DataCadastro;
}


}

?>