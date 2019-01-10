<?php
/* Smarty version 3.1.30, created on 2016-11-01 13:45:04
  from "C:\xampp\htdocs\smarty\templates\index.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_58188e502d7da0_51206314',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '3e8fe154245a2fdaea9fea4e0663b1125dfb722b' => 
    array (
      0 => 'C:\\xampp\\htdocs\\smarty\\templates\\index.tpl',
      1 => 1478004278,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_58188e502d7da0_51206314 (Smarty_Internal_Template $_smarty_tpl) {
?>
<html>
<head>
<title><?php echo $_smarty_tpl->tpl_vars['site_title']->value;?>
</title>
<style>
body{
background-color:black;
color: white;
}


</style>



</head>

<body>
<h2><?php echo $_smarty_tpl->tpl_vars['text']->value;?>
</h2>
Obecna godzina to: <?php echo $_smarty_tpl->tpl_vars['time']->value;?>

<br /><br />
Twoja wersja biblioteki gd to: <?php echo $_smarty_tpl->tpl_vars['gd']->value;?>




<br /><br />
<?php echo $_smarty_tpl->tpl_vars['footer']->value;?>

</body>
</html><?php }
}
