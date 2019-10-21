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

<h3>Modifica URL del qr-code</h3>

<div>
    <form action='<?php echo $_SERVER['PHP_SELF']; ?>' method="post" name="mod_url">
        <label for="fname">Codice</label>
        <input type="text" id="codice" name="codice" placeholder="Codice QR-code">

        <label for="url">URL</label>
        <input type="text" id="url" name="url" placeholder=URL>

        <input type="submit" value="Modifica URL" name="mod-url">
    </form>
</div>

</body>

<?php
if (isset($_POST['mod-url'])) {

    $cod = $_POST['codice'];
    $url = $_POST['url'];

    $mod_url = "UPDATE `cliente` SET `url` = '$url' WHERE `codice` = '$cod'";
    $result = mysqli_query($connessione,$mod_url);
}
?>