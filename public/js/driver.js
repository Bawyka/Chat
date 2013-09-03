$(function(){

	var startId, chatCycle,  dots = "search";

	// ���������� �����
	function StopSearch()
	{
	
		clearInterval(startId);
		
		$('#chat').text('');
		
		StartChat();
	
	}
	
	// ����
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
	
	// �������� ����
	function StartChat() {
	
		StopChat();
		chatCycle = setInterval(Cycle,1000);
	
	}
	
	// ������������� ����
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
	
	
	// ���� �����
	$('#next').bind('click',function(){
	
		startId = setInterval(next,1000);
			
		return false;	
	});
	
	// ���������� �����
	$('#stop').bind('click',function() {
	
		StopSearch();
		
		return false;	
	});
	
	
	
	// ������� �������� ���������
	function SendMessage()
	{
	
		msg = $('#msg').val();
		
		$('#msg').val('');
		$('#chat').append('<p>You: '+msg+'</p>');
				
		$.post('message',{ msg: msg });
	
	}
	
	
	
	// ������� ���������
	$('#send').bind('click',function(){
	
		SendMessage();
	
	});
	
	// � ��� ������� Enter
	$('#msg').keypress(function(e){
	
		if (e.which==13) {
		
			SendMessage();
		
		}
	
	});
	
	
	
});