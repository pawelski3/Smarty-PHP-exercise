<?php
/* index.php */

require '/libs/Smarty.class.php';
$smarty = new Smarty;
$smarty->template_dir='view';




// tworzymy zmienne
$title = 'Smarty test';
$time = date('H:i:s');
$text = 'Test biblioteki Smarty!';
$footer = 'a to stopka jest!';
$gd='hghgh';
$cos="cos cos cos";
$br="<br>";

//$cm=$_GET['cm'];

if (!isset($_GET['load'])|| $_GET['load']=="text"){$strona="text";}
else {$strona=$_GET['load'];}


if (!isset($_GET['cm'])){$essen="nie jest ustanowiona";}
else {$essen=$_GET['cm'];}

//$essen="aaaacm";
echo "<b>Wersja biblioteki GD:<br>";
echo GD_VERSION;
//var_dump(gd_info());
$bib=gd_info();
foreach($bib as $key=>$value){echo "$key=$value/n";}
echo "<hr>";
// przypisujemy zmienne do szablonu
$smarty->assign('br',$br);
$smarty->assign('cos',$cos);
$smarty->assign('site_title', $title);
$smarty->assign('time', $time);
$smarty->assign('text', $text);
$smarty->assign('footer', $footer);
$smarty->assign('gd', $gd);
$smarty->assign('essen',$essen);
$smarty->assign('strona',$strona);

if ($_GET['cm']=='something'){$v="index.tpl";}
else {$v="index2.tpl";}
//$v="index.tpl";
$smarty->display($v);
// renderujemy widok z szablonu index.tpl
?>








?>