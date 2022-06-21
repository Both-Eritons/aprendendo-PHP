<?php
/*
 * operaçoes aritmeticas
 * soma: +
 * subtracao: -
 * multiplicacao: *
 * divisao: /
 * modulo: %
 */
class Operacoes{
	public function soma($a, $b){
		return $a + $b;
	}
	public function subtracao($a, $b){
		return $a - $b;
	}
	public function multiplicacao($a, $b){
		return $a * $b;
	}
	public function divisao($a, $b){
		return $a / $b;
	}
	public function modulo($a, $b){
		return $a % $b;
	}
}
$operacoes = new Operacoes();
echo $operacoes->soma(10, 20)."\n";
echo $operacoes->subtracao(10, 20)."\n";
echo $operacoes->multiplicacao(10, 20)."\n";
echo $operacoes->divisao(10, 20)."\n";
echo $operacoes->modulo(10, 20)."\n";
