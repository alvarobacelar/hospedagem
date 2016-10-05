<?php /* Smarty version Smarty-3.1.13, created on 2015-08-25 14:49:56
         compiled from "/home/www/html/hospedagem/templates/layout_login.tpl" */ ?>
<?php /*%%SmartyHeaderCode:90741310755ce42082c9f91-07724339%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'b0834abb9323bda3f7c3ad2d4033cf24a098fc61' => 
    array (
      0 => '/home/www/html/hospedagem/templates/layout_login.tpl',
      1 => 1440524993,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '90741310755ce42082c9f91-07724339',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_55ce4208362d15_92077453',
  'variables' => 
  array (
    'titulo' => 0,
    'conteudoLogin' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_55ce4208362d15_92077453')) {function content_55ce4208362d15_92077453($_smarty_tpl) {?>﻿<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8" />
        <title> <?php echo $_smarty_tpl->tpl_vars['titulo']->value;?>
 </title>

        
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="bootstrap/css/bootstrap-responsive.css" rel="stylesheet"> <!-- layout responsive -->
        <link href="lib/bootstrap-3.1.1-dist/css/bootstrap.min.css" rel="stylesheet" media="screen">
        

        <link rel="stylesheet" href="css/login_.css" />
        <link rel="stylesheet" href="css/geral_.css" />
        <link rel="stylesheet" href="css/layout_.css" />
        <script src="script/valida_admin.js" type="text/ecmascript">  </script>

        <link rel="SHORTCUT ICON" href="img/img-nav.jpg" />

    </head>
    <body>

        <div class="navbar navbar-default navbar-fixed-top" role="navigation">
            <div class="container">
                <div class="navbar-header">
                    <a class="navbar-brand" href="#"><strong>Pensão Genivaldo</strong> </a>
                    <p class="navbar-text">Sistema de Cadastro de Hospedagem</p>   
                </div>

            </div><!--/.nav-collapse -->
        </div>
        <!--
        <div id="topo-log">
            <div id="cabecalho"><a href="/cadvision"> <img src="img/logo.png" /> </a>
                <span id="span_cabecalho"> Cadastro de Visitantes Online </span>
            </div>
        </div>
        -->
        

        <!-- ################CONTEUDO GERAL################## -->
        
        <div class="container espaco">

        <?php echo $_smarty_tpl->getSubTemplate ($_smarty_tpl->tpl_vars['conteudoLogin']->value, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
 
        ﻿
        </div>
        <!--################FIM DO CONTEÚDO GERAL##############-->        

        <div id="clear"></div>
        <div id="rodape2">
            © Pensão Genivaldo Geni - (Carreirinha) 
            <p>
                Desenvolvido por - <a href="http://www.alvarobacelar.com" target="_blank">Álvaro Bacelar</a><br>
                Versão 2.0.1
            </p>
        </div>

        <script src="bootstrap/jquery-latest.js"></script>
        <script src="bootstrap/js/bootstrap.min.js"></script>
        <script src="script/jQuery/jquery-1.8.3.min.js" type="text/ecmascript">  </script>
        <script src="script/jQuery/jquery.js" type="text/ecmascript">  </script>
        <script src="script/jQuery/ajax.js" type="text/ecmascript">  </script>
        <script src="script/jQuery/jquery.maskedinput.min.js" type="text/ecmascript">  </script>

    </body>

</html><?php }} ?>