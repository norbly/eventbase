<?php
/* Smarty version 3.1.32, created on 2018-06-12 19:34:39
  from '/var/www/html/eventbase/templates/register.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32',
  'unifunc' => 'content_5b20042f513150_45394699',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '41ea713ec61edc89abc90967c70f7f456afb7c57' => 
    array (
      0 => '/var/www/html/eventbase/templates/register.html',
      1 => 1528824876,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5b20042f513150_45394699 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->smarty->ext->configLoad->_loadConfigFile($_smarty_tpl, "./lang/".((string)$_smarty_tpl->tpl_vars['lang']->value).".conf", "register", 0);
?>

<form action="">
    <span><?php echo $_smarty_tpl->smarty->ext->configLoad->_getConfigVariable($_smarty_tpl, 'enter_email');?>
:</span><input type="email" name="" id=""><br>
    <span><?php echo $_smarty_tpl->smarty->ext->configLoad->_getConfigVariable($_smarty_tpl, 'enter_password');?>
</span><input type="password" name="" id=""><br>
    <input type="submit" value="<?php echo $_smarty_tpl->smarty->ext->configLoad->_getConfigVariable($_smarty_tpl, 'register');?>
">
</form><?php }
}
