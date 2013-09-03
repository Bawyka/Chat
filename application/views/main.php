<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN" 
"http://www.w3.org/TR/html4/strict.dtd">
<html>
<head>
<meta content="text/html; charset=utf-8" http-equiv="Content-Type" />
<?php foreach($styles as $style): ?>
    <link href="<?php echo URL::base(); ?>public/css/<?php echo $style; ?>.css" 
    rel="stylesheet" type="text/css" />
<?php endforeach; ?>
<?php foreach($scripts as $script): ?>
    <script type="text/javascript" src="<?php echo URL::base(); ?>public/js/<?php echo $script; ?>.js"></script>
<?php endforeach; ?>
<title>Random Chat</title>
</head>
<body>
<div id="wrapper">
	<div id="content">
		<div id="header">
			<h1> RANDOMCHAT </h1>
		</div>
		<div id="box">
			<div id="keeper">
				<ul id="nav-menu">
					<li>
						<a href="#" id="next"><span>next</span></a>
					</li>
					<li>
						<a href="#" id="stop"><span>stop</span></a>
					</li>
				</ul>
			</div>
			<div id="chat"><p>You: Hi!</p><p>He: Hello!</p>
			</div>
		</div><!-- END box -->
		<div id="msg-send">
			<input type="text" id="msg" name="msg" value="" />
			<input type="button" name="send" id="send" value="say" />
		</div><!-- END msg-send -->
		<div id="footer"><div class="clearten">&nbsp;</div><p style="text-align:center; color: white; font-family: Lucida Console;">Powered By &#169; Bawyka T.P.</p></div>
	</div><!-- END content -->
</div><!-- END wrapper -->
</body>
</html>