<?php
header('content-type: text/html; charset=utf-8');
require_once("../config/config.php");
require_once("../src/traits/TraitUrlParser.php");
require_once("../src/vendor/autoload.php");
use Src\traits\UrlParser;
class Teste{
	use UrlParser;
	public function __construct(){
		$url = $this->parserUrl();
		var_dump($url);
	}
}
$teste = new Teste();
