<div class="container theme-showcase" role="main">

    <div class="panel panel-default">

        <div class="panel-heading">

            <h2 class="panel-title">Pessoa já cadastrada</h2>
        </div>
        {* FALTA ESTILIZAR ESSA MENSAGEM *}

        <div class="panel-body">

            <table class="table table-bordered table-hover table-striped">
                <th><center>Id</center></th><th><center>Nome</center></th><th><center>Foto</center></th><th><center>Hora de chegada</center></th><th><center>Quem Visita</center></th><th><center>Opção</center></th>

                <tr class="success">
                    <td> {$idVis} </td>
                    <td> <img src="{$foto}" alt="Foto Pessoa" title="Foto" /> </td>
                    <td> {$nomeVis} </td>
                    <td><center> {$hora}</center> </td>
                <td> {$quemVis} </td>
                <td> <a class="btn btn-mini btn-danger" onclick="desativarVisita({$idVis})">Desativar Visita</a> </td>
                </tr>

            </table>
            <a href="cad_visita.php" class="btn" >Voltar</a>
        </div>
    </div>
</div>
