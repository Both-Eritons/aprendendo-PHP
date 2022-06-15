<?php
// Manipulação de arquivos
/*
 * fopen() - abre um arquivo
 * fwrite() - escreve no arquivo
 * fclose() - fecha o arquivo
 * fread() - lê o arquivo
 * fseek() - move o ponteiro do arquivo
 * ftell() - retorna o ponteiro do arquivo
 * fflush() - limpa o buffer do arquivo
 * fgetc() - retorna o caracter atual do arquivo
 * fgets() - retorna a linha atual do arquivo
 * fgetss() - retorna a linha atual do arquivo, sem tags
 * fscanf() - lê o arquivo e retorna os dados lidos
 * fprintf() - escreve no arquivo
 * fputs() - escreve no arquivo
 * fputc() - escreve no arquivo
 * fputcsv() - escreve no arquivo
 * fwrite() - escreve no arquivo
 * fgetcsv() - lê o arquivo e retorna os dados lidos
 */
$arq = "arquivo.txt";


$conteudo = "conteudo de teste\r\n";

$size = filesize($arq);

$arq_op = fopen($arq,'r');
while(!feof($arq_op)){
	$linha = fgets($arq_op,$size);
	echo $linha;
}

fclose($arq_op);
