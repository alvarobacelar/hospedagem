<?php /* Smarty version Smarty-3.1.13, created on 2015-08-20 20:38:34
         compiled from "./templates/layout.tpl" */ ?>
<?php /*%%SmartyHeaderCode:34924411255392353d61543-32499156%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '9e6b070c8cb75a2b091a59dcbc2131b5d5a97bf5' => 
    array (
      0 => './templates/layout.tpl',
      1 => 1440113872,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '34924411255392353d61543-32499156',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_55392353e1ef66_38130114',
  'variables' => 
  array (
    'titulo' => 0,
    'menu' => 0,
    'login' => 0,
    'local' => 0,
    'conteudo' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_55392353e1ef66_38130114')) {function content_55392353e1ef66_38130114($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_capitalize')) include '/home/www/html/hospedagem/smarty/plugins/modifier.capitalize.php';
?><!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8" />
        <title> <?php echo smarty_modifier_capitalize($_smarty_tpl->tpl_vars['titulo']->value);?>
 </title>

        <!-- PHOTO_BOOTH -->
        <meta name="description" content="Webcam Photo Booth made with ActionScript 3" />
        <meta name="keywords" content="photo, photo booth, image, flash, actionscript," />
        

        
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="bootstrap/css/bootstrap-responsive.css" rel="stylesheet"> 
        <link href="lib/bootstrap-3.1.1-dist/css/bootstrap.min.css" rel="stylesheet" media="screen">
        

        <link rel="stylesheet" href="css/layout_.css" />
        <link rel="stylesheet" href="css/login_.css" />
        <link rel="stylesheet" href="css/geral_.css" />
        <link rel="stylesheet" href="css/cad_visitante_.css" />
        <link rel="stylesheet" href="css/admin_.css" />

        <script src="lib/photo_booth/swfobject.js" language="javascript"></script> <!-- SCRIPT DO PHOTO_BOOTH -->

        <link rel="SHORTCUT ICON" href="img/img-nav.jpg" />

        <!--[if IE 6]>  
            <script>
                alert (Utilize outro navegador);
            </script>
        <![endif]--> 


    </head>

    <body>


        
        <?php if ($_smarty_tpl->tpl_vars['menu']->value=="Administrador"){?>

            <div class="navbar navbar-default navbar-fixed-top" role="navigation">
                <div class="container-fluid">
                    <!-- Brand and toggle get grouped for better mobile display -->
                    <div class="navbar-header">
                        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                            <span class="sr-only">Toggle navigation</span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>
                        <a class="navbar-brand" title="Home" href="index.php"><strong><span class="glyphicon glyphicon-home"></span> Pensão Genivaldo</strong> </a>
                    </div>

                    <!-- Collect the nav links, forms, and other content for toggling -->
                    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                        <ul class="nav navbar-nav">
                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown">Gerenciar Usuários <b class="caret"></b></a>
                                <ul class="dropdown-menu">
                                    <li><a href="cadastra_novo.php" title="Cadastrar Novo Usuário"> Novo Usuário </a></li>
                                    <li><a href="log_acesso.php" title="Cadastrar Novo Usuário"> Log de Acesso </a></li>
                                </ul>
                            </li>
                            <li><a href="cad_visita.php" title="Cadastrar Visitante"> Cadastrar Hospedagem </a></li>
                            <li><a href="pessoas_cadastradas.php" title="Pessoas Cadastradas"> Hospedes Cadastradas </a></li>
                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown">Relatorios de Hospedagem <b class="caret"></b></a>
                                <ul class="dropdown-menu">
                                    <li><a href="gerarRelatorios.php?rel=diario" target="_blanck">Relatório Diário </a></li>
                                    <li><a href="gerarRelatorios.php?rel=data"> Por Data </a></li>
                                    <li><a href="gerarRelatorios.php?rel=nome"> Por Nome do Hospede</a></li>
                                </ul>
                            </li>
                        </ul>

                        <ul class="nav navbar-nav navbar-right">

                            <?php if (isset($_smarty_tpl->tpl_vars['login']->value)){?>
                                <li class="dropdown">
                                    <a href="#" class="dropdown-toggle" data-toggle="dropdown"><span class="glyphicon glyphicon-user"></span> <?php echo $_smarty_tpl->tpl_vars['login']->value;?>
 <b class="caret"></b></a>
                                    <ul class="dropdown-menu">
                                        <li><a href="include/funcoes/logaut.php"><span class="glyphicon glyphicon-off"></span> Sair</a></a></li>

                                        
                                    </ul>
                                </li>
                            <?php }?>
                        </ul>

                    </div><!-- /.navbar-collapse -->
                </div><!-- /.container-fluid -->
            </div>﻿

        <?php }?>


        <?php if ($_smarty_tpl->tpl_vars['menu']->value=="Usuario"){?>
            


            <nav class="navbar navbar-default navbar-fixed-top" role="navigation">
                <div class="container-fluid">
                    <!-- Brand and toggle get grouped for better mobile display -->
                    <div class="navbar-header">
                        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                            <span class="sr-only">Toggle navigation</span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>
                        <a class="navbar-brand" title="Home" href="index.php"><strong><span class="glyphicon glyphicon-home"></span> Pensão Genivaldo</strong></a>
                    </div>

                    <!-- Collect the nav links, forms, and other content for toggling -->
                    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                        <ul class="nav navbar-nav">
                            <!-- OPÇÕES DE MENU -->
                        </ul>

                        <ul class="nav navbar-nav navbar-right">

                            <?php if (isset($_smarty_tpl->tpl_vars['login']->value)){?>
                                <li class="dropdown">
                                    <a href="#" class="dropdown-toggle" data-toggle="dropdown"><span class="glyphicon glyphicon-user"></span> <?php echo $_smarty_tpl->tpl_vars['login']->value;?>
 <b class="caret"></b></a>
                                    <ul class="dropdown-menu">
                                        <li><a href="include/funcoes/logaut.php"><span class="glyphicon glyphicon-off"></span> Sair</a></a></li>
                                    </ul>
                                </li>
                            <?php }?>
                        </ul>
                    </div><!-- /.navbar-collapse -->
                </div><!-- /.container-fluid -->
            </nav>
        <?php }?> 

        <?php if ($_smarty_tpl->tpl_vars['menu']->value=="Supervisor"){?>
            
            <nav class="navbar navbar-default navbar-fixed-top" role="navigation">
                <div class="container-fluid">
                    <!-- Brand and toggle get grouped for better mobile display -->
                    <div class="navbar-header">
                        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                            <span class="sr-only">Toggle navigation</span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>
                        <a class="navbar-brand" title="Home" href="index.php"><strong><span class="glyphicon glyphicon-home"></span> Pensão Genivaldo</strong></a>
                    </div>

                    <!-- Collect the nav links, forms, and other content for toggling -->
                    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                        <ul class="nav navbar-nav">
                            <li><a href="cad_visita.php" title="Cadastrar Visitante"><strong> Cadastrar Hospedagem </strong></a></li>
                            <li><a href="pessoas_cadastradas.php" title="Pessoas Cadastradas"> Hospedes Cadastrados </a></li>
                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown">Relatorios de Hospedagem <b class="caret"></b></a>
                                <ul class="dropdown-menu">
                                    <li><a href="gerarRelatorios.php?rel=diario" target="_blanck">Relatório Diário</a></li>
                                    <li><a href="gerarRelatorios.php?rel=data"> Por Data </a></li>
                                    <li><a href="gerarRelatorios.php?rel=nome"> Por Nome do Hospede</a></li>
                                </ul>
                            </li>
                        </ul>
                        <ul class="nav navbar-nav navbar-right">

                            <?php if (isset($_smarty_tpl->tpl_vars['login']->value)){?>
                                <li class="dropdown">
                                    <a href="#" class="dropdown-toggle" data-toggle="dropdown"><span class="glyphicon glyphicon-user"></span> <?php echo $_smarty_tpl->tpl_vars['login']->value;?>
 <b class="caret"></b></a>
                                    <ul class="dropdown-menu">
                                        <li><a href="include/funcoes/logaut.php"><span class="glyphicon glyphicon-off"></span> Sair</a></a></li>
                                    </ul>
                                </li>
                            <?php }?>
                        </ul>
                    </div><!-- /.navbar-collapse -->
                </div><!-- /.container-fluid -->
            </nav>
        <?php }?>  


        <div id="tudo">

            <?php if ($_smarty_tpl->tpl_vars['local']->value!=''){?>
                <div class="local">
                    <ol class="breadcrumb">
                        <li>Voce está em: <?php echo $_smarty_tpl->tpl_vars['local']->value;?>
 </li>
                    </ol>
                </div>
            <?php }?>

            <div id="conteudo">
                <?php echo $_smarty_tpl->getSubTemplate ($_smarty_tpl->tpl_vars['conteudo']->value, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
 
            </div>

          

        </div> 


        <div id="rodapeHome">
            © Pensão Genivaldo Geni - (Carreirinha) 
            <p>
                Desenvolvido por - <a href="http://www.alvarobacelar.com" target="_blank">Álvaro Bacelar</a><br>
                Versão 2.0.1
            </p>
        </div>

        <script src="bootstrap/js/jquery-latest.js"></script>
        <script src="bootstrap/js/bootstrap.min.js"></script>
        <!-- JQUERY -->

        <script src="script/valida.js" type="text/ecmascript">  </script>
        <script src="script/ajax_cam.js" type="text/ecmascript">  </script>
        <script src="script/valida_admin.js" type="text/ecmascript">  </script>
        <script src="script/jQuery/jquery-1.8.3.min.js" type="text/ecmascript">  </script>
        <script src="script/jQuery/jquery.js" type="text/ecmascript">  </script>
        <script src="script/jQuery/ajax.js" type="text/ecmascript">  </script>
        <script src="script/jQuery/jquery.maskedinput.min.js" type="text/ecmascript">  </script>

    </body>
</html>
<?php }} ?>