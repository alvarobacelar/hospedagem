<?php

define('FATOR_ANO', (365 * 60 * 60 * 24));
define('FATOR_MES', (30 * 60 * 60 * 24));
define('FATOR_DIA', (60 * 60 * 24));
define('FATOR_HORA', (60 * 60));
define('FATOR_MINUTO', 60);

# GERALMENTE AS DATAS TRABALHADAS
# APARECEM ESTÃO NO FORMATO BRASILEIRO
$inicio = '01/10/2013';
$fim = '10/10/2013';
 
# CONVERTE AS DATAS PARA O FORMATO AMERICANO
$inicio = explode('/', $inicio);
$inicio = "{$inicio[2]}-{$inicio[1]}-{$inicio[0]}";
 
$fim = explode('/', $fim);
$fim = "{$fim[2]}-{$fim[1]}-{$fim[0]}";
 
# AGORA CONVERTEMOS A DATA PARA UM INTEIRO
# QUE REPRESENTA A DATA E É PASSÍVEL DE OPERAÇÕES SIMPLES
# COMO SUBITRAÇÃO E ADIÇÃO
$inicio = strtotime($inicio);
$fim = strtotime($fim);
 
# NUM FALEI?
print $inicio . "<br>";
print $fim . "<br>";
 
$intervalo = $fim - $inicio;
print "A diferença entre as datas é: " . $intervalo;

$dias = floor($intervalo / FATOR_DIA);
print "Diferença em dias: {$dias}";
print "<br>";





//// Define os valores a serem usados
//$data_inicial = '2015-09-27';
//$data_final = '2015-10-17';
//// Usa a função strtotime() e pega o timestamp das duas datas:
//$time_inicial = strtotime($data_inicial);
//$time_final = strtotime($data_final);
//// Calcula a diferença de segundos entre as duas datas:
//$diferenca = $time_final - $time_inicial; // 19522800 segundos
//// Calcula a diferença de dias
//$dias = (int)floor( $diferenca / (60 * 60 * 24)); // 225 dias
//// Exibe uma mensagem de resultado:
//echo "A diferença entre as datas ".$data_inicial." e ".$data_final." é de <strong>".$dias."</strong> dias";
//// A diferença entre as datas 23/03/2009 e 04/11/2009 é de 225 dias