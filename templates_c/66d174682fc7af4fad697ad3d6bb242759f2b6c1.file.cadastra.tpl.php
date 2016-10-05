<?php /* Smarty version Smarty-3.1.13, created on 2015-08-17 21:31:34
         compiled from "./templates/admin/cadastra.tpl" */ ?>
<?php /*%%SmartyHeaderCode:212029266955399da563f0c8-40843302%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '66d174682fc7af4fad697ad3d6bb242759f2b6c1' => 
    array (
      0 => './templates/admin/cadastra.tpl',
      1 => 1439857893,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '212029266955399da563f0c8-40843302',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_55399da584a125_20273699',
  'variables' => 
  array (
    'cadastro' => 0,
    'excluido' => 0,
    'nomeAdm' => 0,
    'idAdm' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_55399da584a125_20273699')) {function content_55399da584a125_20273699($_smarty_tpl) {?><div class="container theme-showcase" role="main">

    <div class="panel panel-default">

        <div class="panel-heading">

            <h2 class="panel-title">Cadastrar novo usuário</h2>
        </div>
        <div class="panel-body">


            <form name="cadastrar" method="post" action="include/controlles/cad_novo.php"  class="form-horizontal" role="form" onSubmit="return verificaSenha();">

                <?php echo $_smarty_tpl->tpl_vars['cadastro']->value;?>


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
                        <span id="erro-senha"></span> <br>
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

        
        <div id="ok" class="text-success"><?php echo $_smarty_tpl->tpl_vars['excluido']->value;?>
</div>
        <div class="row">
            <div class="col-md-6 col-md-offset-3">
                <table class="table">
                    <th><center>Nome</center></th> <th><center>Opção</center></th>
                        
                        <?php if (isset($_smarty_tpl->tpl_vars['smarty']->value['section']['i'])) unset($_smarty_tpl->tpl_vars['smarty']->value['section']['i']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['name'] = 'i';
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['loop'] = is_array($_loop=$_smarty_tpl->tpl_vars['idAdm']->value) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['show'] = true;
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['max'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['loop'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['step'] = 1;
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['start'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['step'] > 0 ? 0 : $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['loop']-1;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['i']['show']) {
    $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['total'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['loop'];
    if ($_smarty_tpl->tpl_vars['smarty']->value['section']['i']['total'] == 0)
        $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['show'] = false;
} else
    $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['total'] = 0;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['i']['show']):

            for ($_smarty_tpl->tpl_vars['smarty']->value['section']['i']['index'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['start'], $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['iteration'] = 1;
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['iteration'] <= $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['total'];
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['index'] += $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['step'], $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['iteration']++):
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['rownum'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['iteration'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['index_prev'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['index'] - $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['index_next'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['index'] + $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['first']      = ($_smarty_tpl->tpl_vars['smarty']->value['section']['i']['iteration'] == 1);
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['last']       = ($_smarty_tpl->tpl_vars['smarty']->value['section']['i']['iteration'] == $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['total']);
?>
                        <tr class="success">
                            <td width="250"><?php echo $_smarty_tpl->tpl_vars['nomeAdm']->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']];?>
</td>
                            <td>
                        <center>
                            <a class="btn btn-info  btn-xs" href="altera_usuario.php?user=<?php echo $_smarty_tpl->tpl_vars['idAdm']->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']];?>
"><span class="glyphicon glyphicon-edit"></span> Alterar</a>
                            <a class="btn btn-danger  btn-xs" id="excluir" onclick="excluirUsuario(<?php echo $_smarty_tpl->tpl_vars['idAdm']->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']];?>
)"><span class="glyphicon glyphicon-remove"></span> Excluir</a>
                        </center>
                        </td>
                        </tr>
                    <?php endfor; endif; ?>
                </table>
            </div>
        </div>
    </div>
</div>

<?php }} ?>