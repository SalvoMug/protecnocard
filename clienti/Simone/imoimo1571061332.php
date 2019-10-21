<?php
include "../../db/connessione.php";

//manca inserimento controllo sessione

$nome = basename($_SERVER['PHP_SELF']);

$file = explode(".","$nome");

$sql = "SELECT * FROM `cliente` WHERE `codice` = '$file[0]'";
$result = mysqli_query($connessione,$sql);
$row = mysqli_fetch_assoc($result );
$url = $row['url'];

header("Location: $url");