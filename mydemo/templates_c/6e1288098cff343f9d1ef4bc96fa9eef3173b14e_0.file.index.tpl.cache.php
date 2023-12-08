<?php
/* Smarty version 3.1.34-dev-7, created on 2020-05-11 00:34:17
  from 'C:\xampp\htdocs\smarty\mydemo\templates\basic_tmp\index.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5eb881699a7332_69158579',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '6e1288098cff343f9d1ef4bc96fa9eef3173b14e' => 
    array (
      0 => 'C:\\xampp\\htdocs\\smarty\\mydemo\\templates\\basic_tmp\\index.tpl',
      1 => 1589149897,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5eb881699a7332_69158579 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->compiled->nocache_hash = '3535645265eb881699546f3_76192910';
?>

<?php $_smarty_tpl->_subTemplateRender(((string)$_smarty_tpl->tpl_vars['theme']->value)."/layout/header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, $_smarty_tpl->cache_lifetime, array('title'=>'foo'), 0, true);
?>

<?php $_smarty_tpl->_subTemplateRender(((string)$_smarty_tpl->tpl_vars['theme']->value)."/pages/".((string)$_smarty_tpl->tpl_vars['pageName']->value).".tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, $_smarty_tpl->cache_lifetime, array(), 0, true);
?>

<?php $_smarty_tpl->_subTemplateRender(((string)$_smarty_tpl->tpl_vars['theme']->value)."/layout/footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, $_smarty_tpl->cache_lifetime, array(), 0, true);
}
}
