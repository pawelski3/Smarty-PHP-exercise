<?php
/* Smarty version 3.1.30, created on 2019-01-10 19:46:09
  from "C:\xampp\htdocs\smarty2\view\index.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5c3792f1a43085_07838161',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '8976968c45de7265a98653e487e6fe8c6ec0c7c3' => 
    array (
      0 => 'C:\\xampp\\htdocs\\smarty2\\view\\index.tpl',
      1 => 1547145968,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5c3792f1a43085_07838161 (Smarty_Internal_Template $_smarty_tpl) {
?>
<html>
<head>
<title><?php echo $_smarty_tpl->tpl_vars['site_title']->value;?>
</title>
<style>
body{
background-color:white;
color: black;
}


</style>



</head>

<body>
<h2><?php echo $_smarty_tpl->tpl_vars['text']->value;?>
</h2>
Obecna godzina to: <?php echo $_smarty_tpl->tpl_vars['time']->value;?>

<br /><br />
Twoja wersja biblioteki gd to: <?php echo $_smarty_tpl->tpl_vars['gd']->value;?>

<?php echo $_smarty_tpl->tpl_vars['br']->value;?>

cos to jest <?php echo $_smarty_tpl->tpl_vars['cos']->value;?>

	<div>
		<?php $_smarty_tpl->_subTemplateRender(((string)$_smarty_tpl->tpl_vars['strona']->value).".tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
?>

	
	
	</div>
	
klik<a href="index.php?cm=something"> klikaj</a>	
Get(cm)=<?php echo $_smarty_tpl->tpl_vars['essen']->value;?>
	

<br><br>
zmiana pliku<a href="index.php?load=text2"> klikaj</a>	
	




<br /><br />
<?php echo $_smarty_tpl->tpl_vars['footer']->value;?>

</body>
</html><?php }
}
