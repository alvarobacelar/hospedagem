<div class="container theme-showcase" role="main">

    <div class="panel panel-default">

        <div class="panel-heading">

            <h2 class="panel-title">Cadastrar novo usuário</h2>
        </div>
        <div class="panel-body">


            <form name="cadastrar" method="post" action="include/controlles/cad_novo.php"  class="form-horizontal" role="form" onSubmit="return verificaSenha();">

                {$cadastro}{* mostra mensagem caso o usuario foi cadstrado *}

                <div class="form-group">
                    <label class="col-sm-2 control-label" for="nome">Nome</label>
                    <div class="col-sm-6">
                        <input name="nome" type="text" id="nome" class="form-control" size="40" value="" maxlength="100"  required autocomplete="on" placeholder="Nome..." />
                    </div>
                </div>


                <div class="form-group">
                    <label class="col-sm-2 control-label" for="login">Login</label>
                    <div class="col-sm-3">
                        <input name="login" type="text" id="login" value="" maxlength="30" class="form-control" required autocomplete="on" placeholder="Login..." />
                    </div>
                    <div class="col-sm-3">
                        <select name="nivel" class="form-control" id="nivel">
                            <option value=""> Nível de Acesso </option>
                            <option value="0">Administrador</option>
                            <option value="2">Supervisor</option>
                            <option value="1">Usuario</option>
                        </select>
                    </div>
                </div>


                <div class="form-group">
                    <label class="col-sm-2 control-label" for="senha">Senha</label>
                    <div class="col-sm-3">
                        <input name="senha" type="password" id="senha" value=""  maxlength="40" class="form-control" required autocomplete="on" placeholder="Senha..." />
                    </div>
                </div>

                <div class="form-group">
                    <label class="col-sm-2 control-label" for="senha2">Repitir senha</label>
                    <div class="col-sm-3">
                        <input name="senha2" type="password" id="senha2" value="" class="form-control" maxlength="40" required autocomplete="on" placeholder="Repetir senha..." onblur="verificaSenha();" />
                        <span id="erro-senha"></span> {* DIV QUE MOSTRA SE SENHAS CONFEREM (COMPARAÇÃO NO JAVASCRIPT) *}<br>
                    </div>
                </div>


                <div class="form-group">
                    <label class="col-sm-2 control-label" for="senha2">Email</label>
                    <div class="col-sm-5">
                        <input name="email" type="text" id="email" value="" class="form-control" size="35" maxlength="50"  required autocomplete="on" placeholder="Email..." />
                    </div>
                </div>


                <div class="form-group">
                    <div class="col-sm-offset-2 col-sm-6">
                        <button type="submit" class="btn btn-lg btn-primary">Salvar  <span class="glyphicon glyphicon-floppy-disk"></span></button>
                        <button type="button" class="btn btn-danger">Cancelar  <span class="glyphicon glyphicon-remove"></span></button>
                    </div>
                </div>
            </form>

        </div>
    </div>


    <div class="panel panel-primary">

        <div class="panel-heading">

            <h2 class="panel-title">Usuários Cadastrados</h2>
        </div>

        {* DIV FEEDBACK DE EXCLUSÃO DE USUARIO *}
        <div id="ok" class="text-success">{$excluido}</div>
        <div class="row">
            <div class="col-md-6 col-md-offset-3">
                <table class="table">
                    <th><center>Nome</center></th> <th><center>Opção</center></th>
                        {* FAZENDO O LOOP DA VARIAVEL(ARRAY) QUE RECEBE OS NOMES DO BANCO DE DADOS *}
                        {section name=i loop=$nomeAdm loop=$idAdm}
                        <tr class="success">
                            <td width="250">{$nomeAdm[i]}</td>
                            <td>
                        <center>
                            <a class="btn btn-info  btn-xs" href="altera_usuario.php?user={$idAdm[i]}"><span class="glyphicon glyphicon-edit"></span> Alterar</a>
                            <a class="btn btn-danger  btn-xs" id="excluir" onclick="excluirUsuario({$idAdm[i]})"><span class="glyphicon glyphicon-remove"></span> Excluir</a>
                        </center>
                        </td>
                        </tr>
                    {/section}
                </table>
            </div>
        </div>
    </div>
</div>

