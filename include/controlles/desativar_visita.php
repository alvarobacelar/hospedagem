<?php

/*
 * CONTROLLER DE DESATIVAR VISITA
 * DATA CRIAÇÃO: 11-08-2013
 * AUTOR: ÁLVARO BACELAR
 */

require_once ("../models/ManipulateData.php");

require_once '../../lib/PdfLib.php';

$id = trim(addslashes($_GET['id'])); // RCEBENDO O ID DO VISITANTE A QUAL DESEJA DESATIVAR
$diasSaida = addslashes($_GET["dias"]);
$status = 0; // ATRIBUINDO O VALOR DE DESATIVAÇÃO DO VISITANTE
$hora = date("H:i:s"); // SETARÁ A HORA QUE O VISITANTE SAIRÁ DO ESTABELECIMENTO
$dataSaida = date("Y-m-d");

// fazendo a busca no banco de dados para ver que dia o hospede entrou na pesão
$buscaData = new ManipulateData();
$buscaData->selectVisita();
$dataPrevisao = $buscaData->fetch_object();
$dataFinal = $dataPrevisao->visitante_data;
$dias = $dataPrevisao->diarias;

// Fazendo a soma de quantas diarias total o hospede ficou. Peando a data atual e a data que entrou e fazendo uma soma. 
$time_inicial = strtotime($dataFinal);
$time_final = strtotime($dataSaida);
$diferenca = $time_final - $time_inicial; // 19522800 segundos
$diasTotal = floor($diferenca / (60 * 60 * 24));


$altera = new ManipulateData();

// INSTANCIANDO OS VALORES PARA FAZER O UPDATE NA TABELA
$altera->setTable("visita");
$altera->setCamposBanco("visita_saida = '$hora', data_saida = '$dataSaida',status='0', diaria_saida = '$diasTotal'");
$altera->setCampoTable("id_visita");
$altera->setValueId("$id");

$altera->update(); // CHAMANDO A FUNÇÃO DE UPDATE, DEPOIS DE TER RECEBIDO TODOS OS VALORES


session_start();
$_SESSION['desativar'] = $id;
header("Location: ../../cad_visita.php?var=relId&id=".$id);
exit();

