<!DOCTYPE html>

<html>
<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>MT4 |  ADMIN</title>

    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="font-awesome/css/font-awesome.css" rel="stylesheet">
    <link href="css/animate.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">
  
	

    <link href="css/plugins/dataTables/datatables.min.css" rel="stylesheet">

    
	
	
</head>

<body class="top-navigation">

    <div id="wrapper">
        <div id="page-wrapper" class="gray-bg">
        <div class="row border-bottom white-bg">
        <nav class="navbar navbar-static-top" role="navigation">
            <div class="navbar-header">
                <button aria-controls="navbar" aria-expanded="false" data-target="#navbar" data-toggle="collapse" class="navbar-toggle collapsed" type="button">
                    <i class="fa fa-reorder"></i>
                </button>
                <a href="#" class="navbar-brand">MT4</a>
            </div>
            <div class="navbar-collapse collapse" id="navbar">
                <ul class="nav navbar-nav">
                 
                     <li class="dropdown">
                        <a aria-expanded="false" role="button" href="#" class="dropdown-toggle" data-toggle="dropdown">Dispositivos</a>
                         </li>
                    <li class="dropdown">
                        <a aria-expanded="false" role="button" href="#" class="dropdown-toggle" data-toggle="dropdown"> Segurança <span class="caret"></span></a>
                        <ul role="menu" class="dropdown-menu">
                            <li><a href="">Criptografar texto</a></li>
                            <li><a href="">Descriptografar texto</a></li>
                            
                        </ul>
                    </li>
                   

                </ul>
                <ul class="nav navbar-top-links navbar-right">
                    <li>
                <span class="m-r-sm text-muted welcome-message">Bem-vindo "X" ao painel Admin.</span>
            </li>			
					<li>
                        <a href="login.html">
                            <i class="fa fa-sign-out"></i> Log out
                        </a>
                    </li>
                </ul>
            </div>
        </nav>
        </div>
        <div class="wrapper wrapper-content">
            <div class="container">
            <div class="row">
           
                <div class="row">

   
    

<div class="wrapper wrapper-content animated fadeInRight">
            <div class="row">
                <div class="col-lg-12">
                <div class="ibox float-e-margins">
                    <div class="ibox-title">
                        <h5>Dispositivos cadastrados</h5>
                       
                    </div>
					
					
                           					
                    
					<div class="ibox-content">
 <a data-toggle="modal" class="btn btn-primary" href="#modal-form">Cadastrar novo dispositivo</a>
                            
							
							  <div id="modal-form" class="modal fade" aria-hidden="true">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-body">
                                            <div class="row">
                                                <div class="col-sm-12"><h3 class="m-t-none m-b">Cadastro do dispositivo</h3>

                                                    <p>Informe os dados do dispositivo</p>

                                                    <form role="form" method="POST" action="../controller/DispositivosController.php">
                                                
							                         <div class="form-group" >
													 <label>Hostname</label> 
													 <input type="text" name="host" placeholder="Informe o hostname" class="form-control" required></div>
                                                        <div class="form-group"><label>IP</label> <input type="text" name="ip" placeholder="Informe o IP" class="form-control" required></div>
                                                        <div>
														<div class="form-group"><label>Tipo</label>
														<input type="tipo" placeholder="Informe o Tipo" name="tipo" class="form-control" required></div>
                                                        <div>
														<div class="form-group"><label>Fabricante</label> <input type="fabricante" name="fabricante" placeholder="Informe o Fabricante" class="form-control"required></div>
                                                        <div>
														<div class="form-group"><label>Modelo</label> 
														<input type="modelo" placeholder="Informe o Modelo" class="form-control" name="modelo" required></div>
                                                        <div>
														<div class="form-group">
														<label>Status</label>
														<select class="form-control m-b" name="status" required>
                                                        <option value="" disabled selected>Informe o status</option>
														 <option>Ativo</option>
                                                         <option>Desativado</option>
                                                         </select>
														 
														 
                                                            <button class="btn btn-sm btn-primary pull-left m-t-n-xs" type="submit"><strong>Salvar</strong></button>
                                                            
                                                        </div>
                                                    </form>
                                                </div>
                                                 </div> </div> </div> </div> </div> </div> </div> </div> </div> 
							
							
							
                        <div class="table-responsive">
                    <table class="table table-striped table-bordered table-hover dataTables-example" id="myTable">
                    <thead>
                    <tr>
                        <th>ID</th>
                        <th>Hostname</th>
                        <th>IP</th>
                        <th>Tipo</th>
                        <th>Fabricante</th>
						<th>Modelo</th>
						<th>Status</th>
                        <th>Data de Cadastro</th>
						<th>Opções</th>
					</tr>
                    </thead>
                    <tbody>
                    <tr class="gradeX">
            <?php 

require_once "../Controller/DispositivosController.php";

			    
				$obj = (new DispositivosController)->obterRegistros();		
				
					 
					  
					  
					 foreach($obj as $item){
					  
					  
					  echo "<td contenteditable='false'>".$item->Id."</td>";
					  echo "<td id='host' contenteditable='false'>".$item->Hostname."</td>";
					  echo "<td contenteditable='false'>".$item->IP."</td>";
					  echo "<td contenteditable='false'>".$item->Tipo."</td>";
					  echo "<td contenteditable='false'>".$item->Fabricante."</td>";
					  echo "<td contenteditable='false'>".$item->Modelo."</td>";
					  echo "<td contenteditable='false'>".$item->isAtivo."</td>";
					  echo "<td>".$item->DataCadastro."</td>
					  <td><button id='$item->Id' class='btn btn-sm btn-primary pull-left m-t-n-xs editbtn editbtn' name ='editar' type='submit' >Editar</button></td></tr>";
					  
					  
						
					  }

     ?>        
                    </tr>
                    </tbody>
                    
                    </table>
                        </div>

                    </div>
                </div>
            </div>
            </div>
        </div>
		
	
		
				   
				   
				   
        <div class="footer">
           <div >
                <strong>Copyright</strong> MT4 &copy; 2017
            </div>
        </div>

        </div>
        </div>

	<!-- Mainly scripts -->
    <script src="js/jquery-3.1.1.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/plugins/metisMenu/jquery.metisMenu.js"></script>
    <script src="js/plugins/slimscroll/jquery.slimscroll.min.js"></script>

    <script src="js/plugins/dataTables/datatables.min.js"></script>

    <!-- Custom and plugin javascript -->
    <script src="js/inspinia.js"></script>
    <script src="js/plugins/pace/pace.min.js"></script>

    <!-- Page-Level Scripts -->
	
	<script>
	

$('.editbtn').click(function(e) {
	var $clickedID = this.id;	
	
	var $this = $(this);

    var table = document.getElementsByTagName("table")[0];
    var tbody = table.getElementsByTagName("thread")[0];
   
    e = e || window.event;
    var data = [];
    var target = e.srcElement || e.target;
    while (target && target.nodeName !== "TR") {
        target = target.parentNode;
    }
    if (target) {
        var cells = target.getElementsByTagName("td");
        for (var i = 0; i < cells.length-1; i++) {
            var data = (cells[1].innerHTML);
			
			
        }
    }
      var celula = (data[1]);
	  

	var tds = $this.closest('tr').find('td').filter(function() {
	return $(this).find('.editbtn').length === 0;
		
	});
	if ($this.html() === 'Editar') {
		$this.html('Salvar');
        
	tds.prop('contenteditable', true);
	} else {
        $this.html('Editar');
		tds.prop('contenteditable', false);
			
             $.ajax({
             type: "POST",
             url: "./ajaxsubmit.php",
             data: celula,
             cache: false,
             success: function(result){
             alert(result);
			 
             } 
			
             });  
	  
	}
	
	});

	</script>
	
<script>

function funcao1(id){   
	
	var i;
	$cadeia = (document.getElementById("myTable").rows[id].innerHTML);
	for(i=0;i<8;i++){
    
    
	array = [];
	  
	$tamanho = ($cadeia.length);
	
	$busca = ($cadeia.indexOf('>'))+1;
	
	$valor = ($cadeia.substring($busca,$tamanho));
	
	
	$busca = ($valor.indexOf("</"))-1;
	
    $cadeia =($valor.substring($busca+6,$tamanho));
	
	$valor= ($valor.substring(0,$busca+1));
	
	array[i] = $valor;
	alert(array[i]);
	}
	
	
	
	var url = 'script.php?';
    //var query = 'buttonid=' + $val1;

    window.location.href = url + array;

	
	}
	
	



	</script>
	
	
	
	
	
	
	
    <script>
        $(document).ready(function(){
            $('.dataTables-example').DataTable({
                pageLength: 25,
                responsive: true,
                dom: '<"html5buttons"B>lTfgitp',
                buttons: [
                    { extend: 'copy'},
                    {extend: 'csv'},
                    {extend: 'excel', title: 'ExampleFile'},
                    {extend: 'pdf', title: 'ExampleFile'},

                    {extend: 'print',
                     customize: function (win){
                            $(win.document.body).addClass('white-bg');
                            $(win.document.body).css('font-size', '10px');

                            $(win.document.body).find('table')
                                    .addClass('compact')
                                    .css('font-size', 'inherit');
                    }
                    }
                ]

            });

        });

    </script>



</body>

</html>
