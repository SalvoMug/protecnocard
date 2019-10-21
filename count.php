<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">
<html>
<head>
<title>Simple counter</title>
<style type="text/css">
.scrittura
{font-size:11px;
font-family:Arial;
}
</style>
</head>

<body>

<!-- Configura qui sotto il numero d'inizio del contatore nella variabile $start -->

<?php  $start="0"; ?>

<!-- Puoi configurare il bordo e lo sfondo della tabellina del contatore modificando le proprietà bordercolor e bgcolor qui sotto -->

<table width="150" bordercolor="#FF0000" bgcolor="#FFFFCC" style="border:1px solid;">

<!-- Qui sotto non modificare niente -->

  <tr>
    <td><a href="http://www.tuttophp.altervista.org"><img src="numeri/titcount.gif" border="0"></a></td>
  </tr><tr>
    <td><?php
$file="count.txt";

if (!(file_exists($file)))
{
$crea_file=fopen($file,"w");
fputs($crea_file,"$start");
fclose($crea_file);
}

// Lettura del file
$leggi_file = fopen($file,"r");
$visite = fread($leggi_file,filesize($file));
fclose($leggi_file);

$visite=$visite+1;

// Scrittura su file
$scrivi_file=fopen($file,"w");
fputs($scrivi_file,$visite);
fclose($scrivi_file);

// Visualizzazione grafica delle cifre
$num_cifre=strlen($visite);
for ($i=0;$i<$num_cifre;$i++)
{
$cifra=substr($visite,$i,1);
switch($cifra)
{
case 1: $lettera="<img src=\"numeri/1.gif\">";echo $lettera;break;
case 2: $lettera="<img src=\"numeri/2.gif\">";echo $lettera;break;
case 3: $lettera="<img src=\"numeri/3.gif\">";echo $lettera;break;
case 4: $lettera="<img src=\"numeri/4.gif\">";echo $lettera;break;
case 5: $lettera="<img src=\"numeri/5.gif\">";echo $lettera;break;
case 6: $lettera="<img src=\"numeri/6.gif\">";echo $lettera;break;
case 7: $lettera="<img src=\"numeri/7.gif\">";echo $lettera;break;
case 8: $lettera="<img src=\"numeri/8.gif\">";echo $lettera;break;
case 9: $lettera="<img src=\"numeri/9.gif\">";echo $lettera;break;
case 0: $lettera="<img src=\"numeri/0.gif\">";echo $lettera;break;
}
}
?></td>
</tr>
</table>

</body>
</html>
