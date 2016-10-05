<?php /* Smarty version Smarty-3.1.13, created on 2015-08-25 20:22:34
         compiled from "./templates/paginas/relatorio_id.tpl" */ ?>
<?php /*%%SmartyHeaderCode:4001451555dcb3f0632ce1-69763783%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '7ac9bd36f77756cb6b7747808e55e73afeb341d2' => 
    array (
      0 => './templates/paginas/relatorio_id.tpl',
      1 => 1440530545,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '4001451555dcb3f0632ce1-69763783',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_55dcb3f0674ba6_63951210',
  'variables' => 
  array (
    'resultado' => 0,
    'dataChegada' => 0,
    'dataSaida' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_55dcb3f0674ba6_63951210')) {function content_55dcb3f0674ba6_63951210($_smarty_tpl) {?>﻿<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8" />
        
            <style>   
                .clearfix{*zoom:1;}.clearfix:before,.clearfix:after{display:table;content:"";line-height:0;}
                .clearfix:after{clear:both;}
                .hide-text{font:0/0 a;color:transparent;text-shadow:none;background-color:transparent;border:0;}
                .input-block-level{display:block;width:100%;min-height:30px;-webkit-box-sizing:border-box;-moz-box-sizing:border-box;box-sizing:border-box;}
                table{max-width:100%;background-color:transparent;border-collapse:collapse;border-spacing:0;}
                .table{width:100%;margin-bottom:20px;}.table th,.table td{padding:8px;line-height:20px;text-align:left;vertical-align:top;border-top:1px solid #dddddd;}
                .table th{font-weight:bold;}
                .table thead th{vertical-align:bottom;}
                .table caption+thead tr:first-child th,.table caption+thead tr:first-child td,.table colgroup+thead tr:first-child th,.table colgroup+thead tr:first-child td,.table thead:first-child tr:first-child th,.table thead:first-child tr:first-child td{border-top:0;}
                .table tbody+tbody{border-top:2px solid #dddddd;}
                .table-condensed th,.table-condensed td{padding:4px 5px;}
                .table-bordered{border:1px solid #dddddd;border-collapse:separate;*border-collapse:collapse;border-left:0;-webkit-border-radius:4px;-moz-border-radius:4px;border-radius:4px;}.table-bordered th,.table-bordered td{border-left:1px solid #dddddd;}
                .table-bordered caption+thead tr:first-child th,.table-bordered caption+tbody tr:first-child th,.table-bordered caption+tbody tr:first-child td,.table-bordered colgroup+thead tr:first-child th,.table-bordered colgroup+tbody tr:first-child th,.table-bordered colgroup+tbody tr:first-child td,.table-bordered thead:first-child tr:first-child th,.table-bordered tbody:first-child tr:first-child th,.table-bordered tbody:first-child tr:first-child td{border-top:0;}
                .table-bordered thead:first-child tr:first-child th:first-child,.table-bordered tbody:first-child tr:first-child td:first-child{-webkit-border-top-left-radius:4px;-moz-border-radius-topleft:4px;border-top-left-radius:4px;}
                .table-bordered thead:first-child tr:first-child th:last-child,.table-bordered tbody:first-child tr:first-child td:last-child{-webkit-border-top-right-radius:4px;-moz-border-radius-topright:4px;border-top-right-radius:4px;}
                .table-bordered thead:last-child tr:last-child th:first-child,.table-bordered tbody:last-child tr:last-child td:first-child,.table-bordered tfoot:last-child tr:last-child td:first-child{-webkit-border-bottom-left-radius:4px;-moz-border-radius-bottomleft:4px;border-bottom-left-radius:4px;}
                .table-bordered thead:last-child tr:last-child th:last-child,.table-bordered tbody:last-child tr:last-child td:last-child,.table-bordered tfoot:last-child tr:last-child td:last-child{-webkit-border-bottom-right-radius:4px;-moz-border-radius-bottomright:4px;border-bottom-right-radius:4px;}
                .table-bordered caption+thead tr:first-child th:first-child,.table-bordered caption+tbody tr:first-child td:first-child,.table-bordered colgroup+thead tr:first-child th:first-child,.table-bordered colgroup+tbody tr:first-child td:first-child{-webkit-border-top-left-radius:4px;-moz-border-radius-topleft:4px;border-top-left-radius:4px;}
                .table-bordered caption+thead tr:first-child th:last-child,.table-bordered caption+tbody tr:first-child td:last-child,.table-bordered colgroup+thead tr:first-child th:last-child,.table-bordered colgroup+tbody tr:first-child td:last-child{-webkit-border-top-right-radius:4px;-moz-border-radius-topright:4px;border-top-right-radius:4px;}
                .table-striped tbody tr:nth-child(odd) td,.table-striped tbody tr:nth-child(odd) th{background-color:#f9f9f9;}
                .table-hover tbody tr:hover td,.table-hover tbody tr:hover th{background-color:#f5f5f5;}
                table td[class*="span"],table th[class*="span"],.row-fluid table td[class*="span"],.row-fluid table th[class*="span"]{display:table-cell;float:none;margin-left:0;}
                .table td.span1,.table th.span1{float:none;width:44px;margin-left:0;}
                .table td.span2,.table th.span2{float:none;width:124px;margin-left:0;}
                .table td.span3,.table th.span3{float:none;width:204px;margin-left:0;}
                .table td.span4,.table th.span4{float:none;width:284px;margin-left:0;}
                .table td.span5,.table th.span5{float:none;width:364px;margin-left:0;}
                .table td.span6,.table th.span6{float:none;width:444px;margin-left:0;}
                .table td.span7,.table th.span7{float:none;width:524px;margin-left:0;}
                .table td.span8,.table th.span8{float:none;width:604px;margin-left:0;}
                .table td.span9,.table th.span9{float:none;width:684px;margin-left:0;}
                .table td.span10,.table th.span10{float:none;width:764px;margin-left:0;}
                .table td.span11,.table th.span11{float:none;width:844px;margin-left:0;}
                .table td.span12,.table th.span12{float:none;width:924px;margin-left:0;}
                .table tbody tr.success td{background-color:#dff0d8;}
                .table tbody tr.error td{background-color:#f2dede;}
                .table tbody tr.warning td{background-color:#fcf8e3;}
                .table tbody tr.info td{background-color:#d9edf7;}
                .table-hover tbody tr.success:hover td{background-color:#d0e9c6;}
                .table-hover tbody tr.error:hover td{background-color:#ebcccc;}
                .table-hover tbody tr.warning:hover td{background-color:#faf2cc;}
                .table-hover tbody tr.info:hover td{background-color:#c4e3f3;}
                .well{min-height:30px;padding:20px;margin:20px 0;background-color:#f5f5f5;border:1px solid #e3e3e3;-webkit-border-radius:4px;-moz-border-radius:4px;border-radius:4px;-webkit-box-shadow:inset 0 1px 1px rgba(0, 0, 0, 0.05);-moz-box-shadow:inset 0 1px 1px rgba(0, 0, 0, 0.05);box-shadow:inset 0 1px 1px rgba(0, 0, 0, 0.05);}.well blockquote{border-color:#ddd;border-color:rgba(0, 0, 0, 0.15);}
                .well-large{padding:4px;-webkit-border-radius:6px;-moz-border-radius:6px;border-radius:6px;}
                .well-small{padding:4px;color:#e9322d; -webkit-border-radius:3px;-moz-border-radius:3px;border-radius:3px;}
            </style>
            
    </head>
    <body><br>
        <div class="well">
            <h4><u>Relatório de Hospedagem</u></h4>
            <?php if (!empty($_smarty_tpl->tpl_vars['resultado']->value)){?>

                <p><strong>Cliente:</strong> <small><?php echo $_smarty_tpl->tpl_vars['resultado']->value->nome;?>
</small></p>
                <p><strong>Identidade:</strong> <small><?php echo $_smarty_tpl->tpl_vars['resultado']->value->rg;?>
</small> <strong>CPF:</strong> <small><?php echo $_smarty_tpl->tpl_vars['resultado']->value->cpf;?>
</small></p>
                <p><strong>Endereço:</strong> <small><?php echo $_smarty_tpl->tpl_vars['resultado']->value->endereco;?>
</small></p>
                <p><strong>Cidade:</strong> <small><?php echo $_smarty_tpl->tpl_vars['resultado']->value->cidade;?>
</small> <strong>Estado:</strong> <small><?php echo $_smarty_tpl->tpl_vars['resultado']->value->uf;?>
</small></p>
                <p><strong>Chegou:</strong> <small><?php echo $_smarty_tpl->tpl_vars['dataChegada']->value;?>
</small> <strong>Saiu:</strong> <small><?php echo $_smarty_tpl->tpl_vars['dataSaida']->value;?>
</small></p>
                <p><strong>Total de diárias:</strong> <small><?php echo $_smarty_tpl->tpl_vars['resultado']->value->diaria_saida;?>
</small></p>
                <p><strong>Particular:</strong> <small><?php echo $_smarty_tpl->tpl_vars['resultado']->value->particular;?>
</small></p>
                <p><strong>Prefeitura:</strong> <small><?php echo $_smarty_tpl->tpl_vars['resultado']->value->prefeitura;?>
</small></p>
                <p><strong>Débito:</strong> <small><?php echo $_smarty_tpl->tpl_vars['resultado']->value->debito;?>
</small></p>
                <p><strong>Observações:</strong> <small><?php echo $_smarty_tpl->tpl_vars['resultado']->value->visitante_obs;?>
</small></p>


            <?php }else{ ?>

                <h2>Houve algum erro, nenhum hospede encontrado</h2>

            <?php }?>
        </div>
    </body>
</html><?php }} ?>