
$(document).ready(function(){
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
});