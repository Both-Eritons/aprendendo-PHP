<?php
namespace Src\traits;

trait UrlParser{
	public function parserUrl(){
		return explode("/", rtrim($_GET['url']), FILTER_SANITIZE_URL);
	}
}
