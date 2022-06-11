<?php
//conexao com o bd
$servername = "127.0.0.1";
$username = "root";
$password = "12345678";
$dbname = "sistemalogin";

$connect = mysqli_connect($servername, $username,$password,$dbname);
if(mysqli_connect_error()){
	echo "falha ao fazer conexao!: ".mysqli_connect_error();
}
