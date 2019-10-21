<?php

include "db/connessione.php";


?>
<!DOCTYPE html>
<html>
<style>
    input[type=text], select {
        width: 100%;
        padding: 12px 20px;
        margin: 8px 0;
        display: inline-block;
        border: 1px solid #ccc;
        border-radius: 4px;
        box-sizing: border-box;
    }

    input[type=submit] {
        width: 100%;
        background-color: #4CAF50;
        color: white;
        padding: 14px 20px;
        margin: 8px 0;
        border: none;
        border-radius: 4px;
        cursor: pointer;
    }

    input[type=submit]:hover {
        background-color: #45a049;
    }

    div {
        border-radius: 5px;
        background-color: #f2f2f2;
        padding: 20px;
    }
</style>
<body>

<h3>Genera Qr-Code</h3>

<div>
    <form action='<?php echo $_SERVER['PHP_SELF']; ?>' method="post" name="ins_cliente">
        <label for="fname">Nome cliente</label>
        <input type="text" id="nome" name="nome" placeholder="Nome cliente">

        <label for="lname">Password</label>
        <input type="text" id="pass" name="pass" placeholder="Password">

        <label for="url">URL</label>
        <input type="text" id="url" name="url" placeholder=URL>

        <input type="submit" value="Registra" name="registra">
    </form>
</div>

</body>

<?php
if (isset($_POST['registra'])){

    $nome = $_POST['nome'];
    $pass = $_POST['pass'];
    $url = $_POST['url'];

    $cod_nome = "$nome";
    for($i=0;$i<strlen($cod_nome)-1;$i++)
        $a = $cod_nome[1].$cod_nome[2].$cod_nome[3];

    $cod_pass = "$pass";
    for($i=0;$i<strlen($cod_pass)-1;$i++)
        $b = $cod_pass[1].$cod_pass[2].$cod_pass[3];

    $c = time();

    $codice = $a.$b.$c;

    $registra = "INSERT INTO `cliente`(`id`, `nome-cliente`, `password`, `codice`, `url`) VALUES ('','$nome','$pass','$codice','$url')";
    $result_cod = mysqli_query($connessione,$registra);

    $path = "clienti/$nome";
    if (file_exists($path)) {
        $originale = "redirect.php";
        $copia = "$path/$codice.php";
        copy("$originale", "$copia");
    } else{
        mkdir($path);
        $originale = "redirect.php";
        $copia = "$path/$codice.php";
        copy("$originale", "$copia");

    }


    // include QR_BarCode class
    include "conf/QR_BarCode.php";

// QR_BarCode object
    $qr = new QR_BarCode();

// create url QR code
    $qr->url('http://192.168.1.14/protecnocard/'.$path.'/'.$codice.'.php');

// display QR code image
    $qr->qrCode(350,'images/'.$nome.'-'.$codice.'.png');

    header("Location: http://localhost/protecnocard/lato_client.php");

}