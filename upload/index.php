<?php
if(isset($_POST['Enviar'])){
	$formatos = ['gif', 'png', 'jpg', 'jpeg','mp3','mp4'];
	$ext = pathinfo($_FILES['arquivo']['name'], PATHINFO_EXTENSION);
	if(in_array($ext, $formatos)){
		$pasta = "uploads/";
		$temp = $_FILES['arquivo']['tmp_name'];
		$newN = uniqid().".$ext";
		if($sla = move_uploaded_file($temp, $pasta.$newN)){
			$msg = "o arquivo: <b>$newN</b> foi upado com <span style='color:lightgreen;'>sucesso!</span>";
		}else{
			$msg = "nao foi <b style='color: red;'>possivel</b> fazer upload!";
		}
	}
	else{$msg = "<b style='color: red;'>formato invalido!</b>";}
		echo $msg."<br>";
		//echo phpinfo();
}
?>
<html lang="pt-br">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<title>PHP Test</title>
</head>
<body>
<form action="<?php echo $_SERVER['PHP_SELF'];?>" method="POST" enctype="multipart/form-data">
<input type="file" name="arquivo">
<button type="submit" name="Enviar">Enviar</button>
</form>
</body>
</html>
