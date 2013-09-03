<div id="main">

		<div class="sender" id="osender" align="center">
		
		<br>
		<br>
		<br>
		
		msg to:
		
		<select id="whomer" width="80" style="width: 80px;">
			
			<!-- ALL ONLINE USERS -->			
			<option>all</option>
			
		</select>
		
		<input id="msg" style="width: 60%;" value="" type="text">
		<input id="btn" style="width: 30px;" value="ok" type="button">
		
		<select id="color">
			<option disabled="disabled"> color </option>
			<option selected="selected" value="black" style="color: black;"> black </option>
			<option value="red" style="color: red;"> red </option>
			<option value="green" style="color: green;"> green </option>
			<option value="yellow" style="color: yellow;"> yellow </option>
			<option value="white" style="color: white;"> white </option>
			<option value="blue" style="color: blue;"> blue </option>
		</select>&nbsp;<input id="bold" style="width: 30px;" value="B" type="button">
		
	</div>
    
	<div class="text" id="otext"><?php if (isset($text) and !empty($text)) echo $text; ?><img src="images/3.gif" style="margin: 20% 50%"></div>
	
	<!-- BLOCK WITH SMILES -->
	<div class="smiles" id="osmiles">
	
		<center>
			
			<img src="public/img/0.gif" class="sm" title="&lt;0&gt;">
			<img src="public/img/1.gif" class="sm" title="&lt;1&gt;">
			<img src="public/img/2.gif" class="sm" title="&lt;2&gt;">
			<img src="public/img/3.gif" class="sm" title="&lt;3&gt;">
			<img src="public/img/4.gif" class="sm" title="&lt;4&gt;">
			<img src="public/img/5.gif" class="sm" title="&lt;5&gt;">
			<img src="public/img/6.gif" class="sm" title="&lt;6&gt;">
			<img src="public/img/7.gif" class="sm" title="&lt;7&gt;">
			<img src="public/img/8.gif" class="sm" title="&lt;8&gt;">
			<img src="public/img/9.gif" class="sm" title="&lt;9&gt;">
			<img src="public/img/10.gif" class="sm" title="&lt;10&gt;">    
			
			<label id="sctop"></label>
			
		</center>
    
	</div>
  
	<div id="logo">
	
		<img src="/public/img/powerchat.png" style="width: 190px; height: 50px;">
		
	</div>

  
	<!-- ONLINE USERS -->
	<div id="ousers" class="users">
		<?php if (isset($file) and !empty($file)) echo $file; ?>
	</div>

   
		<div id="adminka" class="admk">
									
			<div><img src="/public/img/ava.png" style="border: 1px groove #c2c2c2; height: 25px; width: 25px; display: block; float:left; margin: 1px 1px 0px 5px;"><label style="float:left; margin: 5px 10px">avatar</label></div>
			
			
	
			<div style="clear:both;"><hr><label style="margin: 5px">status</label><input type="text" value="" maxlength="8" id="status" style="width: 135px; margin-top: 5px;" name="status"></div>
			
			<div id='hstat' style="margin: 3px 7px; font-size: 9px;">не более 8-и символов</div>

			<div><label style="margin: 5px">age</label><select id="age"><?php for ($i = 18; $i<90; $i++) { echo "<option>". $i ."</option>"; } ?></select><label>&nbsp; time on the site</label></div>
			
			<div><label style="margin: 5px">sex</label><select id="sex" style="width: 42px"><option>m</option><option>f</option></select> <label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 00:24:35</label></div>
			
			<select id="country" style="width: 124px; height: 19px; font-size: 10px; margin: 0 3px 0 5px">countries</select>
			<label>country </label>
			
			
			<input type="hidden" id="user" value="<?php if (isset($name) and !empty($name)) echo $name; ?>" name="username" />
		
		</div>
 
	</div>