<!DOCTYPE html>
<html>
<head>
<title>Chat (Live) - Customer Module</title>
<link type="text/css" rel="stylesheet" href="style.css" />
</head>
<body>

<?php 

if(isset($_GET['logout']))
{
	// Simple exit message
	$fp = fopen("log.html",'a');
	fwrite($fp, "<div class='msgIn'>
	<i>User ". $_SESSION['name'] . " has left the chat session. </i><br></div>");
	fclose($fp);
	
	session_destroy();
	header("Location: index.php"); // Redirect the ser
}

?>

<?php require_once "loginform.php";
	if (!isset($_SESSION['name']))
	{
		loginForm();
	} else { ?>
<div id="wrapper">
	<div id="menu">
		<p class="welcome">Welcome, <b><?php echo $_SESSION['name'];?></b></p>
		<p class="logout"><a id="exit" href="#">Exit chat</a></p>
		<div style="clear:both"></div>
	</div>
	
	<div id="chatbox">
	<?php  
		if(file_exists("log.html") && filesize("log.html") > 0){  
		$handle = fopen("log.html", "r");  
		$contents = fread($handle, filesize("log.html"));  
		fclose($handle);  
		  
		echo $contents;  
	}  
	?>	
	</div>
	
	<form name="message" action="">
		<input name="usermsg" type="text" id="usermsg" size="63" />
		<input name="Submitmsg" type="submit" id="submitmsg" value="Send" />
	</form>
</div>
<script src="http://code.jquery.com/jquery-1.10.1.min.js"></script>
<script src="http://code.jquery.com/jquery-migrate-1.2.1.min.js"></script>
<script type="text/javascript">
// jQuery Document
$(document).ready(function(){
	// If user wants to end session
	$('#exit').click(function() {
		var exit = confirm("Are you sure want to  end the session?");
		if (exit==true) { window.location = 'index.php?logout=true'; }
	});
	
	// If user submits form
	$('#submitmsg').click(function(){
	
		var clientmsg = $('#usermsg').val();
		
		$.post("post.php",{ text: clientmsg });
		
		$('#usermsg').attr("value","");
		
		return false;
		
	});
	
	// Load the file containing the chat log
	function loadLog() {
		var oldscrollHeight = $('#chatbox').attr("scrollHeight") - 20; // Scroll height before the request
		$.ajax({
			url: "log.html",
			cache: false,
			success: function(html){
				$("#chatbox").html(html); // Insert chat log into the #chatbox div
				
				// Auto-scroll
				var newscrollHeight = $('#chatbox').attr("scrollHeight") - 20; // Scroll height after the request
				if (newscrollHeight > oldscrollHeight) {
					$('#chatbox').animate({ scrollTop: newscrollHeight }, 'normal'); // Autoscroll to bottom of div
				}
			},
		});
	
	}
	
	setInterval( loadLog, 2500); // Reload file every 2500 ms or x ms if you wish to change the second parameter
	
});
</script>
<?php } ?>
</body>
</html>