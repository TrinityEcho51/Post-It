<?php
require "../config.php";
include "classes/Databaza.php";


$databaza = new Databaza(SERVER, UZIVATEL, HESLO, DB);
$databaza->connection->query("SET NAMES utf8");

if (isset($_POST["rfs"])) {
  $rfs = $databaza->connection->real_escape_string($_POST["rfs"]);
  $sql = "SELECT POPIS_SK FROM rfs_tbl WHERE RFS='".$rfs."'";
  $vysledok = $databaza->connection->query($sql);

  echo json_encode($vysledok->fetch_assoc());
}

if (isset($_POST["nature"])) {
  $nature = $databaza->connection->real_escape_string($_POST["nature"]);
  $sql = "SELECT POPIS_SK FROM natur_tbl WHERE NATURE='".$nature."'";
  $vysledok = $databaza->connection->query($sql);

  echo json_encode($vysledok->fetch_assoc());
}