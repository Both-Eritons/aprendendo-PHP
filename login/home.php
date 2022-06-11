<?php
require_once 'db_connect.php';
session_start();

if(!isset($_SESSION['logado'])){
  header("Location: index.php");
}

$id = $_SESSION['id_usuario'];
$sql = "SELECT * FROM usuarios WHERE id = '$id'";
$result = mysqli_query($connect,$sql);
$dados = mysqli_fetch_array($result);
mysqli_close($connect);

?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=Edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <title>pagina Restrita</title>

  <!-- HTML -->


  <!-- Custom Styles -->
  <link rel="stylesheet" href="style.css">
</head>

<body>
<h1>olá <?php echo $dados['nome'];?></h1>
<a href="logout.php">sair</a>
</body>

</html>

