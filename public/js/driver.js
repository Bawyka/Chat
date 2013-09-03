$(function(){

	var startId, chatCycle,  dots = "search";

	// Прекратить поиск
	function StopSearch()
	{
	
		clearInterval(startId);
		
		$('#chat').text('');
		
		StartChat();
	
	}
	
	// Цикл
	function Cycle()
	{
	
		$.ajax({
		
			url: 'chat',
			type: 'post',
			data: { func: "chat" },
			success: function(data) {
				
				if (data!='') {
				
					$('#chat').append('<p>He: '+data+'</p>');
				
				}
				
			}
		
		});
	
	}
	
	// Включаем цикл
	function StartChat() {
	
		StopChat();
		chatCycle = setInterval(Cycle,1000);
	
	}
	
	// Останавливаем цикл
	function StopChat() {
	
		clearInterval(chatCycle);
	
	}
	
	
	// find next
	function next() {

		$.ajax({
			url: "next",
			type: "post",
			data: { func: "next" },
			success: function(data){ console.log(data);
			
				if (data=="0") {
					
					$('#chat').text(dots);
					
					dots+=".";
					if (dots=="search....") dots="search";
					
				}
				else
				{
					StopSearch();
				}

			}
		});
		
	}
	
	
	// клик далее
	$('#next').bind('click',function(){
	
		startId = setInterval(next,1000);
			
		return false;	
	});
	
	// Остановить поиск
	$('#stop').bind('click',function() {
	
		StopSearch();
		
		return false;	
	});
	
	
	
	// функция отправки сообщения
	function SendMessage()
	{
	
		msg = $('#msg').val();
		
		$('#msg').val('');
		$('#chat').append('<p>You: '+msg+'</p>');
				
		$.post('message',{ msg: msg });
	
	}
	
	
	
	// Послать сообщение
	$('#send').bind('click',function(){
	
		SendMessage();
	
	});
	
	// и при нажатии Enter
	$('#msg').keypress(function(e){
	
		if (e.which==13) {
		
			SendMessage();
		
		}
	
	});
	
	
	
});