<!DOCTYPE html>
<html>
<head>
<link href="bootstrap/css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
<script src="http://code.jquery.com/jquery-1.10.1.min.js"></script>
<script src="http://code.jquery.com/jquery-migrate-1.2.1.min.js"></script>
<script type="text/javascript" src="bootstrap/js/bootstrap.js"></script>
<script type="text/javascript">
$(function(){
	$('#send').click(function() {
		var msg = $('input[name="message"]').val();
		if (msg!='') {
			$.post('/chat.php',{ msg: msg },function(){ $('input[name="message"]').val(''); });
		}
	});
	
	$('input[name="message"]').keypress(function(e){
		if (e.which==13) $('#send').click();
	});
		
	window.setInterval(function() {
		$.get('chat.txt',function(data){ console.log(data);
			$('#text').html(data);
		});
	},1000);
});
</script>
<style>
#window { width: 50%; border: 2px solid #eee; float: left; margin: 5px; }
#object { float: left; margin: 5px; }
#text { height: 297px; margin: 5px; }
#message { height: 50px; border-top: 1px solid #eee; }
#message input[name="message"] { width:80%; margin: 10px; } 
</style>
</head>
<body>
<div>
<<<<<<< HEAD
<div id="object"> &nbsp; </div>
=======
<div id="object">
</div>
>>>>>>> 95f9ee7951168e91e587b2b4cd6a9a28c5e421c8
<div id="window">
	<div id="text"></div>
	<div id="message">
		<input type="text" value="" name="message" /><button id="send" class="btn">send</button>
	</div>
</div>
</div>
</body>
</html>



