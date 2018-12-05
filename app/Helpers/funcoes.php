<?php

function removeAcentos($str) {
   if(trim($str) == "") {
      return "";
   }
   
	$retorno = strtr($str, "áàãâéêíóôõúüçÑÁÀÃÂÉÊÍÓÔÕÚÜÇªº° '´?", "aaaaeeiooouucNAAAAEEIOOOUUC       ");
	
	// Aspas simples
	while(strrpos($retorno, "'")) {
		$retorno = str_replace("'", "", $retorno);
	}
	
	return $retorno;
}