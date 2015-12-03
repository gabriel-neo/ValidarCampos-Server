#ValidarCampos-Server

 * Repositório : ValidarCampos-Server
 * Descrição : Classe em PHP para validar CPF e CEP (Server Side).
 * Autor : Gabriel Braga (Projeto Aplicado 2015)


Nesta classe são oferecidos dois métodos publicos e estaticos para validação de CPF e CEP.

Para utilizar esses métodos em seu programa, basta baixar o arquivo UtilClass.php e colocá-lo em alguma pasta ou raiz do seu projeto.

No arquivo que desejar fazer a validação, você deve importar essa classe utilizando o require_once "[caminho]UtilClass.php";
e então basta invocar o método estatico como no exemplo abaixo:

```
$cpf = 11122233345;
$var = UtilClass::validaCPF($cpf);

if ($var){
  echo ("CPF Válido!");
}
else{
  echo ("CPF Inválido!");
}
```
O exemplo de uso do validador de CEP é bem parecido com o código mostrado acima:

$cep = 33222444;
$var = UtilClass::validaCEP($cep);

if ($var){
  echo ("CEP Válido!");
}
else{
  echo ("CEP Inválido!");
}

Obs : O método para verificar o CEP só identifica se o parâmetro passado contem 8 caracteres e se ele são apenas numericos.
Nenhuma validação é feita junto a um banco de CEP's.
