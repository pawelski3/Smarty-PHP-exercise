<?php
/* Smarty version 3.1.30, created on 2019-01-10 19:49:07
  from "C:\xampp\htdocs\smarty2\view\index2.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5c3793a333adb6_90170092',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '6de6e8b74eb1da75f08ec21f37c62acca183a9c2' => 
    array (
      0 => 'C:\\xampp\\htdocs\\smarty2\\view\\index2.tpl',
      1 => 1547146031,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5c3793a333adb6_90170092 (Smarty_Internal_Template $_smarty_tpl) {
?>
<html>
<head>
<title><?php echo $_smarty_tpl->tpl_vars['site_title']->value;?>
</title>
<style>
body{
background-color:green;
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

<?php echo $_smarty_tpl->tpl_vars['br']->value;?>

To jest text: <?php echo $_smarty_tpl->tpl_vars['cos']->value;?>


klik<a href="index.php?cm=something"> klikaj</a>	
Get(cm)=<?php echo $_smarty_tpl->tpl_vars['essen']->value;?>
	

<br><br>
zmiana pliku<a href="index.php?load=text2"> klikaj</a>	




<br /><br />
<?php echo $_smarty_tpl->tpl_vars['footer']->value;?>

</body>
</html><?php }
}
