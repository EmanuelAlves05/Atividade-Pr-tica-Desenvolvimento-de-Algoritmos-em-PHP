<?php
	$valor= (float) readline("Digite o valor do produto\n");
	$quantidade= (int) readline("Digite a quantidade de produto que vc quer\n");

	$valor_total=$quantidade*$valor;

	echo("O valor total é de R$". $valor_total);
?>