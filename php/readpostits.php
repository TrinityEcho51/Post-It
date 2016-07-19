<?php
require "../config.php";
include "classes/Databaza.php";


$databaza = new Databaza(SERVER, UZIVATEL, HESLO, DB);
$databaza->connection->query("SET NAMES utf8");

$rfs = $databaza->connection->real_escape_string($_POST["rfs"]);
$nature = $databaza->connection->real_escape_string($_POST["nature"]);

$sql = "SELECT STAV_KOD,
                IMPUTACIA_UR,
                DATUM,
                PREZENTACIA_CHYBY
        FROM   postity_tbl
        WHERE  RFS='".$rfs."'
        AND    NATURE='".$nature."'";

$vysledok = $databaza->connection->query($sql);

$json = [];
while ($riadok = $vysledok->fetch_assoc()) {
  $json[] = $riadok;
}

echo json_encode($json);