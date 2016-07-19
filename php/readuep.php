<?php
require "../config.php";
include "classes/Databaza.php";


$databaza = new Databaza(SERVER, UZIVATEL, HESLO, DB);
$databaza->connection->query("SET NAMES utf8");

$ur = $databaza->connection->real_escape_string($_POST["ur"]);

$sql = "SELECT UEP
        FROM   uep_tbl
        WHERE  UR='".$ur."'";

$vysledok = $databaza->connection->query($sql);

$json = [];
while ($riadok = $vysledok->fetch_assoc()) {
  $json[] = $riadok;
}

echo json_encode($json);