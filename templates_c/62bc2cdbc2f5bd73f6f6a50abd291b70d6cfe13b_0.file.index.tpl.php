<?php
/* Smarty version 3.1.30, created on 2017-04-30 10:27:06
  from "C:\xampp\htdocs\smarty2\templates\index.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_59059fdabeb0c2_37920172',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '62bc2cdbc2f5bd73f6f6a50abd291b70d6cfe13b' => 
    array (
      0 => 'C:\\xampp\\htdocs\\smarty2\\templates\\index.tpl',
      1 => 1478004278,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_59059fdabeb0c2_37920172 (Smarty_Internal_Template $_smarty_tpl) {
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
