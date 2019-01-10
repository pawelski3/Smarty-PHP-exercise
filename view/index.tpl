<html>
<head>
<title>{$site_title}</title>
<style>
body{
background-color:white;
color: black;
}


</style>



</head>

<body>
<h2>{$text}</h2>
Obecna godzina to: {$time}
<br /><br />
Twoja wersja biblioteki gd to: {$gd}
{$br}
cos to jest {$cos}
	<div>
		{include file="$strona.tpl"}
	
	
	</div>
	
klik<a href="index.php?cm=something"> klikaj</a>	
Get(cm)={$essen}	

<br><br>
zmiana pliku<a href="index.php?load=text2"> klikaj</a>	
	




<br /><br />
{$footer}
</body>
</html>