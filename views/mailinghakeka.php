<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>

		<?php
											if(isset($_POST['submit'])){
											$to='azizjawedi712@gmail.com';
											$sujet='test mail en local';
											$texte=$_POST['texte'];
											$header='From :  test@gmail.com';
											mail($to,$sujet,$texte,$header);
									     	}

									     	header('Location: mailing.php');

												?>
													

</body>
</html>