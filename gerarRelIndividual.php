<?php

require_once "config/config.php";
require_once "include/funcoes/verifica.php";
require_once "include/models/ManipulateData.php";
require_once "include/models/Main.php";
require_once ("./lib/PdfLib.php");

// buscando o hospede no banco de dados para gerar um recibo de hospedagem

$pdf = new PdfLib();
$mpdf = new mPDF();

$id = addslashes($_GET["id"]);

$hospIndividual = new ManipulateData();
$hospIndividual->gerarRelatorioId($id);
$resultado = $hospIndividual->fetch_object();
$smarty->assign("resultado", $resultado);
$smarty->assign("dataChegada", $hospIndividual->formataData($resultado->visitante_data));
$smarty->assign("dataSaida", $hospIndividual->formataData($resultado->data_saida));

$pdf->WriteHTML($smarty->fetch('paginas/relatorio_id.tpl'));
$arquivo = "hospedagem_de_" . $resultado->nome . "_" . date("d-m-y") . ".pdf";
$pdf->Output($arquivo, "D");

echo "<script>
        window.location.href = './cad_visita.php';
      </script>";
exit;

