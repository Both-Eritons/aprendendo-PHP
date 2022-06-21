<?php
#arquivos diretorios raizes
$pastaInterna = "";
define('DIRPAGE', "http://{$_SERVER['HTTP_HOST']}/{$pastaInterna}");
if(substr($_SERVER['DOCUMENT_ROOT'], -1) == '/'){
	define('DIRREC', "{$_SERVER['DOCUMENT_ROOT']}{$pastaInterna}");
}else{
	define('DIRREC', "{$_SERVER['DOCUMENT_ROOT']}/{$pastaInterna}");
}
#diretorios EXPEC
define("DIR_IMG", DIRPAGE."/public/img/");
define("DIR_CSS", DIRPAGE."/public/css/");
define("DIR_JS", DIRPAGE."/public/js");
//BANCO DE DADOS
define("HOST", "localhost");
define("DB", "DB");
define("USER", "USER");
define("PASSWORD", "SENHA");
