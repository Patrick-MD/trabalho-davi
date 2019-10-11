<?php
	include ("Carro.php");
	
	$carro1 = new Carro();
	$carro1->setModelo("Corola");
	$carro1->setMarca("Toyota");
	$carro1->setCor("Prata");
	$carro1->setAno("2019");
	$carro1->setPlaca("NDE1348");
	
	$carro1->getModelo();
	$carro1->getMarca();
	$carro1->getCor();
	$carro1->getAno();
	$carro1->getPlaca();
	
	
?>