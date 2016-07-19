<?php
class Actions
{
    private $_spojenie;


    function __construct()
    {
        global $databaza;
        $this->_spojenie = $databaza->connection;
    }


    public function prihlas($meno, $heslo)
    {
        $meno     = $this->_spojenie->real_escape_string(strip_tags($meno));
        $heslo    = $this->_spojenie->real_escape_string(strip_tags($heslo));
        $sql = "SELECT * FROM hesla_tbl WHERE uid='".$meno."'";
        $vysledok = $this->_spojenie->query($sql);
        if ($vysledok->num_rows > 0) {
            $riadok = $vysledok->fetch_assoc();
            if (password_verify($heslo, $riadok["HESLO"])) {
                $_SESSION["prihlaseny"] = "ano";
                $_SESSION["uid"] = $riadok["UID"];
                $sql = "SELECT UZIVATELIA_TBL.UR as 'ur',
                                UZIVATELIA_TBL.UEP as 'uep',
                                UZIVATELIA_TBL.MENO_PRIEZVISKO as 'plne_meno',
                                UZIVATELIA_TBL.ZMENA as 'zmena',
                                PRAVA_TBL.ROLE as 'role'
                        FROM   UZIVATELIA_TBL
                        JOIN   PRAVA_TBL
                        ON     UZIVATELIA_TBL.UID = PRAVA_TBL.UID
                        WHERE  UZIVATELIA_TBL.UID='".$_SESSION["uid"]."'";
                $vysledok = $this->_spojenie->query($sql);
                $riadok = $vysledok->fetch_assoc();
                $_SESSION["role"] = $riadok["role"];
                $_SESSION["ur"] = $riadok["ur"];
                $_SESSION["uep"] = $riadok["uep"];
                $_SESSION["zmena"] = $riadok["zmena"];
                $_SESSION["plne_meno"] = $riadok["plne_meno"];
                if ($_SESSION["role"] == 1) {
                $_SESSION["add"] = 1;
                }
            } else {
                // Nieco niekam vypis, ze nespravne meno alebo heslo
            }
        } else {
            // Nieco niekam vypis, ze nespravne meno alebo heslo
        }
    }


    public function odhlas()
    {
        global $databaza;
        $databaza->stav = "Boli ste úspešne odhlásený.";
        $databaza->kod  = 1;

        $_SESSION["prihlaseny"] = "nie";
        $_SESSION["jeadmin"] = 0;
        $_SESSION["menoPrihlaseneho"] = "Neprihlásený";
    }


    public function vytvorPostit()
    {
        $rfs    = $this->_spojenie->real_escape_string($_POST["rfs"]);
        $nature = $this->_spojenie->real_escape_string($_POST["nature"]);
        $vis    = $this->_spojenie->real_escape_string($_POST["vis"]);
        $model  = $this->_spojenie->real_escape_string($_POST["model"]);
        $place  = $this->_spojenie->real_escape_string($_POST["place"]);
        $ur     = $this->_spojenie->real_escape_string($_POST["ur"]);
        $uep    = $this->_spojenie->real_escape_string($_POST["uep"]);
        $popis  = $this->_spojenie->real_escape_string($_POST["popis"]);

        $sql = "INSERT INTO postity_tbl (DATUM,
                                            UID_CREATOR,
                                            RFS,
                                            NATURE,
                                            IMPUTACIA_UR,
                                            IMPUTACIA_UEP,
                                            VIS,
                                            STAV_KOD,
                                            MIESTO_DETEKCIE)
                VALUES                  (CURRENT_TIMESTAMP,
                                            '".$_SESSION["uid"]."',
                                            UPPER('".$rfs."'),
                                            '".$nature."',
                                            '".$ur."',
                                            '".$uep."',
                                            '".$vis."',
                                            1,
                                            '".$place."')";

        if (!$this->_spojenie->query($sql) === TRUE) {
            die("Chyba: " . $this->_spojenie->error);
        }
    }
}