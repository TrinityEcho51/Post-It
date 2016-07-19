<?php
require "../config.php";
include "classes/Databaza.php";


$databaza = new Databaza(SERVER, UZIVATEL, HESLO, DB);
$databaza->connection->query("SET NAMES utf8");

$sql = "SELECT postity_tbl.ID as 'ID',
                postity_tbl.STAV_KOD as 'STAV_KOD',
                postity_tbl.MIESTO_DETEKCIE as 'MIESTO_DETEKCIE',
                DATE_FORMAT(postity_tbl.DATUM, '%d.%m.%Y') as 'DATUM',
                postity_tbl.VIS as 'VIS',
                postity_tbl.RFS as 'RFS',
                rfs_tbl.POPIS_SK as 'RFS_POPIS',
                postity_tbl.NATURE as 'NATURE',
                natur_tbl.POPIS_SK as 'NATURE_POPIS',
                postity_tbl.IMPUTACIA_UR as 'UR',
                postity_tbl.IMPUTACIA_UEP as 'UEP',
                postity_tbl.IMPUTACIA_ZMENA as 'ZMENA'
        FROM   postity_tbl
        JOIN   rfs_tbl
        ON     postity_tbl.RFS = rfs_tbl.RFS
        JOIN   natur_tbl
        ON     postity_tbl.NATURE = natur_tbl.NATURE";

$vysledok = $databaza->connection->query($sql);

$json = [];
while ($riadok = $vysledok->fetch_assoc()) {
  $json[] = $riadok;
}

echo json_encode($json);