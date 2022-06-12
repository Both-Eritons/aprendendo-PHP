<?php
$senha = "123456";

$novaSenha = base64_encode($senha);//codifica a senha
$senhamd5 = md5($senha);//codifica a senha
$senhasha = sha1($senha);//codifica a senha

echo "BASE 64: $novaSenha\nMD5: $senhamd5\nSHA1: $senhasha\n";
