<?php

require_once "config/config.php";
require_once "include/funcoes/verifica.php";
require_once "include/models/ManipulateData.php";
require_once "include/models/Main.php";
require_once ("./lib/PdfLib.php"); 

if (isset($_POST["relData1"]) && ($_POST["relData2"])) {

    $relatorio = new ManipulateData();
    $pdf = new PdfLib();
    $mpdf = new mPDF();

    $dataInicial = addslashes($_POST["relData1"]);
    $dataFinal = addslashes($_POST["relData2"]);

    $data1 = $relatorio->formata_data_db($dataInicial);
    $data2 = $relatorio->formata_data_db($dataFinal);

    /* GERANDO O RELATORIO EM PDF USANDO mPDF */

    // chamando a função que faz a busca dos chamados, passando os parametros de dataInicial, dataFinal e seção.
    $relatorio->gerarRelatorioData($data1, $data2);
    
    while ($rel = $relatorio->fetch_object()) {

        $idVisita[] = $rel->id_visita;
        $hora[] = $rel->visitante_hora;
        $foto[] = $rel->foto;
        $data[] = $relatorio->formataData($rel->visitante_data);
        $saida[] = $rel->visita_saida;
        $quemVis[] = $rel->visitante_quem_vis;
        $prefeitura[] = $rel->prefeitura;
        $nome[] = $rel->nome;
        $status[] = $rel->status;
        $cidadePessoa[] = $rel->cidade;
        $uf[] = $rel->uf;
        $diarias[] = $rel->diarias;
        $diasTotal[] = $rel->diaria_saida;
        $diasPrevisto[] = $rel->diarias;
        $dataSaida[] = $relatorio->formataData($rel->data_saida);
        $dataPrevisao[] = $relatorio->formataData($rel->data_previsao);
        
        
        $smarty->assign("idVisita", $idVisita);
        $smarty->assign("hora", $hora);
        $smarty->assign("foto", $foto);
        $smarty->assign("nome", $nome);
        $smarty->assign("data", $data);
        $smarty->assign("saida", $saida);
        $smarty->assign("diarias", $diarias);
        $smarty->assign("prefeitura", $prefeitura);
        $smarty->assign("status", $status);
        $smarty->assign("uf", $uf);
        $smarty->assign("cidade", $cidadePessoa);
        $smarty->assign("diasTotal", $diasTotal);
        $smarty->assign("diasPrevisto", $diasPrevisto);
        $smarty->assign("dataSaida", $dataSaida);
        $smarty->assign("dataPrevisao", $dataPrevisao);
        
    }
    $smarty->assign("dataInicial", $dataInicial);
    $smarty->assign("dataFinal", $dataFinal);

//      $smarty->display('paginas/relatorio_data.tpl');
    $pdf->WriteHTML($smarty->fetch('paginas/relatorio_data.tpl'));
    $pdf->Output();
    exit;
} else {
    // se nenhuma data for definida será enviado para uma pagina de erro com uma session mostrando qual foi o erro
    $_SESSION["erro"] = "Escolha a data inicial e a data final para imprimir o relatorio";
    header("Location: erro404.php");
    exit();
}