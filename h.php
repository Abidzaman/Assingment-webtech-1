  
  <?php 
  $cow="";
     	if(isset($_REQUEST['s'])){
     		$cow= $_REQUEST['name'];
}
   ?>
  <!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<form action="#" method="get">
		<fieldset>
			<legend>Name</legend>
			<table border="0" width="50px">
				<tr>
					<td height="100px"><input type="text" name="name" value="<?php echo($cow); ?>" size="50px"></td>
					
				</tr>
				<tr><td>__________________________________________________________________________</td></tr>
				<tr><td>
					<?php
					
                  echo $cow;

                    ?>

</td></tr>
				<tr><td><input type="submit" name="s" value="submit"></td></tr>
			</table>
		</fieldset>

	</form>

</body>
</html>