<?php 

require_once "../Dao/DispositivosDao.php";

class DispositivosController{
 
 

  function obterRegistros()
  {
	 
    return (new DispositivosDao())->getDispositivos();
  }

  function gravarDispositivos($data)
  { 

  return (new DispositivosDao())->inserirDispositivos($data);
  
  }
}
if($_SERVER['REQUEST_METHOD'] == 'POST')
{   
    $array = new DispositivosController;
	$array->gravarDispositivos($_POST);
}
		
  
  ?>