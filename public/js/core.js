$(function(){

	$('#btn').bind('click',function(){
	
		var msg = $('#msg').val();
		
		$.post('/fine',{ msg: msg }, function(data){
					
			alert(data);
		
		});
	
	});

});