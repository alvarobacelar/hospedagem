<?php /* Smarty version Smarty-3.1.13, created on 2015-08-17 22:45:56
         compiled from "./templates/paginas/visita_cadastradas.tpl" */ ?>
<?php /*%%SmartyHeaderCode:64845986655d28df68b7628-50253709%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'c310657efe90d737f193b57f79e3e45c0336c549' => 
    array (
      0 => './templates/paginas/visita_cadastradas.tpl',
      1 => 1439862343,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '64845986655d28df68b7628-50253709',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_55d28df68c5aa4_16311503',
  'variables' => 
  array (
    'idVis' => 0,
    'foto' => 0,
    'nomeVis' => 0,
    'hora' => 0,
    'quemVis' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_55d28df68c5aa4_16311503')) {function content_55d28df68c5aa4_16311503($_smarty_tpl) {?><div class="container theme-showcase" role="main">

    <div class="panel panel-default">

        <div class="panel-heading">

            <h2 class="panel-title">Pessoa já cadastrada</h2>
        </div>
        

        <div class="panel-body">

            <table class="table table-bordered table-hover table-striped">
                <th><center>Id</center></th><th><center>Nome</center></th><th><center>Foto</center></th><th><center>Hora de chegada</center></th><th><center>Quem Visita</center></th><th><center>Opção</center></th>

                <tr class="success">
                    <td> <?php echo $_smarty_tpl->tpl_vars['idVis']->value;?>
 </td>
                    <td> <img src="<?php echo $_smarty_tpl->tpl_vars['foto']->value;?>
" alt="Foto Pessoa" title="Foto" /> </td>
                    <td> <?php echo $_smarty_tpl->tpl_vars['nomeVis']->value;?>
 </td>
                    <td><center> <?php echo $_smarty_tpl->tpl_vars['hora']->value;?>
</center> </td>
                <td> <?php echo $_smarty_tpl->tpl_vars['quemVis']->value;?>
 </td>
                <td> <a class="btn btn-mini btn-danger" onclick="desativarVisita(<?php echo $_smarty_tpl->tpl_vars['idVis']->value;?>
)">Desativar Visita</a> </td>
                </tr>

            </table>
            <a href="cad_visita.php" class="btn" >Voltar</a>
        </div>
    </div>
</div>
<?php }} ?>