<?php
/* Smarty version 3.1.32, created on 2018-06-12 18:45:48
  from '/var/www/html/eventbase/templates/navigation.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32',
  'unifunc' => 'content_5b1ff8bcdaeea7_98734527',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '1df9e3ef2aacf57a689fae5ce781b0f0aa8e3746' => 
    array (
      0 => '/var/www/html/eventbase/templates/navigation.html',
      1 => 1528821945,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5b1ff8bcdaeea7_98734527 (Smarty_Internal_Template $_smarty_tpl) {
?><ul>
    <li><a href="<?php echo $_smarty_tpl->tpl_vars['SCRIPT_NAME']->value;?>
?action=home&#38;lang=<?php echo $_smarty_tpl->tpl_vars['lang']->value;?>
">home</a></li>
    <li><a href="<?php echo $_smarty_tpl->tpl_vars['SCRIPT_NAME']->value;?>
?action=signin&#38;lang=<?php echo $_smarty_tpl->tpl_vars['lang']->value;?>
">sign in</a></li>
    <li><a href="<?php echo $_smarty_tpl->tpl_vars['SCRIPT_NAME']->value;?>
?action=register&#38;lang=<?php echo $_smarty_tpl->tpl_vars['lang']->value;?>
">register</a></li>
    <li><a href="<?php echo $_smarty_tpl->tpl_vars['SCRIPT_NAME']->value;?>
?action=<?php echo $_smarty_tpl->tpl_vars['action']->value;?>
&#38;lang=de">deutsch</a></li>
    <li><a href="<?php echo $_smarty_tpl->tpl_vars['SCRIPT_NAME']->value;?>
?action=<?php echo $_smarty_tpl->tpl_vars['action']->value;?>
&#38;lang=en">english</a></li>   
</ul>
<?php }
}
