<?php

require_once "ManipulateData.php";

/*
 * Classe de cadastro de visita
 * Versao 1.0
 * Data 25/05/2013
 */

/*
 * @author Álvaro Bacelar
 */

class CadVisita {

    private $quemVis;
    private $obs;
    private $idPessoa;
//    private $cracha;
//    private $veiculo;
//    private $placa;
    private $diarias, $particular, $prefeitura, $debito;

    function setVisita($prop, $valor) {
        $this->$prop = $valor;
    }

    // FUNCAO DE CADASTRO DE VISITA AO BANCO DE DADOS
    function cadNovaVisita() {

        $novVis = new ManipulateData();

        $hora = date("H:i:s");
        $data = date("Y-m-d");
        $quemVis = $this->quemVis;
        $obs = $this->obs;
        $idPessoa = $this->idPessoa;
        $status = 1;
        $dataPrevisao = $this->diarias;
        $particular = $this->particular;
        $prefeitura = $this->prefeitura;
        $debito = $this->debito;

        // Usa a função strtotime() e pega o timestamp das duas datas:
        $time_inicial = strtotime($data);
        $time_final = strtotime($dataPrevisao);
        $diferenca = $time_final - $time_inicial; // 19522800 segundos
        $dias = (int) floor($diferenca / (60 * 60 * 24)); // 225 dias

        //echo "A diferença entre as datas " . $data_inicial . " e " . $data_final . " é de <strong>" . $dias . "</strong> dias";

        // SETANDO A TABELA A SER FEITA A INSERÇÃO
        $novVis->setTable("visita");
        // SETANDO OS VALORES DO BANCO DE DADOS
        $novVis->setCamposBanco("visitante_data, visitante_hora, data_previsao, visitante_quem_vis, visitante_obs, id_pessoa, status, diarias, particular, prefeitura, debito");
        // SETANDO OS DADOS A SEREM ADICIONADOS AO BANCO DE DADOS
        $novVis->setDados("'$data', '$hora', '$dataPrevisao', '$quemVis', '$obs', '$idPessoa', '$status', '$dias', '$particular', '$prefeitura', '$debito'");
        // CHAMANDO A FUNCAO DE INSERÇAO NO BANCO DE DADOS
        $novVis->insert();

        $sucesso = $novVis->registros_afetados(); // PASSA PARA A VARIAVEL UM BOOLEAN DE REGISTRO AFETADOS
        // RETORNA UMA BOOLEAN COM O STATUS DA GRAVAÇÃO
        return $sucesso;
    }

}

?>
