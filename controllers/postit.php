<?php

class Postit extends Controller {


	function __construct() {
		parent::__construct();		
	}
	
	function index() {
		$this->view->render('postit/prehlad');
	}

	function postit() {
		$this->view->render('postit/postit');
	}

	function prehlad() {
		
		$this->view->render('postit/prehlad');
	}
	
	function pridaj() {

		// $this->DB = new Database();
		$databaza = new Database(SERVER, UZIVATEL, HESLO, DB);
		$cars = array();	
		$sql = "SELECT MODEL FROM modely_tbl";
                    $vysledok = $databaza->connection->query($sql);
                    while ($riadok = $vysledok->fetch_assoc()) {
                        $cars .= "<option value='".$riadok["MODEL"]."'>".$riadok["MODEL"]."</option>";
                    }
		$this->view->msg = $cars;
		$this->view->render('postit/pridaj');
	}

	function prehladd() {
		$this->view->render('postit/pridaj',true);
	}

	function eviduj() {
		$this->view->render('postit/eviduj');
	}

	function nacitaj() {

		$this->DB = new Databaza();
		$databaza = new Databaza(SERVER, UZIVATEL, HESLO, DB);
		//$databaza->connection->query("SET NAMES utf8");

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
	}

	function nacitaj_RFS_NAT() {


		$databaza = new Databaza(SERVER, UZIVATEL, HESLO, DB);
		//$databaza->connection->query("SET NAMES utf8");

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

	}	
	
}