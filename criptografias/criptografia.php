<?php
$senha = "1234568";
$senha_db = '$2y$13$TzQB6hQRHm/1BR05Ve3O5uJTnWOxIBcjRWRD3CwO.gjMpVflkL4YO';

if(password_verify($senha, $senha_db)){
	echo "senha valida";
}else{
	echo "senha invalida!";
}
