<?php /* Smarty version Smarty-3.1.13, created on 2015-08-23 14:23:31
         compiled from "./templates/admin/admin.tpl" */ ?>
<?php /*%%SmartyHeaderCode:112360652355392353e219a4-65599973%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'e3fb53f18f47cee411c195dad9f89c582c84e32a' => 
    array (
      0 => './templates/admin/admin.tpl',
      1 => 1440350427,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '112360652355392353e219a4-65599973',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_55392353e55523_12657043',
  'variables' => 
  array (
    'existe' => 0,
    'idVis' => 0,
    'dias' => 0,
    'foto' => 0,
    'nomeVis' => 0,
    'cidade' => 0,
    'estado' => 0,
    'data' => 0,
    'hora' => 0,
    'previsaoSaida' => 0,
    'obs' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_55392353e55523_12657043')) {function content_55392353e55523_12657043($_smarty_tpl) {?>
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
                <?php if ($_smarty_tpl->tpl_vars['existe']->value=="SIM"){?> 

                        <th><center>Foto</center></th>
                        <th><center>Nome</center></th>
                        <th><center>Cidade</center></th>
                        <th><center>Data hora do cadastro</center></th>
                        <th><center>Previsão de saída</center></th>
                        <th><center>Observação</center></th>
                        <th><center>Opção</center></th>
                            <?php if (isset($_smarty_tpl->tpl_vars['smarty']->value['section']['a'])) unset($_smarty_tpl->tpl_vars['smarty']->value['section']['a']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['a']['name'] = 'a';
$_smarty_tpl->tpl_vars['smarty']->value['section']['a']['loop'] = is_array($_loop=$_smarty_tpl->tpl_vars['idVis']->value) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$_smarty_tpl->tpl_vars['smarty']->value['section']['a']['show'] = true;
$_smarty_tpl->tpl_vars['smarty']->value['section']['a']['max'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['a']['loop'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['a']['step'] = 1;
$_smarty_tpl->tpl_vars['smarty']->value['section']['a']['start'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['a']['step'] > 0 ? 0 : $_smarty_tpl->tpl_vars['smarty']->value['section']['a']['loop']-1;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['a']['show']) {
    $_smarty_tpl->tpl_vars['smarty']->value['section']['a']['total'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['a']['loop'];
    if ($_smarty_tpl->tpl_vars['smarty']->value['section']['a']['total'] == 0)
        $_smarty_tpl->tpl_vars['smarty']->value['section']['a']['show'] = false;
} else
    $_smarty_tpl->tpl_vars['smarty']->value['section']['a']['total'] = 0;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['a']['show']):

            for ($_smarty_tpl->tpl_vars['smarty']->value['section']['a']['index'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['a']['start'], $_smarty_tpl->tpl_vars['smarty']->value['section']['a']['iteration'] = 1;
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['a']['iteration'] <= $_smarty_tpl->tpl_vars['smarty']->value['section']['a']['total'];
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['a']['index'] += $_smarty_tpl->tpl_vars['smarty']->value['section']['a']['step'], $_smarty_tpl->tpl_vars['smarty']->value['section']['a']['iteration']++):
$_smarty_tpl->tpl_vars['smarty']->value['section']['a']['rownum'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['a']['iteration'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['a']['index_prev'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['a']['index'] - $_smarty_tpl->tpl_vars['smarty']->value['section']['a']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['a']['index_next'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['a']['index'] + $_smarty_tpl->tpl_vars['smarty']->value['section']['a']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['a']['first']      = ($_smarty_tpl->tpl_vars['smarty']->value['section']['a']['iteration'] == 1);
$_smarty_tpl->tpl_vars['smarty']->value['section']['a']['last']       = ($_smarty_tpl->tpl_vars['smarty']->value['section']['a']['iteration'] == $_smarty_tpl->tpl_vars['smarty']->value['section']['a']['total']);
?>
                                <?php if ($_smarty_tpl->tpl_vars['dias']->value[$_smarty_tpl->getVariable('smarty')->value['section']['a']['index']]==2){?>
                                <tr class="warning">
                                    <td width="100"> <img src="<?php echo $_smarty_tpl->tpl_vars['foto']->value[$_smarty_tpl->getVariable('smarty')->value['section']['a']['index']];?>
" alt="Foto Pessoa" width="120" title="<?php echo $_smarty_tpl->tpl_vars['nomeVis']->value[$_smarty_tpl->getVariable('smarty')->value['section']['a']['index']];?>
" /> </td>
                                    <td width="300"> <?php echo $_smarty_tpl->tpl_vars['nomeVis']->value[$_smarty_tpl->getVariable('smarty')->value['section']['a']['index']];?>
 </td>
                                    <td width="100"> <?php echo $_smarty_tpl->tpl_vars['cidade']->value[$_smarty_tpl->getVariable('smarty')->value['section']['a']['index']];?>
-<?php echo $_smarty_tpl->tpl_vars['estado']->value[$_smarty_tpl->getVariable('smarty')->value['section']['a']['index']];?>
 </td>
                                    <td width="150"><center><?php echo $_smarty_tpl->tpl_vars['data']->value[$_smarty_tpl->getVariable('smarty')->value['section']['a']['index']];?>
 <br> <?php echo $_smarty_tpl->tpl_vars['hora']->value[$_smarty_tpl->getVariable('smarty')->value['section']['a']['index']];?>
</center> </td>
                                <td width="150"> <center><?php echo $_smarty_tpl->tpl_vars['previsaoSaida']->value[$_smarty_tpl->getVariable('smarty')->value['section']['a']['index']];?>
 <br> <i><?php echo $_smarty_tpl->tpl_vars['dias']->value[$_smarty_tpl->getVariable('smarty')->value['section']['a']['index']];?>
 dias</i></center> </td>
                                <td width="160"> <?php echo $_smarty_tpl->tpl_vars['obs']->value[$_smarty_tpl->getVariable('smarty')->value['section']['a']['index']];?>
 </td>
                                <td width="50"> <a class="btn btn-xs btn-danger" onclick="desativarVisita(<?php echo $_smarty_tpl->tpl_vars['idVis']->value[$_smarty_tpl->getVariable('smarty')->value['section']['a']['index']];?>
,<?php echo $_smarty_tpl->tpl_vars['dias']->value[$_smarty_tpl->getVariable('smarty')->value['section']['a']['index']];?>
)"><span class="glyphicon glyphicon-remove"></span> Finalizar Hosp.</a> </td>
                                </tr>
                            <?php }elseif($_smarty_tpl->tpl_vars['dias']->value[$_smarty_tpl->getVariable('smarty')->value['section']['a']['index']]<=1){?>
                                <tr class="danger">
                                    <td width="100"> <img src="<?php echo $_smarty_tpl->tpl_vars['foto']->value[$_smarty_tpl->getVariable('smarty')->value['section']['a']['index']];?>
" alt="Foto Pessoa" width="120" title="<?php echo $_smarty_tpl->tpl_vars['nomeVis']->value[$_smarty_tpl->getVariable('smarty')->value['section']['a']['index']];?>
" /> </td>
                                    <td width="300"> <?php echo $_smarty_tpl->tpl_vars['nomeVis']->value[$_smarty_tpl->getVariable('smarty')->value['section']['a']['index']];?>
 </td>
                                    <td width="100"> <?php echo $_smarty_tpl->tpl_vars['cidade']->value[$_smarty_tpl->getVariable('smarty')->value['section']['a']['index']];?>
-<?php echo $_smarty_tpl->tpl_vars['estado']->value[$_smarty_tpl->getVariable('smarty')->value['section']['a']['index']];?>
 </td>
                                    <td width="150"><center><?php echo $_smarty_tpl->tpl_vars['data']->value[$_smarty_tpl->getVariable('smarty')->value['section']['a']['index']];?>
 <br> <?php echo $_smarty_tpl->tpl_vars['hora']->value[$_smarty_tpl->getVariable('smarty')->value['section']['a']['index']];?>
</center> </td>
                                <td width="150"> <center><?php echo $_smarty_tpl->tpl_vars['previsaoSaida']->value[$_smarty_tpl->getVariable('smarty')->value['section']['a']['index']];?>
 <br> <strong><i><?php echo $_smarty_tpl->tpl_vars['dias']->value[$_smarty_tpl->getVariable('smarty')->value['section']['a']['index']];?>
 dia</i></strong></center> </td>
                                <td width="160"> <?php echo $_smarty_tpl->tpl_vars['obs']->value[$_smarty_tpl->getVariable('smarty')->value['section']['a']['index']];?>
 </td>
                                <td width="50"> <a class="btn btn-xs btn-danger" onclick="desativarVisita(<?php echo $_smarty_tpl->tpl_vars['idVis']->value[$_smarty_tpl->getVariable('smarty')->value['section']['a']['index']];?>
,<?php echo $_smarty_tpl->tpl_vars['dias']->value[$_smarty_tpl->getVariable('smarty')->value['section']['a']['index']];?>
)"><span class="glyphicon glyphicon-remove"></span> Finalizar Hosp.</a> </td>
                                </tr>
                            <?php }else{ ?>
                                <tr class="success">
                                    <td width="100"> <img src="<?php echo $_smarty_tpl->tpl_vars['foto']->value[$_smarty_tpl->getVariable('smarty')->value['section']['a']['index']];?>
" alt="Foto Pessoa" width="120" title="<?php echo $_smarty_tpl->tpl_vars['nomeVis']->value[$_smarty_tpl->getVariable('smarty')->value['section']['a']['index']];?>
" /> </td>
                                    <td width="300"> <?php echo $_smarty_tpl->tpl_vars['nomeVis']->value[$_smarty_tpl->getVariable('smarty')->value['section']['a']['index']];?>
 </td>
                                    <td width="100"> <?php echo $_smarty_tpl->tpl_vars['cidade']->value[$_smarty_tpl->getVariable('smarty')->value['section']['a']['index']];?>
-<?php echo $_smarty_tpl->tpl_vars['estado']->value[$_smarty_tpl->getVariable('smarty')->value['section']['a']['index']];?>
 </td>
                                    <td width="150"><center><?php echo $_smarty_tpl->tpl_vars['data']->value[$_smarty_tpl->getVariable('smarty')->value['section']['a']['index']];?>
 <br> <?php echo $_smarty_tpl->tpl_vars['hora']->value[$_smarty_tpl->getVariable('smarty')->value['section']['a']['index']];?>
</center> </td>
                                <td width="150"> <center><?php echo $_smarty_tpl->tpl_vars['previsaoSaida']->value[$_smarty_tpl->getVariable('smarty')->value['section']['a']['index']];?>
 <br> <i><?php echo $_smarty_tpl->tpl_vars['dias']->value[$_smarty_tpl->getVariable('smarty')->value['section']['a']['index']];?>
 dias</i></center> </td>
                                <td width="160"> <?php echo $_smarty_tpl->tpl_vars['obs']->value[$_smarty_tpl->getVariable('smarty')->value['section']['a']['index']];?>
 </td>
                                <td width="50"> <a class="btn btn-xs btn-danger" onclick="desativarVisita(<?php echo $_smarty_tpl->tpl_vars['idVis']->value[$_smarty_tpl->getVariable('smarty')->value['section']['a']['index']];?>
,<?php echo $_smarty_tpl->tpl_vars['dias']->value[$_smarty_tpl->getVariable('smarty')->value['section']['a']['index']];?>
)"><span class="glyphicon glyphicon-remove"></span> Finalizar Hosp.</a> </td>
                                </tr>
                            <?php }?>
                        <?php endfor; else: ?>
                            Não há hospedes cadastrados
                        <?php endif; ?>
                    <?php }?>
                    <?php if ($_smarty_tpl->tpl_vars['existe']->value=="NAO"){?>
                        <td><strong>Não há hospedes cadastrados</strong></td>
                    <?php }?>

                </table>
                </fieldset>

            </div>

        </div>
    </div><?php }} ?>