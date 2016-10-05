
<div id="admin">
    <div id="admin_texto">
        Bem vindo ao sistema de cadastro de Hospedes da Pensão Genivaldo Geni.
    </div>

    <div class="col-xs-12">
        <div class="panel panel-primary">

            <div class="panel-heading">
                <h2 class="panel-title">Hospedes Cadastrados</h2>
            </div>
            <table class="table table-bordered table-hover table-responsive texto">
                {if $existe == "SIM"} {*VERIFICA DE EXISTE VISITANTES CADASTRADOS*}

                        <th><center>Foto</center></th>
                        <th><center>Nome</center></th>
                        <th><center>Cidade</center></th>
                        <th><center>Data hora do cadastro</center></th>
                        <th><center>Previsão de saída</center></th>
                        <th><center>Observação</center></th>
                        <th><center>Opção</center></th>
                            {section name=a loop=$idVis}
                                {if $dias[a] == 2}
                                <tr class="warning">
                                    <td width="100"> <img src="{$foto[a]}" alt="Foto Pessoa" width="120" title="{$nomeVis[a]}" /> </td>
                                    <td width="300"> {$nomeVis[a]} </td>
                                    <td width="100"> {$cidade[a]}-{$estado[a]} </td>
                                    <td width="150"><center>{$data[a]} <br> {$hora[a]}</center> </td>
                                <td width="150"> <center>{$previsaoSaida[a]} <br> <i>{$dias[a]} dias</i></center> </td>
                                <td width="160"> {$obs[a]} </td>
                                <td width="50"> <a class="btn btn-xs btn-danger" onclick="desativarVisita({$idVis[a]},{$dias[a]})"><span class="glyphicon glyphicon-remove"></span> Finalizar Hosp.</a> </td>
                                </tr>
                            {else if $dias[a] <= 1}
                                <tr class="danger">
                                    <td width="100"> <img src="{$foto[a]}" alt="Foto Pessoa" width="120" title="{$nomeVis[a]}" /> </td>
                                    <td width="300"> {$nomeVis[a]} </td>
                                    <td width="100"> {$cidade[a]}-{$estado[a]} </td>
                                    <td width="150"><center>{$data[a]} <br> {$hora[a]}</center> </td>
                                <td width="150"> <center>{$previsaoSaida[a]} <br> <strong><i>{$dias[a]} dia</i></strong></center> </td>
                                <td width="160"> {$obs[a]} </td>
                                <td width="50"> <a class="btn btn-xs btn-danger" onclick="desativarVisita({$idVis[a]},{$dias[a]})"><span class="glyphicon glyphicon-remove"></span> Finalizar Hosp.</a> </td>
                                </tr>
                            {else}
                                <tr class="success">
                                    <td width="100"> <img src="{$foto[a]}" alt="Foto Pessoa" width="120" title="{$nomeVis[a]}" /> </td>
                                    <td width="300"> {$nomeVis[a]} </td>
                                    <td width="100"> {$cidade[a]}-{$estado[a]} </td>
                                    <td width="150"><center>{$data[a]} <br> {$hora[a]}</center> </td>
                                <td width="150"> <center>{$previsaoSaida[a]} <br> <i>{$dias[a]} dias</i></center> </td>
                                <td width="160"> {$obs[a]} </td>
                                <td width="50"> <a class="btn btn-xs btn-danger" onclick="desativarVisita({$idVis[a]},{$dias[a]})"><span class="glyphicon glyphicon-remove"></span> Finalizar Hosp.</a> </td>
                                </tr>
                            {/if}
                        {sectionelse}
                            Não há hospedes cadastrados
                        {/section}
                    {/if}
                    {if $existe == "NAO"}
                        <td><strong>Não há hospedes cadastrados</strong></td>
                    {/if}

                </table>
                </fieldset>

            </div>

        </div>
    </div>