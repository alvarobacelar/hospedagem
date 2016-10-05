<?php /* Smarty version Smarty-3.1.13, created on 2015-08-18 01:04:59
         compiled from "./templates/paginas/rel_nome_visitante.tpl" */ ?>
<?php /*%%SmartyHeaderCode:5148932455539b39a85e758-70779032%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '26cce2a2eeabf07bf7a402b01c5a912da542736f' => 
    array (
      0 => './templates/paginas/rel_nome_visitante.tpl',
      1 => 1439856297,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '5148932455539b39a85e758-70779032',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_5539b39a8d73a9_33467670',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5539b39a8d73a9_33467670')) {function content_5539b39a8d73a9_33467670($_smarty_tpl) {?><div class="container theme-showcase" role="main">

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
</div><?php }} ?>