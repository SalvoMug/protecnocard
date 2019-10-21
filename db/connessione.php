<?php
/*
  Connessione al DBMS e selezione del dataabse.
*/
# blocco dei parametri di connessione
// nome di host
$host = "localhost";
// username dell'utente in connessione
$user = "root";
// password dell'utente
$password = "";
// nome del database
$db = "protecnocard";


# stringa di connessione al DBMS
// istanza dell'oggetto della classe MySQLi
$connessione = new mysqli($host, $user, $password, $db);

// verifica su eventuali errori di connessione
if ($connessione->connect_errno) {
    echo "Connessione fallita: ". $connessione->connect_error . ".";
    exit();
}
?>