<?php
/* Smarty version 3.1.32, created on 2018-06-12 19:24:00
  from '/var/www/html/eventbase/templates/index.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32',
  'unifunc' => 'content_5b2001b0e7b405_80258763',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '9219547a3a6940c6361c118edd9e36926bba2cb4' => 
    array (
      0 => '/var/www/html/eventbase/templates/index.html',
      1 => 1528824238,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:modules/head.html' => 1,
    'file:modules/navigation.html' => 1,
    'file:modules/footer.html' => 1,
  ),
),false)) {
function content_5b2001b0e7b405_80258763 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->smarty->ext->configLoad->_loadConfigFile($_smarty_tpl, "./lang/".((string)$_smarty_tpl->tpl_vars['lang']->value).".conf", null, 0);
?>

<?php $_smarty_tpl->_subTemplateRender("file:modules/head.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
$_smarty_tpl->_subTemplateRender("file:modules/navigation.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
$_smarty_tpl->_subTemplateRender(((string)$_smarty_tpl->tpl_vars['current_page']->value), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
$_smarty_tpl->_subTemplateRender("file:modules/footer.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
