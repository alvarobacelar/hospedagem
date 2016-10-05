<?php /* Smarty version Smarty-3.1.13, created on 2015-08-23 18:16:44
         compiled from "./templates/paginas/rel_data.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1040154305539aefe2cb6c0-11340389%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '9ae25dc6919a4f9c0739c0e540592ca176e169ce' => 
    array (
      0 => './templates/paginas/rel_data.tpl',
      1 => 1440115911,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1040154305539aefe2cb6c0-11340389',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_5539aefe302234_56776608',
  'variables' => 
  array (
    'data' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5539aefe302234_56776608')) {function content_5539aefe302234_56776608($_smarty_tpl) {?>
<div class="container theme-showcase" role="main">
    <div class="panel panel-primary">
        <div class="panel-heading">
            <h2 class="panel-title">Pesquisar por data</h2>
        </div>
        <div class="panel-body">

            <div class="row">

                <div class="col-xs-4">
                    <form action="relatorioData.php" method="post" name="dados" class="form-horizontal" role="form">

                        <div class="form-group">
                            <label class="col-sm-4 control-label" for="relData">Data Inicial</label>
                            <div class="col-sm-6">
                                <input id="relData1" name="relData1" type="text" title="Data Inicial" class="form-control" required="" maxlength="150" value="" autocomplete="on" placeholder="Data Inicial" />
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-sm-4 control-label" for="relData2">Data Final</label>
                            <div class="col-sm-6">
                                <input id="relData2" name="relData2" type="text" title="Data Final" class="form-control" required="" maxlength="150" value="" autocomplete="on" placeholder="Data Inicial" />
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-sm-offset-4 col-sm-6">
                                <button type="submit" onclick="this.form.target = '_blank';
                                        return true;" class="btn btn-primary ">Confirmar <span class="glyphicon glyphicon-share"></span></button>
                            </div>
                        </div>
                    </form>

                </div>



                <div class="col-xs-6">

                    <div class="alert alert-warning" role="alert">
                        Coloque a data inicial e a data final para realizar a pesquisa. <br/>
                        Será gerado um relatorio com as visitas na nesta data.<br /><br />
                        <strong><big>Data de hoje: <?php echo $_smarty_tpl->tpl_vars['data']->value;?>
<big></strong>

                                    </div>
                                    </div>

                                    </div>
                                    </div>
                                    </div>
                                    </div>



<?php }} ?>