<?php

if (isset($_POST['msg']) and !empty($_POST['msg']))
{		
	$arr = file("chat.txt");
	$count = count($arr);	
	if ($count>=15) {
		$fopen = fopen("chat.txt", "w+");
		for($i = $count-14; $i != $count; $i++) {
		  fwrite($fopen, $arr[$i]);
		}
		//fwrite($fopen,$_POST['msg'].'<br />'."\r\n");
		fclose($fopen);
	}
	file_put_contents('chat.txt',file_get_contents('chat.txt').$_POST['msg'].'<br />'."\r\n");	
	echo file_get_contents('chat.txt');
}