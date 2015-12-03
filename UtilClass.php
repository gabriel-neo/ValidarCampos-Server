<?php
class UtilClass {
	public static function validaCPF($cpf) {
		
		if ($cpf == 00000000000 || $cpf == 11111111111 || $cpf == 22222222222 || $cpf == 33333333333 || $cpf == 44444444444 ||
				$cpf == 55555555555 || $cpf == 66666666666 || $cpf == 77777777777 || $cpf == 88888888888 || $cpf == 99999999999 ||
				strlen($cpf) != 11) {
			return 0;
		}
		
		$soma = 0;
		
		for ($i = 0, $n=10; $i < 9; $i++) {
			$soma += $cpf[$i]*$n;
			$n--;
		}
		
		$validaPrimeiro = (($soma*10) % 11) == 10?0:(($soma*10) % 11);
		
		$soma = 0;
		if ($validaPrimeiro == $cpf[9]) {
			for ($i = 0, $n=11; $i < 10; $i++) {
				$soma += $cpf[$i]*$n;
				$n--;				
			}
			$validaSegundo = (($soma*10) % 11) == 10?0:(($soma*10) % 11);
			
			if ($validaSegundo == $cpf[10]) {
				return 1;
			}
			else{
				return 0;
			}
		}
		else{
			return 0;
		}
	}
	
	public static function validaCEP($cep){
		
		if (strlen($cep) != 8 || $cep == 00000000) {
			return 0;
		}
		else{
			return is_numeric($cep)?1:0;
		}
	}
}
?>
