<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<form action="index.php" method="POST">
		<input type="" name="value" placeholder="Zoekopdracht">
		<input type="submit" name="Zoek" value="Zoek">
	</form>
	<?php
	if(isset($_POST['Zoek'])){
		if(empty($_POST['value'])){
			echo "Geen ingevoerde waarde!";
		} else{
			echo "De zoekopdracht is: ".$_POST['value'];
		}
	}
	
	  
	?>

</body>
</html>