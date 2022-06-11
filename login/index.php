<?php
//conexao
require_once 'db_connect.php';

//sessão
session_start();

//botao enviar
if(isset($_POST['entrar'])){
	$erros = array();
	$login = mysqli_escape_string($connect, $_POST['login']);
	$senha = mysqli_escape_string($connect, $_POST['senha']);

	if(empty($login) || empty($senha)){
		$erros[] = "<li>o campo de login ou senha precids ser preenchido.</li>";
	}else{
		$sql = "SELECT login FROM usuarios WHERE login = '$login'";
		$result = mysqli_query($connect,$sql);

		if(mysqli_num_rows($result) > 0){
			$senha = md5($senha);
			$sql = "SELECT * FROM usuarios WHERE login = '$login' AND senha = '$senha'";
			$result = mysqli_query($connect,$sql);

			if(mysqli_num_rows($result) == 1){
				$dados = mysqli_fetch_array($result);
				mysqli_close($connect);
				$_SESSION['logado'] = true;
				$_SESSION['id_usuario'] = $dados['id'];
				header("Location: home.php");
			}
			else{
				$erros[] = "<li>usuario e senha nao coferem</li>";
			}
		}else{
			$erros[] = "<li>usuario inexistente!</li>";
		}

	}
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta http-equiv="X-UA-Compatible" content="ie=edge">
		<title>login</title>
		<style>
			body{
				background-color: #f2f2f2;
			}
			.container{
				width: 400px;
				height: 400px;
				background-color: #fff;
				margin: auto;
				margin-top: 100px;
				padding: 20px;
				border-radius: 10px;
				text-align: center;
			}
			.container h1{
				text-align: center;
				margin-bottom: 20px;
			}
			.container form{
				margin-top: 20px;
			}
			.container form input{
				width: 100%;
				height: 40px;
				border-radius: 5px;
				border: 1px solid #ccc;
				padding-left: 10px;
				margin-bottom: 10px;
			}
			.container form input[type="submit"]{
				width: 100%;
				height: 40px;
				border-radius: 5px;
				border: 1px solid #ccc;
				background-color: #4CAF50;
				color: #fff;
				font-weight: bold;
			}
			.container form input[type="submit"]:hover{
				background-color: #45a049;
			}
			.container form input[type="submit"]:active{
				background-color: #45a049;
			}
			.container form input[type="submit"]:focus{
				background-color: #45a049;
			}
			.container form input[type="submit"]:disabled{
				background-color: #ccc;
			}
			.container form input[type="submit"]:disabled:hover{
				background-color: #ccc;
			}
			.container form input[type="submit"]:disabled:active{
				background-color: #ccc;
			}
			.container form input[type="submit"]:disabled:focus{
				background-color: #ccc;
			}
		</style>
</head>
<body>
	<h1>login</h1>
<?php
if(!empty($erros)){
	foreach($erros as $err){
		echo "<ul>$err</ul>";
	}
}
?>
<div class="container">
	<form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST">
	Login: <input type="text" name="login"><br>
	Senha: <input type="password" name="senha"><br>
	<button type="submit" name="entrar">Entrar</button>
	</form>
</div>
</body>
</html>
