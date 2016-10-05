<div class="container theme-showcase" role="main">

    <div class="panel panel-primary">

        <div class="panel-heading">

            <h2 class="panel-title">Pesquisar por nome</h2>

        </div>

        <div class="panel-body">

            <div class="row">

                <div class="col-xs-5">

                    <form action="relatorioNome.php" method="post" name="dados" class="form-horizontal" role="form">
                        <div class="form-group">
                            <label class="col-sm-3 control-label" for="nome">Nome </label>
                            <div class="col-sm-8">
                                <input id="nome" name="nome" type="text" size="30" class="form-control" maxlength="150" value="" autocomplete="on" placeholder="Nome da pessoa..." />
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-sm-offset-3 col-sm-6">
                                <button type="submit" onclick="this.form.target = '_blank';
                                        return true;" class="btn btn-primary ">Confirmar <span class="glyphicon glyphicon-share"></span></button>
                            </div>
                        </div>
                    </form>

                </div>

                <div class="col-xs-6">

                    <div class="alert alert-warning" role="alert">
                        Coloque o nome da pessoa no qual deseja pesquisar. <br/>
                        Será gerado um relatorio com as visitas dessa pessoa

                    </div>
                </div>

            </div>
        </div>
    </div>
</div>