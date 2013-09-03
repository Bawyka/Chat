<div class="regwrapper">

<div class="titled">Регистрация </div>

<hr>

	<table class="tblreg">

	<form action='notification.php' method="post">
	
		<tr>
			<td><input type="text" value="" name="nick" /></td>
			<td>nickname</td>
		</tr>
		
		<tr>
			<td><input type="text" name="email" value="" /></td>
			<td>email</td>
		</tr>
		
		<tr>
			<td> <input type="password" value="" name="pass" /> </td>
			<td> пароль </td>
		</tr>
		
		<tr>
			<td>
				<select style="float: right; font-family: Verdana;">
					<?php
						
						for ($i = 2012; $i>1920; $i--)
						{
						
							echo "<option>$i</option>";
						
						}

					?>
				</select>
			</td>
			<td>
				возраст
			</td>
		</tr>
		
		<tr>
			<td align="right">
			<style>
				#man,#woman { margin: 0 5px; }
			</style>
				<label for="man">Мужской<input type="radio" name="sex" value="m" id="man" checked="checked" /></label><br />
				<label for="woman">Женский<input type="radio" id="woman" name="sex" value="f" /></label>
			</td>
			<td>
				Пол
			</td>
		</tr>
		
		<tr>
			<td align="right">
				<select class="countries">
					<?php require_once "../libs/countries.php";
							
						foreach ($countries as $name)
						{
						
							echo "<option>$name</option>";
						
						}
					
					?>
				</select>
			</td>
			<td>
				Страна
			</td>
		</tr>
		
		<tr>
			<td colspan="2" align="center">
				<input type="submit" class="succ" value="подтвердить" name="success" />
			</td>
		</tr>

	</form>
	
	</table>

</div>