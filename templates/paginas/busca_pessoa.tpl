

<div class="panel panel-default">
    <div class="panel-heading">

        <h2 class="panel-title">Busca por pessoas</h2>
    </div>
    <div class="panel-body">

        <table class="table table-bordered table-hover table-striped">
            {if isset ($busca)}
                <th><center>Foto</center></th><th><center>Nome</center></th><th><center>Cidade</center></th><th><center>Telefone</center></th><th><center>Opção</center></th>

                {foreach $busca as $pessoa}
                    <tr class="success">
                        <td><img src="{$pessoa->foto}" alt="Foto {$pessoa->nome}" title="{$pessoa->nome}" width="200" /></td>
                        <td>{$pessoa->nome}</td>
                        <td>{$pessoa->cidade}</td>
                        <td>{$pessoa->telefone}</td>
                        <td width="150" style="text-align: center;">
                            <form name="visita" method="POST" action="include/controlles/verifica_vis.php">
                                <input type="hidden" id="cpfVerifica" name="cpfVerifica" value="{$pessoa->cpf}" /> 
                                <button type="submit" name="enviaCPF" class="btn bnt-lg btn-success"><span class="glyphicon glyphicon-edit"></span> Cadastrar hospedagem</button></a>
                            </form>
                        </td>
                    </tr>
                {/foreach}
            {else}
                <div class="alert alert-danger"><center>Não há ninguém cadastrado com o nome <strong>{$nomeBusca}</strong> <a onclick="cadPessoa()" class="btn btn-warning"><span class="glyphicon glyphicon-edit"></span> Realizar Cadastro</a> </center></div>
                    {/if}
        </table>
    </div>
</div>

<center><a class="btn btn-default" href="javascript:history.back()"><span class="glyphicon glyphicon-circle-arrow-left" aria-hidden="true"></span> Voltar</a></center> <br /><br />